<?php
return array(
    /**
     * Semaphore URL endpoints.
     * URL: http://semaphore.co/documentation
     */
    'url' => array(
        'sms' => array(
            'sms'       => 'http://api.semaphore.co/api/sms',
            'account'   => 'http://api.semaphore.co/api/sms/account',
        ),
        'messages' => array(
            'messages'  => 'http://api.semaphore.co/api/messages',
            'period'    => 'http://api.semaphore.co/api/messages/period',
            'network'   => 'http://api.semaphore.co/api/messages/network',
        ),
    ),

    /**
     * Semaphore API Key
     *
     */
    'api_key' => '',


    /**
     * This is OPTIONAL and is not available to everyone.
     * Contact their support for more details
     *
     */
    'from' => '',
);
