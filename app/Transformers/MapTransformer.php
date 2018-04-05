<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 5/4/18
 * Time: 10:38 AM
 */


namespace app\Transformers;

use App\Models\Map;
use Illuminate\Support\Facades\Storage;

class MapTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Map $map)
    {
        return [
            'id' => $map->id,
            'images_path' => Storage::url($map->images_path)
        ];
    }
}