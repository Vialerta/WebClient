<?php

$url = 'views/templates/static/json/titles.json';

$get_json_head = file_get_contents($url);

$json_titulo = json_decode($get_json_head, true);

$head = $json_titulo['heads']['dashboard'];
