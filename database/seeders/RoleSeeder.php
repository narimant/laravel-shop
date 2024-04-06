<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
            $insertId= DB::table('roles')->insertGetId(
                [
                    'name' => 'superAdmin',
                    'description' => 'ادمین با تمامی مجوز ها',
                    'status' => 1,
                    'created_at' => Carbon::now(),
                ],
            );
            $permissionss=DB::table('permissions')->select('id')->get()->toArray();
            foreach( $permissionss as $item){
               DB::table('permission_role')->insert([
                'role_id'=>$insertId,
                'permission_id'=> $item->id,
               ]);
            }

        });


    }
}
