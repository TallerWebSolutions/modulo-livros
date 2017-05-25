<?php

namespace Drupal\livros\Controller;

use Drupal\Core\Controller\ControllerBase;

class LivroController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content($id) {
    $nodeLivro = $this->entityTypeManager()->getStorage('node')->load($id);
    $nodeLivroView = $this->entityTypeManager()->getViewBuilder('node')->view($nodeLivro, 'default');

    return $nodeLivroView;

    return array(
      '#type' => 'markup',
      '#markup' => $first,
    );
  }

}
