<?php session_start(); /* php內有用到SESSION函式要先start */

function errFeedBack($field){
  if(!empty($_SESSION['err'][$field])){

      foreach($_SESSION['err'][$field] as $err){
          echo "<div style='font-size:12px;color:red'>";
          echo $err;
          echo "</div>";
      }
  }
}

;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>資料檢查</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<!-- 網頁拿到回傳資料後的檢查-->
<div class="container mt-5">
    <form action="check.php" method="post">
      <ul class="list-group col-md-6 mx-auto">
      <li class="list-group-item">
            *帳號:<input type="text" name='acc'>
            <?php errFeedBack('acc');?>
      </li>
        <li class="list-group-item">*密碼:<input type="password" name='pw'>
        <?php errFeedBack('pw');?>
        </li>
       <li class="list-group-item">姓名:<input type="text" name='name'>
        <?php errFeedBack('name');?>
       </li>
       <li class="list-group-item">生日:<input type="date" name='birthday'></li>
       <li class="list-group-item">地址:<input type="text" name='addr'></li>
       <li class="list-group-item">電話:<input type="text" name='tel'></li>
       <li class="list-group-item">email:<input type="text" name='email'>
       <?php errFeedBack('email');  ?>
       </li>
       <!-- <li class="list-group-item">年齡:<input type="number" min="1" max="120" name='age'></li> -->
      </ul>
  <div class="mx-auto" style="width:200px">
  <input class="btn btn-primary" type="submit" value="註冊">
  <input class="btn btn-warning" type="reset" value="重置">
  </div>
  </form>
  </div>
</body>
</html>