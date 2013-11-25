<?php

return array(

    /**
     * DENY, SAMEORIGIN or ALLOW-FROM
     * https://www.owasp.org/index.php/Clickjacking
     */
    'X-Frame-Options' => 'DENY',

    /**
     * https://developer.mozilla.org/en/docs/HTTP/Access_control_CORS
     */
    'Access-Control-Allow-Origin' => false
);
