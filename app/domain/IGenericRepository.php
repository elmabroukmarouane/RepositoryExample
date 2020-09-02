<?php
declare(strict_types=1);
namespace App\domain;
use Illuminate\Database\Eloquent\Model;
use App\infrastructure\models\Category;

interface IGenericRepository {
    public function getAll();
    public function getById($id);
    public function add($entity);
    public function update($entity, $id);
    public function delete($id);
}