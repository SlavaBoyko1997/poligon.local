<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;

class BlogCategoryRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    public function getForComboBox()
    {
        return $this->startConditions()->all();
    }

    public function getAllWithPaginate($parPage = null)
    {
        $fields = ['id','title','parent_id'];

        $result = $this
            ->startConditions()
            ->select($fields)
            ->paginate($parPage);

        return $result;
    }
}