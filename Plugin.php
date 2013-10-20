<?php
namespace PHPoole;

/**
 * PHPoole sample plugin
 */
Class Sample extends Plugin
{
    const DEBUG = true;

    public function preInit($e)
    {
        $phpoole = $e->getTarget();
        echo "[DEMO] preInit event\n";
        //
        $this->trace(self::DEBUG, $e);
    }

    public function postInit($e)
    {
        $phpoole = $e->getTarget();
        echo "[DEMO] postInit event\n";
        //
        $this->trace(self::DEBUG, $e);
    }
}
