<?php
/**
 * Get Image
 *
 * @param $filename
 * @return string
 */

function uploadImage($file, $img)
{
    return '/storage/' . \Storage::disk('public')->putFile($file, $img);
}

function getimg($filename)
{
    return asset($filename);
}


/**
 * Upload an image
 *
 * @param $value
 * @param string $path
 * @return bool|false|string
 */
function uploader($value, $path = 'uploads')
{
    return '/storage/' . Storage::disk('public')->putFile($path, $value);
}


class responder
{
    public static function success($data)
    {
        return response()->json(['status' => true, 'data' => $data]);
    }

    public static function error($data)
    {
        return response()->json(['status' => false, 'msg' => $data]);
    }
}



