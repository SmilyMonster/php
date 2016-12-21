<?php
define('DS', DIRECTORY_SEPARATOR);

function downloadImage()
{
    if(!empty($_FILES))
    {
        $destination = __DIR__.DS.'gallery'.DS.$_FILES['userFile']['name'];
        move_uploaded_file($_FILES['userFile']['tmp_name'], $destination);
    }
}

function showImages()
{
    $html ='';
    if(is_dir('gallery'))
    {
        $images = array_diff(scandir('gallery'), array('..', '.'));
        foreach($images as $image)
            $html.= <<<GALLERY
            <img src = "gallery/$image" />
GALLERY;
    }
    return $html;
}
