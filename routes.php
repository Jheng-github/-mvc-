<?php
return
[
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/contact' => 'controllers/contact.php',
    '/messages' => 'controllers/notes/messages.php',
    '/signup' => 'controllers/AuthController/signup.php',
    '/login' => 'controllers/AuthController/login.php',
    '/logout' => 'controllers/AuthController/logout.php'
    //'/notes/edit/{id}' => 'controllers/notes/edit.php'
];