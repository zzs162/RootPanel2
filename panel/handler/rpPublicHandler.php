<?php

class rpPublicHandler extends lpHandler
{
    public function __call($name, $args)
    {
        global $rpROOT;
        if(in_array($name, ["review", "manual", "sites"]))
            lpTemplate::outputFile("{$rpROOT}/template/public/{$name}.php");
    }
}