<?php

function demo()
{
    return 'hello helpers';
}

function imageUpload($image, $directory )
{
    $imageExtension = $image->getClientOriginalExtension();
    $imageName      = rand(1000, 500000).'.'.$imageExtension;
    $image->move($directory, $imageName);
    return $directory.$imageName;
}
