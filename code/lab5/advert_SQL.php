<?php

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (!empty($_POST["email"]) && !empty($_POST["category"]) && !empty($_POST["heading"]) && !empty($_POST["text"])) {
    $mysqli -> query("INSERT INTO ad (email, category, heading, text) 
                        VALUES ('{$_POST['email']}', '{$_POST['category']}', '{$_POST['heading']}', '{$_POST['text']}')");}
?>

    <body>
    <form  method = "POST">
        <label>
            Email:
            <input name = "email">
        </label>
        <br>
        <br>
        <label>
            Category:
        </label>
        <select name = "category">
            <option>Animals</option>
            <option>Art</option>
            <option>Books</option>
            <option>Fashion</option>
        </select>
        <br>
        <br>
        <label>
            Heading:
            <input name = "heading">
        </label>
        <br>
        <br>
        Text:
        <textarea name = "text" rows = "10" cols = "50"></textarea>
        <br>
        <br>
        <button type = "submit"> Add <value = "show"></button>
    </form>

    <p>Advertisements:</p>
    <table border="1">
        <tr>
            <th>Category</th>
            <th>Heading</th>
            <th>Email</th>
            <th>Text</th>
        </tr>

        <?php
        $result = mysqli_query($mysqli , "SELECT*FROM ad");
        while ($row = $result->fetch_assoc() )
        {
            echo "<td>". $row['category'] . "</td>". "<td>". $row['heading']. "</td>"."<td>". $row['email']."</td>"."<td>" .$row['text']."</td>";
        }
        $result->close();
        $mysqli->close();
        ?>
    </table>
    </body>
