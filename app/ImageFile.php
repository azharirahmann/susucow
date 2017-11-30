<?php
namespace App;
use Intervention\Image\Facades\Image as InterventionImage;

class ImageFile
{
    /**
     * Intervention image instance.
     *
     * @var \Intervention\Image\Image
     */
    private $image;

    function __construct(InterventionImage $image)
    {
        $this->image = $image;
    }

    function getRealPath()
    {
        return $this->image->basePath();
    }

}