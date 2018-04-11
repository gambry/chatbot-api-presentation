<?php

namespace Drupal\drupalcamp_london\Plugin\Chatbot\Intent;

use Drupal\chatbot_api\Plugin\IntentPluginBase;

/**
 * Plugin implementation of the 'maintenance_support' Chatbot API Intent.
 *
 * @Intent(
 *   id = "maintenance_support",
 *   label = @Translation("Maintenance support intent")
 * )
 */
class MaintenanceSupportIntent extends IntentPluginBase {

  /**
   * {@inheritdoc}
   */
  public function process() {
    /*
     * ADD YOUR LOGIC HERE!
     */
    $this->response->setIntentResponse('An appointment with your technician has been booked. The details are below and soon in your mailbox. Thanks for using Drupal Concierge.');
    $this->response->setIntentDisplayCard('Appointment 24th March, 9:30 - 10:30', 'Greetings');
  }

}
