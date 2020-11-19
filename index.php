<?php session_start(); /* php內有用到SESSION函式要先start */?>
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
            *帳號:<input type="text" name='acc'><br>
            <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['acc']['empty'])){  ;?>
            <span style="color:red;font-size:12px">帳號欄位不得為空</span>
            <?php } ;?>
            <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['acc']['len'])){  ;?>
            <span style="color:red;font-size:12px">欄位長度不符(4~10)</span>
            <?php } ;?>
        </li>
        <li class="list-group-item">*密碼:<input type="password" name='pw'><br>
        <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['pw']['empty'])){  ;?>
            <span style="color:red;font-size:12px">密碼欄位不得為空</span>
            <?php } ;?>
        <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['pw']['len'])){  ;?>
            <span style="color:red;font-size:12px">密碼欄位長度必須在8~16字元之間</span>
            <?php } ;?>
        </li>
       <li class="list-group-item">姓名:<input type="text" name='name'></li>
       <li class="list-group-item">生日:<input type="date" name='birthday'></li>
       <li class="list-group-item">地址:<input type="text" name='addr'></li>
       <li class="list-group-item">電話:<input type="text" name='tel'></li>
       <li class="list-group-item">email:<input type="text" name='email'></li>
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