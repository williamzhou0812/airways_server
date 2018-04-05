<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 4/4/18
 * Time: 3:33 PM
 */

namespace app\Transformers;

use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Apartment $apartment)
    {

        $images_array = array();

        $images_string_array = json_decode($apartment->images_path);

        foreach ($images_string_array as $image) {
            $images_array[] = Storage::url($image);
        }

        return [
            'id' => $apartment->id,
            'name' => $apartment->name,
            'description' => $apartment->description,
            'phone' => $apartment->phone,
            'open_hours' => $apartment->open_hours,
            'images_path' => $images_array
        ];
    }
}