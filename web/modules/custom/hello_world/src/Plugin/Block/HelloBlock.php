<?php
namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block information"),
 *   category = @Translation("Hello World my information"),
 * )
 */

class HelloBlock extends BlockBase {

  /**
   * {@inhrtitdoc}
   */
  public function build()
  {
    $renderable = [
      '#theme' => "hello_template",
      '#title' => $this->t('my custom block title'),
      '#description' => 'my hello block',
    ];
    return $renderable;
  }

}
