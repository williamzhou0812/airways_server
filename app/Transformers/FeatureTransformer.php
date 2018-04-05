<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 5/4/18
 * Time: 10:26 AM
 */


namespace app\Transformers;

use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class FeatureTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Feature $feature)
    {

        $images_array = array();

        $images_string_array = json_decode($feature->images_path);

        foreach ($images_string_array as $image) {
            $images_array[] = Storage::url($image);
        }

        return [
            'id' => $feature->id,
            'name' => $feature->name,
            'description' => $feature->description,
            'phone' => $feature->phone,
            'open_hours' => $feature->open_hours,
            'images_path' => $images_array
        ];
    }
}