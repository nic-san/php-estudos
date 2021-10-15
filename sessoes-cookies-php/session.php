<?php

ini_set('session.save_handler','files');
ini_set('session.save_path', __DIR__.'/sessions');

session_set_cookie_params(0, '/', 'localhost', false, true);

session_start();