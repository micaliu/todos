<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Todos list</title>
</head>

<body>
<h1> Todos list</h1>
<a href = "<?php echo base_url(); ?>index.php/todo/add_view">Add</a>

<table border = "1">
    <?php
    $i = 1;
    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Title</td>";
    echo "<td>Priority</td>";
    echo "<td>Date</td>";
    echo "<td>Edit</td>";
    echo "<td>Delete</td>";
    echo "<tr>";

    foreach($records as $r) {
        echo "<tr>";
        echo "<td>".$r->id."</td>";
        echo "<td>".$r->title."</td>";
        echo "<td>".$r->priority_id."</td>";
        echo "<td>".$r->date_added."</td>";
        echo "<td><a href = '".base_url()."index.php/todo/edit/"
            .$r->id."'>Edit</a></td>";
        echo "<td><a href = '".base_url()."index.php/todo/delete/"
            .$r->id."'>Delete</a></td>";
        echo "<tr>";
    }
    ?>
</table>

</body>

</html>