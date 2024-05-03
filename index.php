<?php
session_start();
if ($_COOKIE['memberGame'] != '') {
  header("location: home");
} else if ($_COOKIE['memberUser'] != '') {
  header("location: home");
} else if ($_COOKIE['memberAgent'] != '') {
  header("location: home");
} else if ($_COOKIE['memberAgent'] != '') {
  header("location: home");
} else if ($_COOKIE['memberFirstname'] != '') {
  header("location: home");
} else if ($_COOKIE['memberLastname'] != '') {
  header("location: home");
} else if ($_COOKIE['memberAccount'] != '') {
  header("location: home");
} else if ($_COOKIE['memberBank'] != '') {
  header("location: home");
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="AMBBET EVO | สมัคร ASKMEBET WALLET | สมัคร UFABET TRUEWALLET เดิมพันพนันออนไลน์ 24 ชั่วโมง ฟุตบอล บาคาร่า สล็อต ฝาก ถอน ขั้นต่ำ 1 บาท เท่านั้น">
  <meta name="keywords" content="UFAWALLET777, UFABET TRUE WALLET, UFAWALLET, AMBBET WALLET, ASKMEBET, SLOT TRUE WALLET, JOKER TRUE WALLET, UFA777">
  <title>AMBBET EVO | สมัคร ASKMEBET WALLET | สมัคร UFABET TRUEWALLET เดิมพันพนันออนไลน์ 24 ชั่วโมง ฟุตบอล บาคาร่า สล็อต ฝาก ถอน ขั้นต่ำ 1 บาท เท่านั้น</title>
  
  <meta name="theme-color" content="#14154b">
  <link rel="stylesheet" href="public/assets/css/bootstrap-icons.css">
  <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
  <script src="public/assets/css/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="public/assets/css/main.css?v=<?php echo date('ydmhis'); ?>">
  <script src="public/assets/css/jquery.min.js"></script>
  <link rel="shortlink" href="https://ambbetevo.com/">
  <meta name="description" content="AMBBET EVO เว็บพนันออนไลน์ ครบวงจร ที่มาพร้อมกับ ระบบฝาก ถอน ภายใน 2 นาที รองรับ ทรูวอลเล็ต แจกเครดิตฟรีทุกวัน">
  <link rel="icon" href="public/images/evo.jpg?v=<?php echo date('ydmhis'); ?>" sizes="32x32">
  <link rel="icon" href="public/images/evo.jpg?v=<?php echo date('ydmhis'); ?>" sizes="192x192">
  <link rel="apple-touch-icon" href="public/images/evo.jpg?v=<?php echo date('ydmhis'); ?>">
  <meta name="msapplication-TileImage" content="public/images/evo.jpg?v=<?php echo date('ydmhis'); ?>">
  <script src="https://kit.fontawesome.com/9b91650ebf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="public/css/bubble.css?v=<?php echo date('ydmhis'); ?>">

  <style type="text/css">
    .input-group-text {
      background-color: #efba47;
      color: white;
      border-color: #efba47;
    }

    button:hover {
      cursor: pointer;
      background-color: #F89900;
    }

    button:active {
      outline: none;
      border: none;
    }

    input:focus,
    select:focus,
    textarea:focus,
    button:focus {
      outline: none !important;
    }

    input:focus,
    input.form-control:focus,
    select:focus,
    select.form-control:focus {
      outline: none !important;
      outline-width: 0 !important;
      box-shadow: none;
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
    }

    input:hover,
    select:hover,
    textarea:hover,
    button:hover {
      outline: none !important;
    }

    .form-control:focus {
      outline: none !important;
    }

    *:focus {
      outline: none;
    }

    .btn,
    .btn:hover,
    .btn:active,
    .btn:active:focus,
    .btn:visited,
    .btn:focus {
      color: #dcdcdc;
      background-color: #232323;
      outline: none;
    }

    .btn:focus {
      outline: none;
      box-shadow: none;
    }

    #app {
      background: linear-gradient(to bottom, #f7ee28 0%, #0b916c);
      background-repeat: no-repeat;
      background-size: cover;
      justify-content: center;
      align-items: center;
    }

    .bg-warning {
      background-image: linear-gradient(to right, #0b916c 0%, #edde5d 51%, #f7ee28 100%);
      -webkit-box-shadow: 1px 5px 15px 5px rgba(0, 0, 0, 0.3);
      box-shadow: 1px 5px 15px 5px rgba(0, 0, 0, 0.3);
      z-index: 999;
    }

    .btn-c {
      -webkit-box-shadow: 1px 5px 15px 5px rgba(0, 0, 0, 0.3);
      box-shadow: 1px 5px 15px 5px rgba(0, 0, 0, 0.3);
      z-index: 999;
    }
  </style>

</head>

<body data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="" cz-shortcut-listen="true">
  <?php require_once 'bubble.php'; ?>
  <div class="login-page">
    <div class="login-box">
      <div class="logo-register">
        <a href="https://ambbetevo.com">
          <img src="public/images/logo.png?v=<?php echo date('Ymdh'); ?>" class="img-fluid" alt="">
        </a>
      </div>
      <div class="title mt-2" style="color: red;font-size: 1.8rem;">สมัครสมาชิก
        <small class="text-dark">กรุณากรอกเฉพาะข้อมูลจริงเท่านั้น เพื่อประโยชน์ของตัวท่านเองในการถอนเงิน</small>
      </div>

      <form class="form-login" id="addMember" action="javascript:addMember()" enctype="multipart/form-data">
        <div>
          <label>ชื่อ/สกุล</label>
        </div>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
          </span>
          <input type="text" aria-label="First name" class="form-control" autocomplete="off" placeholder="ชื่อ" name="memberFistname" required="">
          <input type="text" aria-label="Last name" class="form-control" autocomplete="off" placeholder="นามสกุล" name="memberLastname" required="">
        </div>
        <div>
          <label>หมายเลขโทรศัพท์ทรูวอลเลท</label>
        </div>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
              <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
            </svg></span>
          <input type="text" class="form-control" onkeyup="onlyNumbers1(this.value,this)" name="phoneNo" autocomplete="off" id="mobile" pattern="[0-9]{1,}" placeholder="หมายเลขโทรศัพท์" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="">
          <!--<input type="text" class="form-control" autocomplete="off" name="memberWalletID" id="memberWalletID" placeholder="True Wallet ID" aria-describedby="basic-addon1">-->
        </div>
        <div>
          <label>ธนาคารฝาก/ถอน</label>
        </div>
        <div class="input-group mb-2">
          <label class="input-group-text" for="inputGroupSelectbank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
          </label>
          <select class="form-control" name="memberBank" id="inputGroupSelectbank" required>
            <option value="" selected="">โปรดเลือกธนาคาร...</option>
            <option value="TRUE">TRUE - ทรูวอลเลท</option>
            <option value="BBL">BBL - ธนาคารกรุงเทพ</option>
            <option value="KBANK">KBANK - ธนาคารกสิกร</option>
            <option value="KTB">KTB - ธนาคารกรุงไทย</option>
            <option value="TTB">TTB - ธนาคารทหารไทยธนชาต</option>
            <option value="SCB">SCB - ธนาคารไทยพาณิชย์</option>
            <option value="CIMBT">CIMBT - ธนาคารซีไอเอ็มบี</option>
            <option value="UOBT">UOBT - ธนาคารยูโอบี</option>
            <option value="BAY">BAY - ธนาคารกรุงศรีอยุธยา</option>
            <option value="GSB">GSB - ธนาคารออมสิน</option>
            <!--
            <option value="GHB">GHB - ธนาคารอาคารสงเคราะห์</option>
            <option value="BAAC">BAAC - ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
             -->
            <option value="KKP">KKP - ธนาคารเกียรตินาคิน</option>
          </select>
          <input type="text" class="form-control" autocomplete="off" onkeyup="onlyNumbers2(this.value,this)" name="memberAccount" placeholder="หมายเลขบัญชี" pattern="[0-9]{1,}" aria-label="" minlength="10" aria-describedby="basic-addon1" required="">
        </div>
        <div>
          <label>รหัสผ่านเข้าเกม</label>
        </div>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
            </svg></span>
          <input type="password" class="form-control" autocomplete="off" name="memberLoginPass" id="txtPassword" placeholder="รหัสผ่าน" aria-label="" aria-describedby="basic-addon1" required="">
          <input type="password" class="form-control" autocomplete="off" name="confirm_password" id="txtConPassword" placeholder="ยืนยันรหัสผ่าน" aria-label="" aria-describedby="basic-addon1" required="">
        </div>

        <input type="hidden" name="memberWays" value="Website">
        <input type="hidden" name="memberAdvisor" class="memberAdvisor" value="<?php echo base64_decode(base64_decode($_GET['aff'])); ?>">
        <div class="form-group">
          <button class="login-btn mt-3 btn-c bg-warning text-dark" name="submitregister" id="submitregister" type="submit">
            <i class="fas fa-user-plus"></i> สมัครสมาชิก
          </button>
        </div>
        <div class="text-center mt-2" id="waiting"><i class="fas fa-signal text-success"></i> สมาชิกกำลังเล่นเกม <?php echo (rand(150, 600)); ?> คน</div>
        <hr>
        <div class="form-group center">
          <div class="row">
            <div class="col-6">
              <a href="signin" class="login-btn btn-c">
                <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
              </a>
            </div>
            <div class="col-6">
              <a href="https://lin.ee/C9qC3n9" class="login-btn btn-c">
                <img src="public/assets/images/line-icon.png" style="max-width: 18px;"> ติดต่อเรา
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="form-group text-center">
      <div class="row">
        <div class="col-12 mt-3">
          <p>Copyright <?php echo date('Y'); ?> © <strong><a class="text-dark" href="https://ambbetevo.com/">AMBBETEVO.COM</a></strong></p>
          <a style="z-index: -9999999; display: none;" href="https://www.siamecohost.com/link-exchange/?refer=https://me.ambbetevo.com/" target="_blank"><img src="https://www.siamecohost.com/link-exchange/sehbacklink.png" border="0" title="Auto Backlinks" alt="Auto Backlinks"></a>
        </div>
      </div>
    </div>
    <!-- /login-box -->
  </div>
  <!-- /login-page -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="public/assets/css/bootstrap.min.js"></script>
  <script src="public/assets/css/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script>
    $(document).ready(function() {
      var memberAdvisor = $('.memberAdvisor').val();

      $.ajax({
        type: "POST",
        url: "api/updatelink",
        data: {
          memberAdvisor: memberAdvisor,
        },
        dataType: "json",
        success: function(data) {
          console.log(data.code)
          if (data.code == 0) {

          }
        },
      });
    });

    function addMember() {
      document.getElementById("submitregister").disabled = true;
      var formData = new FormData($('#addMember')[0]);

      $.ajax({
        url: "api/addmember",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function(response) {
          if (response.code == 0) {
            Swal.fire({
              icon: 'success',
              text: response.message
            }).then(function() {
              swal.close();
              $('#addMember')[0].reset();
              document.getElementById("submitregister").disabled = false;
              window.location.href = "signin"
            })
          } else if (response.code == 1) {
            Swal.fire({
              icon: 'warning',
              text: response.message
            }).then(function() {
              swal.close();
              document.getElementById("submitregister").disabled = false;
            });
          }
        }
      });
    }

    function onlyNumbers1(sText, obj) {
      var ValidChars = "0123456789";
      var IsNumber = true;
      var Char;
      for (i = 0; i < sText.length && IsNumber == true; i++) {
        Char = sText.charAt(i);
        if (ValidChars.indexOf(Char) == -1) {
          IsNumber = false;
        }
      }
      if (IsNumber == false) {
        Swal.fire(
          'แจ้งเตือน',
          'เฉพาะตัวเลขเท่านั้น',
          'warning'
        )
        obj.value = sText.substr(0, sText.length - 1);
        $(obj)[0].focus();
      }
    }

    function onlyNumbers2(sText, obj) {
      var ValidChars = "0123456789";
      var IsNumber = true;
      var Char;
      for (i = 0; i < sText.length && IsNumber == true; i++) {
        Char = sText.charAt(i);
        if (ValidChars.indexOf(Char) == -1) {
          IsNumber = false;
        }
      }
      if (IsNumber == false) {
        Swal.fire(
          'แจ้งเตือน',
          'เฉพาะตัวเลขเท่านั้น',
          'warning'
        )
        obj.value = sText.substr(0, sText.length - 1);
        $(obj)[0].focus();
      }
    }
  </script>

 <!-- Modal 
 <div class="modal fade animate__animated animate__fadeInUp show" id="promodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-exclamation-circle"></i> แจ้งเตือนผู้ใช้งาน!!</h5>
        </div>
        <div class="modal-body text-center">
          <div class="text-center mb-2">
            <img src="https://www.i-pic.info/i/6KQT133969.jpg" class="img-fluid">
            <h5 class="mt-2 text-white">ติดต่อสอบถามเพิ่มเติม <a class="text-white" href="https://lin.ee/58dYkRd" target="_blank">@ambbetevo</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#promodal').modal('show');
    });
  </script>-->
</body>

</html>