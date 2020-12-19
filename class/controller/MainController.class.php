<?php
require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

if (isset($_GET['search'])) {
    $searchInput = filter_input(INPUT_GET, 'search');
    R::setup(DB_STRING, DB_USER, DB_PASSWORD);
    $data = R::getAll('select * from lecture where name like LOWER(?)', array('%' . mb_strtolower($searchInput) . '%'));
    $result['data'] = $data;
    R::close();
    echo json_encode($result, JSON_PRETTY_PRINT);
}