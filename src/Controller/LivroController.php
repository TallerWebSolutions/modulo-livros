<?php

namespace Drupal\livros\Controller;

use Drupal\Core\Controller\ControllerBase;

class LivroController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello Livro!'),
    );
  }

}
