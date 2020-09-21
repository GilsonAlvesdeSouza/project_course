<?php


namespace LaraCurso\Suporte;


use CoffeeCode\Cropper\Cropper as Crop;

class Cropper
{
    public static function thumb(string $uri, int $width, int $heigth)
    {
        $cropper = new Crop('../public/storage/cache');
        $pathTumb = $cropper->make(config('filesystems.disks.public.root') . '/' . $uri, $width, $heigth);
        $file = 'storage/cache/' . collect(explode('/', $pathTumb))->last();

        return $file;
    }
}
