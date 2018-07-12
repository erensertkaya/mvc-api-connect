<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Profil</h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i>Profil Bilgileriniz
                </div>

                <div class="panel-body">
                    <div class="list-group">

                        <a href="#" class="list-group-item">
                            <i class="fa fa-twitter fa-fw"></i>İsim
                            <span class="pull-right text-muted small"><em><?php $this->profile(); echo $this->arr['first_name'];  ?></em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i>Soyisim
                            <span class="pull-right text-muted small"><em><?php $this->profile(); echo $this->arr['surname'];  ?></em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i>Email
                            <span class="pull-right text-muted small"><em><?php $this->profile(); echo $this->arr['email'];  ?></em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-upload fa-fw"></i>Telefon
                            <span class="pull-right text-muted small"><em><?php $this->profile(); echo $this->arr['phone'];  ?></em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-bolt fa-fw"></i>Şifre
                            <span class="pull-right text-muted small"><em><?php $this->profile(); echo $this->arr['password'];  ?></em>
                                    </span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                    <a href="<?php echo "../?_url=duzenle/goruntule";  ?>" class="btn btn-info btn-block">Düzenle</a>
                </div>

            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>