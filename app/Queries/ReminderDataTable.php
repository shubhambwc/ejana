<?php

namespace App\Queries;

use App\Models\Reminder;

/**
 * Class IndustryDataTable
 */
class ReminderDataTable
{
    /**
     * @return Industry
     */
    public function get()
    {
        /** @var Industry $query */
        $query = Reminder::query()->select('reminders.*');

        return $query;
    }
}
