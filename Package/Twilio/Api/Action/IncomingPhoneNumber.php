<?php
namespace Twilio\Api\Action;

use Twilio\Api\Resource\Listing;

/**
 * Twilio incoming phone number resource
 *
 * @package Library
 * @subpackage Twilio\Api\Action
 * @author Aleksey Korzun <al.ko@webfoundation.net>
 */
class IncomingPhoneNumber extends Listing
{
	/**
	 * Create method overwrite
	 *
	 * @param array $parameters Collection of parameters to pass to api
         * 
     	 * @return Instance
	 */
	public function create($parameters = array())
	{
		return parent::createResource($parameters);
	}
}

