<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;


/**
 * Class JobCategory
 *
 * @package App\Models
 * @version June 19, 2020, 6:50 am UTC
 * @property string $name
 * @property string $description
 * @property bool|null $is_featured
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobCategory whereIsFeatured($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 * @property-read int|null $jobs_count
 */
class JobCategory extends Model implements HasMedia
{
    use HasMediaTrait;
    
    public function registerMediaCollections()
    {
        $this->addMediaCollection('service-thumbnail')

        ->acceptsFile(function (File $file) {
            return $file->mimeType === 'image/jpeg' || 'image/png' || 'image/GIF';
        })

        ->registerMediaConversions(function (Media $media){
         $this->addMediaConversion('card')
         ->width(400)
         ->height(300);
         $this->addMediaConversion('thumb')
         ->width(100)
         ->height(100);
     });

    }    
    public $table = 'job_categories';
    public $fillable = [
        'name',
        'description',
        'benifits',
        'is_featured',
    ];
    
    const FEATURED = [
        1 => 'Yes',
        0 => 'No',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:job_categories,name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'name'        => 'string',
        'description' => 'string',
        'benifits' => 'string',
        'is_featured' => 'boolean',
        
    ];
    protected $appends = ['thumbnail','banner'];
     
    
    
     public function getThumbnailAttribute()
    {
        /** @var Media $media */
        $media = $this->getMedia('service-thumbnail')->first();
        if (! empty($media)) {
            return $media->getUrl();
        }

        return asset('assets/img/infyom-logo.png');
    }
    
     public function getBannerAttribute()
    {
        /** @var Media $media */
        $media = $this->getMedia('service-banner')->first();
        if (! empty($media)) {
            return $media->getUrl();
        }

        return asset('assets/img/infyom-logo.png');
    }
    
    
    /**
     *
     * @return HasMany
     */
    public function jobs()
    {
        return $this->hasMany(Job::class, 'job_category_id');
    }
}
