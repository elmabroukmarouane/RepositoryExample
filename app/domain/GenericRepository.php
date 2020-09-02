<?php

namespace App\domain;
use App\domain\IGenericRepository;
use Illuminate\Database\Eloquent\Model;
use App\infrastructure\models\Category;

class GenericRepository implements IGenericRepository {
    protected $model;

    public function __construct(Category $model) {
        $this->model = $model; 
    }
    
    public function getAll() {
        return $this->model->all();
    }
    
    public function getById($id) {
        return $this->model->findOrFail($id);
    }
    
    public function add($entity) {
        return $this->model->create($entity);
    }
    
    public function update($entity, $id) {
        return $this->model->where('id', $id)->update($entity);
    }
    
    public function delete($id) {
        return $this->model->destroy($id);
    }
}