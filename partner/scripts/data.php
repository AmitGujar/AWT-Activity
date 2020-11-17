<?php
// Create connection
$db = pg_connect("host=localhost user=postgres dbname=project password=1234");

// checking connection
if ($db) {
    echo "<h2>Connected to Database</h2>";
} else {
    echo "Failed to connect";
}

if (isset($_POST['submit'])) {
    $bid = $_POST['bookid'];
    $bname = $_POST['bookname'];
    $author = $_POST['author'];
    $pub = $_POST['publication'];
    $sname = $_POST['sellername'];
    $email = $_POST['email'];

    $query = pg_query($db, "INSERT INTO bookshelf(book_id, book_name, author, publication, seller_name, email) VALUES ('$bid','$bname','$author','$pub','$sname', '$email');");
    if ($query) {
        echo  "<h2>Record Successfully Added!</h2>";
    } else {
        echo "create table first in postgres";
    }
    $sql = "select * from bookshelf";
    $r = pg_query($db, $sql);
    echo "<table border = 1>";
    echo "<tr>
            <th>Book_ID</th>
            <th>Book_Name</th>
            <th>Author</th>
            <th>Publication</th>
            <th>Seller_Name</th>
            <th>Email</th>";
    while ($row = pg_fetch_row($r)) {
        echo "<tr><td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[5] . "</td>";
    }
    echo "</table";
}
