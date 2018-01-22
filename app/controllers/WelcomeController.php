<?php

class WelcomeController extends Controller {
  public function index($name = '') {
    echo "Welcome Controller";
    $person = $this->model('Welcome');
    $this->view('welcome', ['name'=> $person->name, 'no' => $person->no, 'array' => $person->array]);
  }
}
