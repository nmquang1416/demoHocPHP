<?php 
    $myDB = new mySQL ('Localhost', 'root')
    if ($myDB => connect_error)
    {
        die('Connect Error (' .$myDB-> connect_errono. ')'.$myDB ->connect_error)
    }
    $sql = "SELECT*FROM books WHERE available = 1 ORDER BY title"
    $result = $myDB -> query($sql);

?>

<table cellSpacing = "2" cellPadding = "6" align="center" border = "1">
    <tr>
        <td colspan ="4">
            <h3 algin = "center"> These book are current availabel</h3>