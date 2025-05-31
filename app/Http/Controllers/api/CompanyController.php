<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Models\CompanySettings;

class CompanyController extends Controller
{
    public function index(): JsonResponse {
        $data = [
            'name' => CompanySettings::getValue('name'),
            'logo' => asset('storage/'. CompanySettings::getValue('logo')),
        ];

        return response()->json($data);
    }
}
