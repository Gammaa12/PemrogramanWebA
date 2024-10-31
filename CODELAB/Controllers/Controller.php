<?php

namespace Controller;

class Controller
{
    var $controllerName;
    var $ControllerMethod;

    public function getControllerAttribute()
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->ControllerMethod,
        ];
    }
}