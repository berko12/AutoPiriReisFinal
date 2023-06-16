<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==1) or strlen($_SESSION['giriskontrol']==3)) ) {
    header('location:../logout.php');
} else{


include "header.php";
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
                                    <h4 class="card-title">Yeni İş Başlat</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="../kakbir.php" method="post" >
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="selesele" name="a1" class="form-control" value="<?php echo $_SESSION['kname'] ?>" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        <select name="a2" class="form-control">
                                                        <option value="---">Seçiniz...</option>
                                                        <option value="Ağır Bakım">Ağır Bakım</option>
                                                        <option value="Periyodik Bakım">Periyodik Bakım</option>
                                          
                                                        </select>
                                                                 </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a3" class="form-control" value="<?php echo $_SESSION['tel'] ?>" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a4" class="form-control" value="<?php echo $_SESSION['sehir'] ?>" required data-validation-required-message="Boş Bırakılamaz">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a5" class="form-control" placeholder   ="Araç Marka" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="a6" class="form-control" placeholder="Araç Model" >
                                                        </div>
                                                    </div>
                                                </div>

                                       
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" name="a7" placeholder="Ek Bilgi"></textarea>
                                                         </fieldset>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="a8" value="<?php echo $_SESSION['id'] ?>">
                                            <button type="submit" name="isekle" class="btn btn-primary">İşi Başlat</button>
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
    ?>s