<?php

namespace kk14569\iframebbcode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[iframe]{IURL}[/iframe]',
                '<div id="iframebbcode"><iframe src="{IURL}" width="375" height="275" frameborder="0"></iframe></div>'
            );
            $config->BBCodes->addCustom(
                '[bili]{BVID}[/bili]',
                '<div id="iframebbcode"><iframe src="//player.bilibili.com/player.html?isOutside=true&bvid={BVID}&p=1" scrolling="no" width="375" height="250" border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe></div>'
            );
        })
];
