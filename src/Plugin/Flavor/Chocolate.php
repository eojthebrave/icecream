<?php

/**
 * @file
 * Contains \Drupal\icecream\Plugin\Flavor\Chocolate.
 */

namespace Drupal\icecream\Plugin\Flavor;

use Drupal\icecream\FlavorBase;

/**
 * Provides a 'chocolate' flavor.
 *
 * @Flavor(
 *   id = "chocolate",
 *   name = @Translation("Chocolate"),
 *   price = 1.75
 * )
 */
class Chocolate extends FlavorBase {
  public function slogan() {
    return t('The other best flavor.');
  }
}
