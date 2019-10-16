<?php

namespace Drupal\drupal_console_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DCDemoBlock' block.
 *
 * @Block(
 *  id = "dcdemo_block",
 *  admin_label = @Translation("Dcdemo block"),
 * )
 */
class DCDemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'dcdemo_block';
     $build['dcdemo_block']['#markup'] = 'Implement DCDemoBlock.';

    return $build;
  }

}
