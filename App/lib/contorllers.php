<?php
class Contorller{
    public function model($models)
{
    require_once '../App/models/'.$models.'.php';
    return new $models;
}

public function view($view ,$data = [],$data_view=[])
{
    require_once '../App/viwes/'.$view.'.php';
    
}

    
}
