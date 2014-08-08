<?php

/**
 * @file
 * Contains \Drupal\icecream\Annotation\Flavor.
 */

namespace Drupal\icecream\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a flavor item annotation object.
 *
 * Plugin Namespace: Plugin\icecream\flavor
 *
 * @see \Drupal\icecream\Plugin\IcecreamManager
 * @see plugin_api
 *
 * @Annotation
 */
class Flavor extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The name of the flavor.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $name;

  /**
   * The price of one scoop of the flavor in dollars.
   *
   * @var float
   */
  public $price;

}
