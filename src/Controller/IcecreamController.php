<?php

namespace Drupal\icecream\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Controller\ControllerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class IcecreamController extends ControllerBase implements ContainerInjectionInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function page() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );

    $manager = \Drupal::service('plugin.manager.icecream');
    $plugins = $manager->getDefinitions();
    drupal_set_message(print_r($plugins, TRUE));

    foreach ($plugins as $flavor) {
      $instance = $manager->createInstance($flavor['id']);
      $build[] = array(
        '#type' => 'markup',
        '#markup' => t('<p>Flavor @name, cost $@price.</p>', array('@name' => $instance->getName(), '@price' => $instance->getPrice())),
      );
    }

    return $build;
  }
}
