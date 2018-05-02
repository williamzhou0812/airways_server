<?php
namespace app\Transformers;

use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class SectionTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Section $section)
    {
        return [
            'id' => $section->id,
            'name' => $section->name,
            'images_path' => Storage::url($section->image_path)
        ];
    }
}