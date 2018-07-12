<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="../assets/img/logo-invoice.png" />
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form method="POST" action="../?_url=home/giris" role="form">
                    <hr />
                    <h5>Giriş Yapmak İçin Kullanıcı Bilgilerinizi Girin</h5>
                    <br />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="text" class="form-control" placeholder="Kullanıcı Adı " name="kadi" />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" class="form-control"  placeholder="Şifre" name="pass" />
                    </div>


                    <button class="btn btn-primary" name="submit" type="submit">Gönder</button>
                    <hr />
                </form>
                Üye değilmisin ? <a href="../?_url=signup/kaydol" >buraya tıkla </a> ve hemen üye ol !
            </div>

        </div>


    </div>
</div>

</body>
</html>
