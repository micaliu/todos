<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Update todo</title>
</head>

<body>
<h1>Update todo</h1>



    <?php
    echo form_open('Todo_controller/update_todo');
    echo form_hidden('old_id',$old_id);
    echo form_label('title');
    echo form_input(array('id'=>'title','name'=>'title','value'=>$records[0]->title));
    echo "";

    echo form_label('Priority');
    echo form_input(array('id'=>'priority','name'=>'priority_id','value'=>$records[0]->priority_id));
    echo "";

    echo form_submit(array('id'=>'submit','value'=>'Edit'));
    echo form_close();
    ?>


</body>

</html>