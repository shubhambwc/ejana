<?php

namespace App\Queries;

use App\Models\Complaint;

/**
 * Class ComplaintDataTable
 */
class ComplaintDataTable
{
    /**
     * @return Complaint
     */
    public function get()
    {
        /** @var Complaint $query */
        $query = Complaint::query()->select('complaints.*');

        return $query;
    }
}
