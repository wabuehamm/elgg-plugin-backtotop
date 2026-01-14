<?php

namespace Wabue\BackToTop;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap
{
    public function init()
    {
        elgg_extend_view('elements/layout.css', 'css/backtotop.css');
        elgg_extend_view('page/layouts/elements/body', 'backtotop/scrollbutton');
    }
}