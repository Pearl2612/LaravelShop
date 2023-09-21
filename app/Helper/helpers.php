<?php

/** Set Sideban item active */

function setActive(array $route) {
    if(is_array($route)) {
        foreach($route as $r) {
            if(Request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}
