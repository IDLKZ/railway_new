<?php

namespace App\Repositories;

use App\Models\Background;
use App\Repositories\BaseRepository;

/**
 * Class BackgroundRepository
 * @package App\Repositories
 * @version September 14, 2020, 3:13 pm UTC
*/

class BackgroundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img'
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
        return Background::class;
    }
}
