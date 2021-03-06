<?php

namespace Elgg\Debug;

use Elgg\Timer;

/**
 * Make an object accept a timer.
 *
 * @internal
 */
trait Profilable {

	/**
	 * @var Timer|null
	 */
	private $timer;

	/**
	 * Set a timer that should collect begin/end times for events
	 *
	 * @param Timer $timer Timer
	 * @return void
	 */
	public function setTimer(Timer $timer) {
		$this->timer = $timer;
	}
}
