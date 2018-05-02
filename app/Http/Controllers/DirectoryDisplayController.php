<?php

namespace App\Http\Controllers;

use App\Models\DirectoryDisplay;
use App\Transformers\DirectoryDisplayTransformer;
use Illuminate\Http\Request;

class DirectoryDisplayController extends Controller
{
    public function index()
    {
        $directoryDisplay = DirectoryDisplay::all();
        return fractal()
            ->collection($directoryDisplay)
            ->parseIncludes(['section'])
            ->transformWith(new DirectoryDisplayTransformer())
            ->toArray();
    }
}
