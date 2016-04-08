<?php
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH."/mc-config.php");

foreach (glob("libs/*.php") as $filename)
{
    require_once($filename);
}
foreach (glob("Controller/*.php") as $filename)
{
    require_once($filename);
}
foreach (glob("Dao/*.php") as $filename)
{
    require_once($filename);
}
foreach (glob("Model/*.php") as $filename)
{
    require_once($filename);
}
