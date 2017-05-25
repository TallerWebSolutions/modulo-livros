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
    $nodeLivro = $this->entityTypeManager()->getStorage('node')->loadMultiple(['99', '106']);
    $nodeLivroView = $this->entityTypeManager()->getViewBuilder('node')->viewMultiple($nodeLivro, 'default');

    return $nodeLivroView;

    // return array(
    //   '#type' => 'markup',
    //   '#markup' => $nodeLivroView,
    // );
  }

}
