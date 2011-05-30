<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Contains methods useful to all views in an application.
 *
 * @package    Synapse
 * @category   Kostache
 * @author     Synapse Studios
 */
abstract class Abstract_View_Base extends Kostache
{
	/**
	 * Assets object to add css/js groups to
	 */
	protected $_assets;

	/**
	 * Gets or sets the Assets object in the view
	 *
	 * @param  Object the Assets object
	 * @return this
	 */
	public function assets($assets)
	{
		$this->_assets = $assets;

		return $this;
	}

	/**
	 * Lambda function to alternate between a set of strings
	 *
	 * // This will alternate between 'one', 'two', 'three', and 'four'
	 * {{#alternate}}one|two|three|four{{/alternate}}
	 *
	 * @param   string a pipe-separated list of strings
	 * @return  string
	 */
	public function alternate()
	{
		return function($string)
		{
			return call_user_func_array('Text::alternate', explode('|', $string));
		};
	}
}
