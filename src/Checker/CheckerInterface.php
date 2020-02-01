<?php

namespace GollumSF\UrlTokenizerBundle\Checker;

use GollumSF\UrlTokenizerBundle\Tokenizer\Tokenizer;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * CheckerInterface
 *
 * @author Damien Duboeuf <smeagolworms4@gmail.com>
 */
interface CheckerInterface {
	
	/**
	 * Test if url tokens are valids
	 */
	public function checkToken(string $url, bool $fullmatch = false, ?string $key = NULL): bool ;
	
}