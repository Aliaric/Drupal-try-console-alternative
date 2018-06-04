<?php

namespace Drupal\try_console_alternative;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;


/**
 * Class AlternativeService.
 */
class AlternativeService implements AlternativeServiceInterface {
  use StringTranslationTrait;
  /**
   * Constructs a new AlternativeService object.
   */
  public function __construct() {

  }
  public function cow_say() {
    $messenger = \Drupal::messenger();
    $messenger->addMessage($this->t('Moo'));
//    $messenger->addMessage(new TranslatableMarkup("Moo"));
  }
}
