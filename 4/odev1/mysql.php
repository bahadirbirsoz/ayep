<?php

mssql_connect();


mysql_connect("localhost", "root", "");
mysql_select_db("ayep");

$sonuc = mysql_query("SELECT * from ornek");
while ($row = mysql_fetch_object($sonuc)) {
    echo $row->email . "<br/>";
}
