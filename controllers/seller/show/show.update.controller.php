<?php 
require '../../../database/database.php';

if(!empty($_POST['title'])&& !empty($_POST['venue'])&& !empty($_POST['hall'])&&!empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['price'])){
    require '../../../models/show.model.php';
    updateShow($_POST['show_id'], $_POST['title'],$_POST['venue'],$_POST['date'], $_POST['time'], $_POST['price'], $_POST['hall']);
    echo "success";
}
