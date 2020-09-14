<?php

namespace App\Repositories;

use App\Models\Header;
use App\Repositories\BaseRepository;

/**
 * Class HeaderRepository
 * @package App\Repositories
 * @version September 14, 2020, 2:59 pm UTC
*/

class HeaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'header',
        'subheader'
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
        return Header::class;
    }
}
