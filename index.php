<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--メタキーワード、ディスクリプション-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/dest/css/base.css">
    <link rel="stylesheet" href="/dest/css/top.css">
    <!--全ページ共通のcss、jsファイル読み込み-->
    <?php include($_SERVER['DOCUMENT_ROOT']. '/dest/include/link.php'); ?>

    <!--各ページごとのcssファイル読み込み-->
    <link rel="stylesheet" href="/css/uniq.css">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/google-analytics.php'); ?>
</head>

<body>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/tag.php'); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/header.php'); ?>
<!--wrap--->
<main><p>あああああ</p></main>
<?php
echo 'Hello world!!';?>
<!--wrap--->
<?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/footer.php'); ?>

</body>

</html>