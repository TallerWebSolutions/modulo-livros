<?php

namespace Drupal\livros\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "livros_block",
 *   admin_label = @Translation("Bloco de livros"),
 * )
 */
class LivroBlock extends BlockBase implements BlockPluginInterface {



 /**
  * {@inheritdoc}
  */
 public function blockForm($form, FormStateInterface $form_state) {
   $form['texto'] = [
     '#type' => 'textfield',
     '#title' => $this->t('Texto'),
     '#description' => $this->t('Texto de chamada do botão'),
     '#default_value' => $this->configuration['texto'],
     '#maxlength' => 64,
     '#size' => 64,
     '#weight' => '0',
   ];

   return $form;
 }

 /**
  * {@inheritdoc}
  */
 public function blockSubmit($form, FormStateInterface $form_state) {
   $this->configuration['texto'] = $form_state->getValue('texto');
 }


  /**
   * {@inheritdoc}
   */
  public function build() {

    $build['livro_block_texto']['#markup'] = '<p>' . $this->configuration['texto'] . '</p>';

    return $build;
  }

}
