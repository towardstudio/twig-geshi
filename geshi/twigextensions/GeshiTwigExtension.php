<?php
namespace Craft;

defined('CRAFT_PLUGINS_PATH') || define('CRAFT_PLUGINS_PATH',  CRAFT_BASE_PATH.'plugins/');

require_once(CRAFT_PLUGINS_PATH.'geshi/lib/geshi/geshi.php');

use Twig_Extension;
use Twig_Filter_Method;

class GeshiTwigExtension extends Twig_Extension
{

	public function getName()
	{
		return 'Geshi';
	}

	public function getFunctions()
	{
		return array('geshi' => new \Twig_Function_Method($this, 'geshi'));
	}

	public function geshi($source, $language)
	{
		$geshi = new \GeSHi($source, $language);
		return $geshi->parse_code();
	}

}
