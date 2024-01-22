<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        $myDB = new mysqli('localhost', 'root', '', 'demohocphp');
        if ($myDB->connect_error) {
            die('Connect ErrorException: '.$myDB->connnect_errno . '' . $myDB->connect_error);
        } else{
            echo "Connect Successfully";
        }
        $sql = "SELECT * FROM `books` WHERE `available` = 1 ORDER BY `title`";
        $result = $myDB -> query($sql);
        if ($result -> fetch_assoc()) {
            echo "<br> load done";
        } else {
            echo "<br> load error";
        }
    ?>
    <h1>
        These books are currently available
    </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">BookID</th>
                <th scope="col">Title</th>
                <th scope="col">ISBN</th>
                <th scope="col">Publish Year</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th>Mark</th>
                <th>Qtto</th>
                <th>@mdo</th>
            </tr>
            <?php 
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>";
                    echo $row['bookid'];
                    echo "</th>";
                    echo "<td>";
                    echo $row['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['ISBN'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['pub_year'];
                    echo "</td>";
                    echo "<td>";
                }
            ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>