<?php

namespace Drupal\livros\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "livros_block",
 *   admin_label = @Translation("Bloco de livros"),
 * )
 */
class LivroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Olá, eu sou um bloco em codigo'),
    );
  }

}
