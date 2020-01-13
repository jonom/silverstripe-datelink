<?php

// Forces registration of all pre-calculated routes
DateLink::register_routes();

if (!class_exists('SS_Object')) {
    class_alias('Object', 'SS_Object');
}