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
 * WelcomeView Class
 * 
 * @subpackage views
 * @author Gabriel Liwerant
 * 
 * @uses DefaultPageView
 */
class WelcomeView extends DefaultPageView implements PageViewInterface
{
	/**
	 * Construct the parent class.
	 */
	public function __construct()
	{
		parent::__construct();
	}
}
// End of WelcomeView Class

/* EOF application/views/welcomeView.php */