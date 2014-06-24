<?php

namespace Tomaj\Prepositioner;

class SlovakLanguage extends LanguageInterface
{
	public function prepositions()
	{
		return array(
			/* 1 letter */
			'a',
			'i',
			'k',
			'o',
			'v',
			'u',
			'z',
			's',

			/* 2 letter */
			'do',
			'od',
			'zo',
			'ku',
			'na',
			'po',
			'so',
			'za',

			/* 3 letter */
			'cez',
			'pre',
			'nad',
			'pod',
			'pri',

			/* 4 letter */
			'spod',
			'niže',
			'voči',
			'pred',

			/* 5 letter */
			'podľa',
			'proti',
			'kvôli',
			'medzi',
			'popri',

			/* 6 letter */
			'sponad',
			'naproti',

			/* more */
			'spomedzi',
			'prostred',
			'vrátane',
			'napriek',
		);
	}
}