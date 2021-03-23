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
    return [
      '#theme' => 'hello_template',
      '#description' => 'my hello block',
      '#attributes' => [],
    ];
  }

}
