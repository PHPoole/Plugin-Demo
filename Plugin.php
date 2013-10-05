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
        $this->debug($event, $params, 'IN');
        // demo
        echo "[DEMO] preInit event\n";
        //
        $this->debug($event, $params, 'OUT');
        return $params;
    }
}
