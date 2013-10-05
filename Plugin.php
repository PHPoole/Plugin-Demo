<?php
/**
 * PHPoole plugin Demo
 */
Class Demo extends PHPoole_Plugin
{
    public function preInit($e)
    {
        $event  = $e->getName();
        $params = $e->getParams();
        $this->debug($event, $params, 'IN');
        // demo
        echo "[PLUGIN] preInit event demo\n";
        //
        $this->debug($event, $params, 'OUT');
        return $params;
    }
}
