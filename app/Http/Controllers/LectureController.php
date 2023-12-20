<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Lecture::all(),
        ]);
    }

    public function show(Lecture $lecture)
    {
        return response()->json([
            'data' => $lecture,
        ]);
    }
}
