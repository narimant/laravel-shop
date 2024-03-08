<?php

namespace App\Http\Services\Image;

use Illuminate\Support\Facades\Config;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ImageService extends ImageToolsService
{
    public function save($image)
    {
        //set image
        $this->setImage($image);
        $this->provider();

        //save image
        $manager = new ImageManager(new Driver());

        $image = $manager->read($image->getRealPath());
        $image = $image->save(public_path($this->getImageAddress()));
        return $image ? $this->getImageAddress() : false;
    }

    public function fitAndSave($image, $width, $height)
    {
        //set image
        $this->setImage($image);
        $this->provider();

        //save image
        $manager = new ImageManager(new Driver());

        $image = $manager->read($image->getRealPath());
        $image = $image->cover($width, $height,'center');
        $image = $image->save(public_path($this->getImageAddress()));
        return $image ? $this->getImageAddress() : false;
    }

    public function createIndexAndSave($image)
    {

        //get data from config
        $imageSize = Config::get('image.index-image-sizes');

        //set mage
        $this->setImage($image);

        //set directory
        // $this->getImageDirectory() ?? $this->setImageDirectory("Y") . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d');
        // $this->setImageDirectory($this->getImageDirectory() . DIRECTORY_SEPARATOR . time());
        //set name
        $this->getImageName() ?? $this->setImageName(time());
        $imageName = $this->getImageName();
        $index = [];
        $n=0;
        $manager = new ImageManager(new Driver());


        foreach ($imageSize as $sizeAlias => $imageSize) {
            //create and this size name
            $currentImageName = $imageName . '_' . $sizeAlias;
            $this->setImageName($currentImageName);

            //excute provider
            $this->provider();

            //save image


            $result = $manager->read($image->getRealPath());
            $result = $result->cover($imageSize['width'], $imageSize['height'],'center');
            $result = $result->save(public_path($this->getImageAddress()));

            if ($result) {
                $index[$sizeAlias] = $this->getImageAddress();
            } else {
                return false;
            }
        }

       $images['indexArray']=$index;
       $images['directory']=$this->getFinalImageDirectory();
       $images['currentImage']=Config::get('image.default-current-index-image');
        return $images;
    }

    public function deleteImage($imagePath){
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }
    public function deleteIndex($image){
        $directory=public_path($image['dorecpty']);
        $this->deleteDirectoryAndFiles($directory);
    }

    public function deleteDirectoryAndFiles($directory)
    {
        if(!is_dir($directory))
        {
            return false;
        }

        $files = glob($directory . DIRECTORY_SEPARATOR . '*', GLOB_MARK);
        foreach($files as $file)
        {
            if(is_dir($file))
            {
                $this->deleteDirectoryAndFiles($file);
            }
            else{
                unlink($file);
            }
        }
        $result = rmdir($directory);
        return $result;
    }
}
