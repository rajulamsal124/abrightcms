<?php

/**
 * A Bright CMS
 * 
 * Core MVC/CMS framework used in TaskVolt and created for lightweight, custom
 * web applications.
 * 
 * @package A Bright CMS
 * @author Gabriel Liwerant
 */

/**
 * AboutModel Class
 * 
 * @subpackage models
 * @author Gabriel Liwerant
 * 
 * @uses Model
 */
class AboutModel extends Model
{
	/**
	 * Call the parent constructor and pass it objects.
	 * 
     * @param object $storage Data storage object
	 * @param string $storage_type The way data is stored and retrieved
	 * @param object $log Log object for errors, other
	 */
	public function __construct($storage_obj, $storage_type, $log)
	{
		parent::__construct($storage_obj, $storage_type, $log);
	}
}
// End of AboutModel Class

/* EOF models/aboutModel.php */