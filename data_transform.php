
<?php
 require_once 'connection.php';
 require_once 'database_query.php';

    if (isset($_POST['articul'])){
        $articul = $_POST['articul'];
    }
    if (isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if (isset($_POST['id_category'])){
        $id_category = $_POST['id_category'];
    }
    if (isset($_POST['price'])){
        $price = $_POST['price'];
    }
    if (isset($_POST['articul'])){
        $articul = $_POST['articul'];
    }
    if (isset($_POST['id_note'])){
        $id_note =$_POST['id_note'];
    }


    if ( $_POST['type'] == 'add'){
         insert_data($articul, $name,$id_category,$price);
         print_table();
    };

    if ( $_POST['type'] == 'delete'){
        delete_data($_POST['id']);
        print_table();
    }
    if ( $_POST['type'] == 'edit'){
        update_data($id_note, $articul, $name,$id_category,$price);
        print_table();
    }

    function insert_data($articul, $name, $id_category,$price){
        $link = connect();

        $query ="INSERT INTO `table_info` ( `articul` , `name`, `id_category`, `price`) VALUES( '$articul', '$name', '$id_category', '$price')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        mysqli_close($link);
    }

    function delete_data($id){
        $link = connect();
        $query ="DELETE FROM `table_info` where id=".$id;
            // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        mysqli_close($link);
    }

    function update_data($id_note,$articul, $name, $id_category,$price){
        $link = connect();

        $query ="UPDATE `table_info` SET articul = '$articul',  name = '$name',  id_category = '$id_category', price = '$price'   WHERE id = '$id_note' ";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        mysqli_close($link);
    }
?>
