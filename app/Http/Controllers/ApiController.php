<?php

namespace App\Http\Controllers;

use App\Rumah;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = Rumah::with('category', 'gallery')->get();

        return response()->json([
            'status' => 'Success',
            'data' => $data
        ]);
    }

    public function show(Request $request, $id)
    {
        $rumah = Rumah::with('category', 'gallery')->find($id);
        return response()->json([
            'status' => 'Success',
            'data' => $rumah
        ]);
    }
}
