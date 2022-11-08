<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arc;

class ArcController extends Controller
{
    public function index()
    {
        return view('archive', [
            "title" => "Archive",
            "archive" => Arc::all()
        ]);
    }

    public function show(Arc $arc)
    {
        return view('arc', [
            "title" => "Single Post",
            "arc" => $arc
        ]);
    }
}