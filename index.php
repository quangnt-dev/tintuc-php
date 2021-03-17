<?php
// todo: connect to database
require 'lib/dbCon.php';
myConnect();
// include('lib/dbCon.php');
// require 'lib/dbCon.php';
// include 'lib/dbCon.php';
include 'lib/trangchu.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Tin tuc</title>
</head>

<body>

  <div id="wrap-vp">
    <div id="header-vp">
      <div id="logo"><img src="images/logo.gif" /></div>
    </div>

    <div class="menu-vp">
      <!--block/menu.php-->
      <?php require 'blocks/menu.php'; ?>
    </div>

    <div id="midheader-vp">
      <div id="left">
        <ul class="list_arrow_breakumb">
          <li class="start">
            <a href="javascript:;">Trang nhất</a>
            <span class="arrow_breakumb">&nbsp;</span>
          </li>
        </ul>
      </div>
      <div id="right">
        <!--blocks/thongtinchung.php-->
        <?php include 'blocks/thongtinchung.php'; ?>
      </div>
    </div>
    <div class="clear"></div>

    <div id="slide-vp">
      <!--blocks/top_trang_chu.php-->
      <?php include 'blocks/top_trang_chu.php'; ?>
      <div id="slide-right">
        <!--blocks/quangcao_top_phai.php-->
        <?php include 'blocks/quangcao_top_phai.php'; ?>
      </div>
    </div>

    <div id="content-vp">
      <div id="content-left">
        <!--blocks/cot_trai.php-->
        <?php include 'blocks/cot_trai.php'; ?>
      </div>
      <div id="content-main">

        <?php include 'pages/trangchu.php' ?>
        <!--PAGES-->

      </div>
      <div id="content-right">
        <!--blocks/cot_phai.php-->
        <h1>cot phai</h1>
        <?php include 'blocks/cot_phai.php'; ?>


      </div>

      <div class="clear"></div>

    </div>

    <div id="thongtin">
      <!--blocks/thongtindoanhnghiep.php-->
      <?php include 'blocks/thongtindoanhnghiep.php'; ?>
    </div>
    <div class="clear"></div>
    <div id="footer">
      <!--blocks/footer.php-->
      <?php include 'blocks/footer.php'; ?>

      <div class="ft-bot">
        <div class="bot1"><img src="images/logo.gif" /></div>
        <div class="bot2">
          <p>© <span>Copyright 1997 VnExpress.net,</span> All rights reserved</p>
          <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
        </div>
        <div class="bot3">

          <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a> <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
          <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>

        </div>
      </div>
    </div>




  </div>

</body>

</html>
