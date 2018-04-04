<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 4/4/18
 * Time: 3:33 PM
 */

namespace app\Transformers;

use App\Transformers\RoleTransformer;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ApartmentTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Apartment $apartment)
    {
        return [
            'id' => $apartment->id,
            'name' => $apartment->name,
            'description' => $apartment->description,
            'phone' => $apartment->phone,
            'open_hours' => $apartment->open_hours,
            'images_path' => $apartment->images_path
        ];
    }

}