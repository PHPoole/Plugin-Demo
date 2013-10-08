<?php
/**
 * PHPoole demo plugin
 */
Class Demo extends PHPoole_Plugin
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
