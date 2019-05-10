<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/templates/',
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        /**************************************************************************
        * General App config.
        **************************************************************************/
        'APP_VERSION' => 'v1.7beta',
        'APP_TITLE' => 'Futhark Power Generator ',

        /**************************************************************************
        * Firebase database config.
        * Firebase database connection provided in kreait/firebase-php
        **************************************************************************/	
        'firebase' => [
            'DatabaseURL' => 'https://YourFirebase.firebaseio.com',
            'ServiceAccountJSON' => __DIR__ . '/YourFirebase.serviceAccount.json',
        ],

        'powersDB' => [
            'location' => __DIR__ . '/sourceData/firebase.english.json'
        ]
    ],

    
];