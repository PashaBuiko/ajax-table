<?php include 'database_query.php' ;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax table</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <table class="table table-bordered table-hover text-center">
            <thead>
            <tr>
                <th>Арт.</th>
                <th>Наименование</th>
                <th>Категория </th>
                <th>Цена</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody class="tbody">
            <?php     print_table();     ?>
            </tbody>
        </table>
        <div id="msgSubmit" class="h3 text-center non-show">Действие выполнено успешно!</div>
        <div class="edit_form">
            <div class="">
                <form id ="form_edit">
                    <div class="form-group">
                        <label for="articul">Артикул</label>
                        <input type="text" class="form-control" name = "articul" id = "articul"   pattern="^[ 0-9]+$">
                    </div>
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" name = "name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="id_category">Категория</label>
                        <?php print_category_list() ?>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text" name = "price" id="price" class="form-control" >
                    </div>
                    <button type ="submit" class="btn btn-primary" > Обновить</button>
                </form>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"> <h3 class="panel-title"> Добавить запись</h3>  </div>
        <div class="panel-body">
            <form id ="form_add">
                <div class="form-group">
                    <label for="articul">Артикул</label>
                    <input type="text" name = "articul" id = "articul" class="form-control"  pattern="^[ 0-9]+$">
                </div>
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name = "name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="id_category">Категория</label>
                    <?php print_category_list() ?>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="text" name = "price" id="price" class="form-control" >
                </div>
                <button type ="submit" class="btn btn-primary"> Добавить</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>




