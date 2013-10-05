<?php

Class Plugin extends PHPoole_Plugin
{
    public function preInit($e)
    {
        $event  = $e->getName();
        $params = $e->getParams();
        $this->debug($event, $params, 'IN');
        // demo
        echo '[PLUGIN] preInit event demo';
        $this->debug($event, $params, 'OUT');
        return $params;
    }
}
