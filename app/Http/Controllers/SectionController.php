<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Transformers\SectionTransformer;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Section::all();
         return fractal()
            ->collection($section)
             ->parseIncludes(['directory_display'])
             ->transformWith(new SectionTransformer)
            ->toArray();
    }
}
