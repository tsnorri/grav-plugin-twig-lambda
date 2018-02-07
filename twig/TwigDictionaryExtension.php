<?php
/*
 * Copyright (c) 2018 Tuukka Norri
 * This code is licensed under MIT license (see LICENSE for details).
 */

class TwigDictionaryExtension extends \Twig_Extension
{
	public function getName()
	{
		return 'TwigDictionaryExtension';
	}
	
	public function getFilters()
	{
		return [
			'dictionary_from_pairs' => new \Twig_SimpleFilter('dictionary_from_pairs', function ($array) {
				return \DPolac\Dictionary::fromPairs($array);
			})
		];
	}
}

?>
