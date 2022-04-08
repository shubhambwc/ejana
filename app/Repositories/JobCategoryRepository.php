<?php

namespace App\Repositories;

use App\Models\JobCategory;

/**
 * Class JobCategoryRepository
 */
class JobCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'benifits',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobCategory::class;
    }
}
