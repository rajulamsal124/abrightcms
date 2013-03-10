<?php if ( ! defined('DENY_ACCESS')) exit('403: No direct file access allowed');

/**
 * A Bright CMS
 * 
 * Open source, lightweight, web application framework and content management 
 * system in PHP.
 * 
 * @package A Bright CMS
 * @author Gabriel Liwerant
 */

/**
 * ExampleView Class
 * 
 * @subpackage views
 * @author Gabriel Liwerant
 * 
 * @uses DefaultPageView
 */
class ExampleView extends DefaultPageView implements PageViewInterface
{
	/**
	 * Construct the parent class.
	 */
	public function __construct()
	{
		parent::__construct();
	}
}
// End of ExampleView Class

/* EOF application/views/exampleView.php */