<?php
namespace Craft;

class WordWrapPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Word Wrap');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Paul Phan';
    }

    function getDeveloperUrl()
    {
        return 'http://github.com/mrpaulphan';
    }
    function getDocumentationUrl() {
        return 'http://github.com/mrpaulphan/craft-plugin';
    }
    public function addTwigExtension()
    {
        Craft::import('plugins.wordwrap.twigextensions.WordWrapTwigExtension');
        return new WordWrapTwigExtension();
    }
}
