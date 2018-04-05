<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 5/4/18
 * Time: 9:03 AM
 */

namespace app\Transformers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Gallery $gallery)
    {
        return [
            'id' => $gallery->id,
            'name' => $gallery->name,
            'images_path' => Storage::url($gallery->images_path)
        ];
    }
}