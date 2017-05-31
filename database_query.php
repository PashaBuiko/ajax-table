
<?php
require_once 'connection.php'; // подключаем скрипт


   function print_table(){

      $link = connect();

      $query ="SELECT ti.id,ti.articul, ti.name, tg.name, ti.price, tg.id FROM table_info as ti , table_category as tg where ti.id_category = tg.id";
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

      $rows = mysqli_num_rows($result);
      for($i=0; $i<$rows; $i++){
          $row = mysqli_fetch_row($result);
          echo "<tr data_id = $row[0]>";
          echo "<td class='edit_cell articul'>$row[1]</td>";
          echo "<td class='edit_cell name'>$row[2]</td>";
          echo "<td class='edit_cell id_category' data_id=".$row[5].">$row[3]</td>";
          echo "<td class='edit_cell price'> $row[4]</td>";
          echo "<td ><button class='delete btn btn-danger' id  = $row[0]>x</button></td>";
          echo "</tr>";
      }
      mysqli_close($link);
   }


   function get_category_list(){

       $link = connect();

       $query ="SELECT * FROM table_category ";
       $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

       mysqli_close($link);
       return $result;
   }
   function print_category_list(){
       $category_list = get_category_list();
       $rows = mysqli_num_rows($category_list);
       echo  '<select name ="id_category" id = "id_category" class="form-control">';
       for($i=0; $i<$rows; $i++) {
           $row = mysqli_fetch_row($category_list);
           echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
       }
       echo "</select>"  ;

   }
   function connect(){
       $link = mysqli_connect(HOST, USER, PASSWORD, DB_NAME)
       or die("Ошибка " . mysqli_error($link));
       return $link;
   }
?>
