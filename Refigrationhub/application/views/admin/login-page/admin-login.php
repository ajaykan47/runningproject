<!DOCTYPE html>
<head>
    <title>Admin-Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            fon-family: calibri, sans-serif;
        }

        .background-wrap {
            position: fixed;
            z-index: -1000;
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0px;
            left: 0;
        }

        #video-bg-elem {
            position: center;
            top: 0;
            left: 0;
            min-height: 100%;
            min-width: 100%;
        }

        section {
            background-color:;
            height: 400px;
            width: 60%;
            float: left;
            margin-top: 160px;
        }

        .logo {
            background-image: url("flaw.png");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 250px;
            width: 60%;
            margin: auto;
            margin-top: 70px;
            tex-shadow: 10px;
            opacity: 0.5;
        }

        aside {
            background-color:;
            height: 400px;
            width: 40%;
            float: right;
            margin-top: 160px;
        }

        .r {
            background-color: #ffffff38;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 360px;
            width: 65%;
            margin-top: 18px;
            margin-left: 80px;
            box-shadow: 4px 5px 55px black;
            border-radius: 20px 40% 40px 30%;
            z-index: 9999;
        }

        .log {
            text-align: center;
            float: left;
            margin-top: 50px;
            margin-left: 50px;
        }

        .log input {
            background-color: white;
            height: 40px;
            width: 240px;
            border-radius: 10px;
        }

        .log1 {
            text-align: center;
            float: left;
            margin-top: 42px;
            margin-left: 50px;
        }

        .log1 input {
            background-color: white;
            height: 40px;
            width: 240px;
            border-radius: 10px;
        }

        .log2 {
            text-align: center;
            float: left;
            margin-top: 48px;
            margin-left: 50px;
        }

        .log2 input {
            height: 40px;
            width: 180px;
            color: white;
            background-color: red;
            margin-left: 35px;
            box-shadow: 4px 5px 85px black;
            border-radius: 10px;

        }
    </style>
</head>
<body>
<div class="background-wrap">
    <video style="width:100%" id="vedio-bg-elem" preload="auto" autoplay="auto" autoplay="true" loop="loop"
           muted="muted">
        <source src="<?php echo base_url(); ?>backend/video/tech.mp4" type="video/mp4">
        video not supported
    </video>
</div>
<section>
    <div class="logo"></div>
</section>
<aside>
    <div class="r">
        <?php if ($this->session->flashdata('error')) { ?>
            <p class="disMes alert-warning">Please Check Your User Name,Password and Role Type Or Contact To
                Administrator</p>
        <?php } ?>
        <form action="<?php echo base_url(); ?>Admin/Auth/adminLogin" method="post">
            <div class="log"><input type="email" value="" name="inputEmail" placeholder=" username"></div>
            <div class="log1"><input type="password" value="" name="inputPass" placeholder=" password"></div>
           <!-- <input type="hidden" value="1" name="ddlLoginType">-->
            <!--<div class="form-group">
                <div class="col-md-8">
                    <select name="ddlLoginType" id="ddlLoginType" class="log1 form-control" >
                        <option value="">---Select Type---</option>
                        <option value="1">Administration</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
            </div>-->
            <div class="log2"><input type="submit" value="LOGIN"></div>
    </div>
</aside>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 5000);
    });
</script>
</body>
</html>

