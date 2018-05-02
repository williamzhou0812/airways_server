<?php

namespace app\Transformers;

use App\Models\DirectoryDisplay;
use App\Transformers\SectionTransformer;
use Illuminate\Support\Facades\Storage;

class DirectoryDisplayTransformer extends  \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['section'];

    public function transform(DirectoryDisplay $directoryDisplay)
    {
        $images_array = array();

        $images_string_array = json_decode($directoryDisplay->image_path);

        foreach ($images_string_array as $image) {
            $images_array[] = Storage::url($image);
        }

        return [
            'id' => $directoryDisplay->id,
            'heading' => $directoryDisplay->heading,
            'subheading' => $directoryDisplay->subheading,
            'left_description' => $directoryDisplay->left_description,
            'right_description' => $directoryDisplay->right_description,
            'images_path' => $images_array
        ];
    }

    public function includeSection(DirectoryDisplay $directoryDisplay)
    {
        return $this->item($directoryDisplay->section, new SectionTransformer);
    }
}
