<?php
require_once 'db_con.php';
if(isset($_POST["regist"])){
    $insert_data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'msg' => $_POST['msg']
    ];
    $keys = implode(",",array_keys($insert_data));
    $val = implode("','",array_values($insert_data));

    $sql = "INSERT INTO user($keys) VALUES ('$val')";
    echo $sql;
    $insert = $connection->query($sql);
    
    if($insert)
    {
        echo "Successfully done";
    }
    else{
        echo"Not done";
    }
}
?>