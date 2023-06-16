<?php
session_start();

if (strlen($_SESSION['id']==0) ) {
    header('location:logout.php');
} else{


include "assets/header.php";
?>
    <!-- BEGIN: Content-->

        <!-- END: Header-->

        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                   
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Yeni Müşteri Ekle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="kakbir.php" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a1" class="form-control" placeholder="Müşteri İsmi" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="a2" class="form-control" placeholder="Mail Adresi" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a3" class="form-control" placeholder="Telefon Numarası" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a4" class="form-control" placeholder="Şehir" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="a5" class="form-control" placeholder="Şifre" required data-validation-required-message="En Az 6 Karakter" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="a6" class="form-control" placeholder="Şifre Tekrar" required data-validation-match-match="password" data-validation-required-message="Şifreler Aynı Olmak Zorunda" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="firmaekle" class="btn btn-primary">Ekle</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
             
               
                
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
   <?php 

    include "assets/footer.php";
}
    ?>