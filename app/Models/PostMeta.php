<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;


/**
 * Class PostMeta
 *
 * @package App\Models
 * @version June 19, 2020, 6:50 am UTC
 * @property string $meta_key
 * @property string $meta_value
 * @property int $post_id
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
 */
class PostMeta extends Model 
{
    
    
     
    public $table = 'post_meta';
    public $fillable = [
        'post_id',
        'meta_key',
        'meta_value',
    ];
    
    

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'post_id' => 'required',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'post_id'        => 'integer',
        'meta_key' => 'string',
        'meta_value' => 'string',
    ];
     
    
    
    
    
}
