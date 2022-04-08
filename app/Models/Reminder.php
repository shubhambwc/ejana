<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Reminder
 *
 * @property int $id
 * @property int $helper_id
 * @property string $reminder
 * @property string $invoice_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reminder whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Model|\Eloquent $type
 */
class Reminder extends Model
{
    /**
     * @var string
     */
    public $table = 'reminders';

    /**
     * @var array
     */
    public $fillable = [
        'helper_id',
        'userid',
        'reminder',
        'date',
        'type',
        'time',
        'file',
        
    ];

    /**
     * @var array
     */
    public $casts = [
        'helper_id'    => 'integer',
        'userid'    => 'integer',
        'reminder' => 'string',
       
    ];

    
}
