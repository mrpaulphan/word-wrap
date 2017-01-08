<?php

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class WordWrapTwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'wordWrap';
    }

    public function getFilters()
    {
        return array(
            'wordWrap' => new Twig_Filter_Method($this, 'wordWrap'),
        );
    }

    public function wordWrap($content)
    {
        $content = preg_replace('/(<[^>]+>)?\\w*/us', '<span class="word-wrap">$0</span>', (string) trim($content));

        return TemplateHelper::getRaw($content);
    }
}
