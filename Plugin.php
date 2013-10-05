<?php
/**
 * PHPoole plugin Demo
 */
Class Demo extends PHPoole_Plugin
{
    const DEBUG = true;

    public function preInit($e)
    {
        $event  = $e->getName();
        $params = $e->getParams();
        $this->trace(self::DEBUG, $event, $params, 'IN');
        // demo
        echo "[DEMO] preInit event\n";
        //
        $this->trace(self::DEBUG, $event, $params, 'OUT');
        return $params;
    }
}
