<?php

namespace App\Http\Controllers;

use App\Models\DirectoryDisplay;
use App\Transformers\DirectoryDisplayTransformer;
use Illuminate\Http\Request;

class DirectoryDisplayController extends Controller
{
    public function index()
    {
        $directoryDisplay = DirectoryDisplay::where([
            ['image_path', '!=', '[]'],
            ['image_path', '!=', '']
        ])->get();
        return fractal()
            ->collection($directoryDisplay)
            ->parseIncludes(['section'])
            ->transformWith(new DirectoryDisplayTransformer())
            ->toArray();
    }
}
