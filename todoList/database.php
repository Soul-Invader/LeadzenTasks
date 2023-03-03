<?php
    function make_connection(){
        $host='localhost';
        $username='root';
        $password='';
        $dbname='todoapp';
        $con=new mysqli($host,$username,$password,$dbname);
        if($con->connect_error){
            echo "There is an error in database connection ".$con->connect_error;
        }
        //echo "Successfully connected";
        return $con;
    }

    function add_items($value){
        $con=make_connection();
        $query="insert into todolist(id,item,status) values(null,'$value','0')";
        $con->query($query);
    }

    function get_items(){
        $con=make_connection();
        $query="select id,item from todolist where status='0'";
        $result=$con->query($query);
        return $result;
    }

    function update_items($id){
        $con=make_connection();
        $query="update todolist set status='1' where id='$id'";
        $result=$con->query($query);
    }

    function delete_items($id){
        $con=make_connection();
        $query="delete from todolist where id='$id'";
        $result=$con->query($query);
    }

    function get_items_checked(){
        $con=make_connection();
        $query="select id,item from todolist where status='1'";
        $result=$con->query($query);
        return $result;
    }
   
?>