<?php

namespace App\Repositories;

abstract class BaseRepository implements BaseRepositoryInterface
{
    // model muốn tương tác
    protected $model;

    public function __construct() {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel() {
        $this->model = app()->make($this->getModel());
    }

    public function getAll() {
        return $this->model->get();
    }



}
