<?php namespace Ridvanbaluyos\Semaphore\Facades;

use Illuminate\Support\Facades\Facade;

class Semaphore extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'semaphore'; }

}
