<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Interfaces;

/**
 * Gateway Intellisense Helper
 */
interface Gateway {

	/**
	 * @see https://discordapp.com/developers/docs/resources/gateway#get-gateway
	 * 
	 * @param array $options []
	 * @return array Returns an object with a single valid WSS URL, which the client can use as a basis for Connecting.
	 */
	public function getGateway(array $options);

	/**
	 * @see https://discordapp.com/developers/docs/resources/gateway#get-gateway-bot
	 * 
	 * @param array $options []
	 * @return array Returns an object with the same information as Get Gateway, plus a shards key, containing the recommended number of shards to connect with (as an integer).
	 */
	public function getGatewayBot(array $options);
}