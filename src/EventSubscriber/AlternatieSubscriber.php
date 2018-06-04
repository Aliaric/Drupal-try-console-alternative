<?php

namespace Drupal\try_console_alternative\EventSubscriber;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class AlternatieSubscriber.
 */
class AlternatieSubscriber implements EventSubscriberInterface {

var $a = 132;
  /**
   * Constructs a new AlternatieSubscriber object.
   */
  public function __construct() {

  }

  /**
   * {@inheritdoc}
   */
  static function getSubscribedEvents() {
//    $events['0'] = ['kernel_request'];
    $events[KernelEvents::REQUEST][] = ['kernel_request', 27];
    return $events;
  }

  /**
   * This method is called whenever the 0 event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function kernel_request(Event $event) {
    drupal_set_message('Event 0 thrown by Subscriber in module try_console_alternative.', 'status', TRUE);
  }

}
