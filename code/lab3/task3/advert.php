<?php

if('POST' === $_SERVER['REQUEST_METHOD'])
{

    $dir = $_POST['category'];
    $name = $_POST['heading'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $file = fopen('categories/' . $dir . '/' . $name . '.txt', 'w+');
    fwrite($file, $email . "\n");
    fwrite($file, $text);
    fclose($file);
    $data[] = ['category' => $dir, 'heading' => $name, 'email' => $email, 'text' => $text];
}
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
    <?php foreach ($data as  $row)
    {
        echo "<td>". $row['category'] . "</td>". "<td>". $row['heading']. "</td>"."<td>". $row['email']."</td>"."<td>" .$row['text']."</td>";
    }
    ?>
</table>
</body>
