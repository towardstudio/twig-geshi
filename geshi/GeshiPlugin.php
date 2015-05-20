<?php
namespace Craft;

class GeshiPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Geshi';
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Bluegg';
	}

	public function getDeveloperUrl()
	{
		return 'http://bluegg.co.uk';
	}

	public function hookAddTwigExtension()
  {
      Craft::import('plugins.geshi.twigextensions.GeshiTwigExtension');

      return new GeshiTwigExtension();
  }
}
