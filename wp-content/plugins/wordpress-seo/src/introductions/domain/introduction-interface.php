<?php

namespace Yoast\WP\SEO\Introductions\Domain;

/**
 * Represents an introduction.
 */
interface Introduction_Interface {

	/**
	 * Returns the unique name.
	 *
	 * @return string
	 */
	public function get_name();

	/**
	 * Returns the requested pagination priority. Lower means earlier.
	 *
	 * @return int
	 */
	public function get_priority();

	/**
	 * Returns whether this introduction should show.
	 *
	 * @return bool
	 */
	public function should_show();
}
