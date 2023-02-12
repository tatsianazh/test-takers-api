<?php

namespace App\Http\Controllers;

use App\Interfaces\LoadSource;
use Illuminate\Http\Request;

class CsvUserController extends Controller
{
    public function __construct(public LoadSource $service)
    {

    }

    /**
     * @return object
     */
    public function index(): object
    {

        $path = storage_path('app/testtakers.csv');

        if (!file_exists($path)) {
            return response()->json(['error ' => true, 'message' => 'Not found'], 404);
        }

        return response()->json($this->service->getData('Csv'), 200);
    }
}
