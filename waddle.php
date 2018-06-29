<?php
    /**
     * Waddle Framework
     * 
     * @author   Tianle Xu <xtl@xtlsoft.top>
     * @package  Waddle
     * @category framework
     * @license  GPL-V3
     * @link     https://github.com/AC-Union/Waddle/
     */

    namespace Waddle\Instance;

    require_once "vendor/autoload.php";

    use Waddle\{Core, Application, Log};

    Log::$config["stream"]["info"] = STDOUT;

    Log::info("test");