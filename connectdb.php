<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'QLTS';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Lỗi kết nối CSDL: ".$conn->connect_error);

$conn->query("SET NAMES UTF8");
