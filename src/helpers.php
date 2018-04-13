<?php

use nickurt\Plesk\PleskXml;

if (! function_exists('plesk_xml')) {
    function plesk_xml()
    {
        return app(Plesk::class);
    }
}