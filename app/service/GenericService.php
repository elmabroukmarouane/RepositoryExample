<?php
namespace App\service;
use App\service\IGenericService;
use App\domain\IGenericRepository;
use App\infrastructure\models\Category;

class GenericService implements IGenericService {
    protected $genericRepository;

    public function __construct(IGenericRepository $genericRepository) {
        $this->genericRepository = $genericRepository;
    }

    public function getAll() {
        return $this->genericRepository->getAll();
    }
    
    public function getById($id) {
        return $this->genericRepository->getById($id);
    }
    
    public function add($entity) {
        return $this->genericRepository->add($entity);
    }
    
    public function update($entity, $id) {
        return $this->genericRepository->update($entity, $id);
    }
    
    public function delete($id) {
        return $this->genericRepository->delete($id);
    }
}