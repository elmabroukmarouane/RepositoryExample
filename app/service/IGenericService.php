<?php
namespace App\service;
use App\infrastructure\models\Category;

interface IGenericService {
    public function getAll();
    public function getById($id);
    public function add($entity);
    public function update($entity, $id);
    public function delete($id);
}