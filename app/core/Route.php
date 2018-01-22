<?php

Class Route {

  public static function get($path, $controller) {
    $controller = explode('@', $controller);
    return $controller;
  }

}
