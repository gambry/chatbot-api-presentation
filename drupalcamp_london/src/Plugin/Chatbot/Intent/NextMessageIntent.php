<?php

namespace Drupal\drupalcamp_london\Plugin\Chatbot\Intent;

use Drupal\chatbot_api\Plugin\IntentPluginBase;
use Drupal\chatbot_api\Plugin\IntentPluginManager;

/**
 * Plugin implementation of the 'list_messages_next' Chatbot API Intent.
 *
 * @Intent(
 *   id = "list_messages_next",
 *   label = @Translation("Next message intent")
 * )
 */
class NextMessageIntent extends IntentPluginBase {

  /**
   * {@inheritdoc}
   */
  public function process() {

    /** @var IntentPluginManager $plugin_manager */
    $manager = \Drupal::service('plugin.manager.chatbot_intent_plugin');
    if ($manager->hasDefinition('list_messages')) {

      $configuration = [
        'request' => $this->request,
        'response' => $this->response,
      ];
      $plugin = $manager->createInstance('list_messages', $configuration);
      $plugin->process();
    }
  }

}
