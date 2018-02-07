<?php
/*
 * copyright (c) 2018 tuukka norri
 * this code is licensed under mit license (see license for details).
 */

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class TwigLambdaPlugin
 * @package Grav\Plugin
 */
class TwigLambdaPlugin extends Plugin
{
	/**
	 * @return array
	 *
	 * The getSubscribedEvents() gives the core a list of events
	 * that the plugin wants to listen to. The key of each
	 * array section is the event that the plugin listens to
	 * and the value (in the form of an array) contains the
	 * callable (or function) as well as the priority. The
	 * higher the number the higher the priority.
	 */
	public static function getSubscribedEvents()
	{
		return [
			'onPluginsInitialized' => ['onPluginsInitialized', 0]
		];
	}
	
	/**
	 * Initialize the plugin
	 */
	public function onPluginsInitialized()
	{
		// Don't proceed if we are in the admin plugin.
		if ($this->isAdmin()) {
			return;
		}

		// Enable the main event we are interested in
		$this->enable([
			'onTwigExtensions' => ['onTwigExtensions', 0]
		]);
	}
	
	/**
	 * Load the Twig Lambda extension and TwigDictionaryExtension.
	 * 
	 * @param Event $e
	 */
	public function onTwigExtensions(Event $e)
	{
		$this->grav['twig']->twig->addExtension(new \DPolac\TwigLambda\LambdaExtension());
		
		require_once(__DIR__ . '/twig/TwigDictionaryExtension.php');
		$this->grav['twig']->twig->addExtension(new \TwigDictionaryExtension());
	}
}
