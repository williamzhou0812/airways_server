<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 5/4/18
 * Time: 10:56 AM
 */

namespace app\Transformers;

use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;

class PromotionTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Promotion $promotion)
    {
        return [
            'id' => $promotion->id,
            'images_path' => Storage::url($promotion->images_path)
        ];
    }
}