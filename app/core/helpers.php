<?php

namespace MVC\core;

class helpers
{
    public static function redirect($path)
    {
        header("location:DOMIN_NAME" . $path);
    }
}
