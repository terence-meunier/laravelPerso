<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index() {
        return response()->json([
            'message' => 'coucou',
        ]);
    }
}
