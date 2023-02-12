<?php

namespace App\Http\Controllers;

use App\Interfaces\LoadSource;
use Illuminate\Http\Request;

class JsonUserController extends Controller
{
    public function __construct(public LoadSource $service)
    {

    }

    /**
     * @return object
     */
    public function index(): object
    {
        $path = storage_path('app/testtakers.json');

        if (!file_exists($path)) {
            return response()->json(['error ' => true, 'message' => 'Not found'], 404);
        }

        return response()->json($this->service->getData('Json'), 200);
    }

}
