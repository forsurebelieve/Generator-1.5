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
            'name' => 'futhark',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        /**************************************************************************
         * General App config.
         **************************************************************************/
        'APP_VERSION' => 'v2.0beta',
        'APP_TITLE' => 'Futhark Power Generator ',

        /**************************************************************************
         * Firebase database config.
         * Firebase database connection provided in kreait/firebase-php
         **************************************************************************/
        'firebase' => [
            'DatabaseURL' => 'https://futharkgenerator.firebaseio.com',
            'project_id' => $_ENV['FB_PROJECT_ID'],
            'client_id' => $_ENV['FB_CLIENT_ID'],
            'client_email' => $_ENV['FB_CLIENT_EMAIL'],
            'private_key' => $_ENV['FB_PRIVATE_KEY']
        ],

        'powersDB' => [
            'location' => __DIR__ . '/../sourceData/firebase.english.json'
        ]
    ],
];
