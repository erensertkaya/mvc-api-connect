<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Basic Forms</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Üyelik Formu
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../?_url=duzenle/duzenle" method="POST">
                            <div class="form-group">
                                <label>Ad</label>
                                <input class="form-control" type="text" name="first_name" value="<?php $this->profile(); echo $this->arr['first_name'];  ?>">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Soyad</label>
                                <input class="form-control" type="text" name="surname" value="<?php $this->profile(); echo $this->arr['surname'];  ?>">
                                <p class="help-block">Soyadınız buraya girin.</p>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" name="email" value="<?php $this->profile(); echo $this->arr['email'];  ?>" >
                                <p class="help-block">E-mailinizi buraya girin.</p>
                            </div>
                            <div class="form-group">
                                <label>Şifre</label>
                                <input class="form-control" type="password" name="password" value="<?php $this->profile(); echo $this->arr['password'];  ?>">
                                <p class="help-block">Şifrenizi buraya girin.</p>
                            </div>
                            <div class="form-group">
                                <label>Telefon</label>
                                <input class="form-control" type="text" name="phone" value="<?php $this->profile(); echo $this->arr['phone'];  ?>">
                                <p class="help-block">Telefonunuzu buraya girin.</p>
                            </div>
                            <div class="form-group">
                                <label>Cinsiyet</label>
                                <input class="form-control" type="text" name="gender" value="<?php $this->profile(); echo $this->arr['gender'];  ?>">
                                <p class="help-block">Cinsiyetinizi buraya girin.</p>
                            </div>
                            <input type="hidden" name="driver_id" value="<?php $this->profile(); echo $this->arr['driver_id'];  ?>">
                            <input type="hidden" name="token" value="<?php $this->profile(); echo $this->arr['token'];  ?>">


                            <button type="submit" class="btn btn-info" name="register">Kayıt ol!</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
