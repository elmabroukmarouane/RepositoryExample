<?php

namespace App\Http\Controllers;
use App\service\IGenericService;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    protected $genericService;

    public function __construct(IGenericService $genericService)
    {
        $this->genericService = $genericService;
    }
    
    public function all(): array
    {
        return $genericService->getAll();
    }
}
