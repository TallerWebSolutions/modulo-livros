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

    $query = $this->entityTypeManager()->getStorage('node')->getQuery();
    $query->condition('status', 1);
    //$query->condition('type', 'livro');
    //$query->condition('field_autor', 84);
    $entity_ids = $query->execute();

    $livros = $this->entityTypeManager()->getStorage('node')->loadMultiple($entity_ids);
    $build = $this->entityTypeManager()->getViewBuilder('node')->viewMultiple($livros, 'teaser');

    return $build;

    // https://www.drupal.org/docs/7/api/render-arrays/render-arrays-overview
    // $build['livros_lista'] = [
    //   '#theme' => 'item_list',
    //   // The list itself.
    //   '#items' => $list,
    //   '#title' => $this->t('Argument Information'),
    // ];
  }

}
