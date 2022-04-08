<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Industry
 *
 * @package App\Models
 * @version June 20, 2020, 5:43 am UTC
 * @property string $name
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levels newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levelsnewQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levels query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levelswhereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levels whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levelswhereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levelswhereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Langauge_levels whereDescription($value)
 */
class Langauge_levels extends Model
{
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];
    public $table = 'language_levels';
    public $fillable = [
        'name',
        'Langauge_levels',
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'level'        => 'string',
        
    ];
}
