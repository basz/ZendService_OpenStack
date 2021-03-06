<?php
// @see http://docs.rackspace.com/servers/api/v2/cs-devguide/content/curl_auth.html
return array(
    'url' => '/v2.0/tokens',
    'header' => array(
        'Content-Type' => 'application/json'
    ),
    'method' => 'POST',
    'body' => json_encode(array(
        'auth' => array(
            'RAX-KSKEY:apiKeyCredentials' => array(
                'username' => $params[0],
                'apiKey'   => $params[1]
            )
        )
    )),
    'response' => array(
        'format' => 'json',
        'valid_codes' => array('200', '203')
    )
);
