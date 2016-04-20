<?php
$db = new PDO('mysql:host=localhost;dbname=test', 'akanaka', '');
$stmt = $db->query('select * from jin');
while ( $r = $stmt->fetch())
{
    var_dump ( $r ) ;
}
$db->query('insert jin set title = "title" , content="content"');