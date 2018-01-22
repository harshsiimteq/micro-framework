<?php
/**
 *
 */
class Controller
{
  protected function model($model) {
    require_once '../app/'.$model.'.php';
    return new $model();
  }

  protected function view($view, $data = []) {
    require_once '../resources/views/'.$view.'.php';
  }
  
}


 ?>
