<?php
namespace app\Transformers;

use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use App\Transformers\DirectoryDisplayTransformer;

class SectionTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['directory_display'];

    public function transform(Section $section)
    {
        return [
            'id' => $section->id,
            'name' => $section->name,
            'images_path' => Storage::url($section->image_path)
        ];
    }


    public function includeDirectoryDisplay(Section $section)
    {
        return $this->collection($section->directory_displays, new DirectoryDisplayTransformer);
    }
}