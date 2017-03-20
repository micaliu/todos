<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Students Example</title>
</head>
<body>
<h1>Add to Todo</h1>
<?php
echo form_open('Todo_controller/add_todo');
echo form_label('Title');
echo form_input(array('id'=>'title','name'=>'title'));
echo "<br/>";

echo form_label('Priority');
echo form_input(array('id'=>'priority','name'=>'priority_id'));
echo "<br/>";

echo form_submit(array('id'=>'submit','value'=>'Add'));
echo form_close();
?>
</body>
</html>