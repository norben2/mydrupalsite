<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  /**
   * Retourne a hello page
   */

  /**
   * @return array
   * A simple renderable array
   */
  public function index () {
    return array(
      '#markup' => 'hello world !',
    );
  }
}
