<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\myModule\Controller;

use Drupal\Core\Controller\ControllerBase;

class myModuleController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
  public function verPagina() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World! <br> Esta es mi página...'),
    );
  }
}
?>