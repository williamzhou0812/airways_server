<?php
/**
 * Created by IntelliJ IDEA.
 * User: nealshen
 * Date: 5/4/18
 * Time: 11:08 AM
 */
namespace app\Transformers;

use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Video $video)
    {
        return [
            'id' => $video->id,
            'video_path' => Storage::url(json_decode($video->path)[0]->download_link)
        ];
    }
}