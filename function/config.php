<?php
const HOST    = 'localhost';
const USER    = 'root';
const PASS    = '';
const DB = 'drop_school';

$db = @mysqli_connect(HOST,USER,PASS,DB) or die ('Cant connect DB');
mysqli_set_charset($db, 'utf8') or die('Cant connect DB');