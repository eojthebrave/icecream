<?php

/**
 * @file
 * Provides Drupal\icecream\FlavorInterface
 */

namespace Drupal\icecream;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for ice cream flavor plugins.
 */
interface FlavorInterface extends PluginInspectionInterface {

  /**
   * Return the name of the ice cream flavor.
   *
   * @return string
   */
  public function getName();

  /**
   * Return the price per scoop of the ice cream flavor.
   *
   * @return float
   */
  public function getPrice();

  /**
   * A slogan for the ice cream flavor.
   *
   * @return string
   */
  public function slogan();
  
}
