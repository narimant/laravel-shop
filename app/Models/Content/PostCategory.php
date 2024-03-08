<?php

namespace App\Models\Content;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Content\PostCategory
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $slug
 * @property string $image
 * @property int $status
 * @property string $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory withoutTrashed()
 * @mixin \Eloquent
 */
class PostCategory extends Model
{

    use HasFactory, SoftDeletes, Sluggable;
    protected $casts=['image'=>'array'];
    public function sluggable(): array
    {
        return   [
            'slug'=>[
                'source'=>'name',
            ]
        ];
    }
    protected $fillable = ['name', 'description', 'slug', 'image', 'status', 'tags'];

}
