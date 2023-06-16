<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==1) or strlen($_SESSION['giriskontrol']==2)) ) {
    header('location:../logout.php');
} else{


    

    
    
include "header.php";
#include "../kakbir.php";
include(__DIR__ . '../../kakbir.php');
$kisiid=$_SESSION['id'];

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
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="../app-assets/images/elements/decore-left.png" class="img-left" alt="
            card-img-left">
                                        <img src="../app-assets/images/elements/decore-right.png" class="img-right" alt="
            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Hoşgeldin <?php echo $_SESSION['kname']; ?> ,</h1>
                                            <p class="m-auto w-75">İyi çalışmalar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
             
               
                    <div class="row">
                        
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mevcut İşler</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                     
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Araç </th>
                                                        <th>İşi Alan</th>
                                                        <th>Tür</th>
                                                        <th>Şehir</th>
                                                        <th>Durum</th>
                                                        <th>iŞLEM YAP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php



$sql = "SELECT * from  isler WHERE a9a=$kisiid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>



                                                    <tr>
                                                        <td><?php echo $result->id;?></td>
                                                        <td><?php echo $result->a5;?>-<?php echo $result->a6;?></td>
                                                        <td><?php echo $result->a9;?></td>
                                                        <td><?php echo $result->a2;?></td>
                                                        <td><?php echo $result->a4;?></td>
                                                        <td><?php echo $result->a10;?></td>
                                                        <td><a href="ispage.php?edit=<?php echo $result->id; ?>">İŞLEM YAP</a></td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; }} ?>
                                                
                                                </tbody>
                                       
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Alınabilir İşler </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Auto Das alınabilir işler bu listededir.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Araç </th>
                                                        <th>İşi Alan</th>
                                                        <th>Tür</th>
                                                        <th>Şehir</th>
                                                        <th>Durum</th>
                                                        <th>Al</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php



$sql = "SELECT * from  isler WHERE a10 != 'Bitti' and a9==NULL ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>



                                                    <tr>
                                                        <td><?php echo $result->id;?></td>
                                                        <td><?php echo $result->a5;?>-<?php echo $result->a6;?></td>
                                                        <td><?php echo $result->a9;?></td>
                                                        <td><?php echo $result->a2;?></td>
                                                        <td><?php echo $result->a4;?></td>
                                                        <td><?php echo $result->a10;?></td>
                                                        <?php
                                                        $kontrol=$result->a9;
                                                        if($kontrol != NULL)
                                                        {
                                                            ?>
                                                             <td>İş Alındı</td>
                                                            <?php 
                                                        }
                                                        else{
                                                        ?>
                                                        <td>
                                                       
                                                        <form class="form-horizontal" action="../kakbir.php" method="post" >

                                                        <input type="hidden" name="a1" value="<?php echo $_SESSION['kname'] ?>">
                                                        <input type="hidden" name="a2" value="<?php echo $_SESSION['id'] ?>">
                                                        <input type="hidden" name="a3" value="<?php echo $result->id ?>">
                                                        <button type="submit" name="isial" class="btn btn-primary">İşi Al</button>
                                                    </form>
                                                    </td>
                                                    <?php } ?>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; }} ?>
                                                
                                                </tbody>
                                       
                                            </table>
                                        </div>
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

    include "../assets/footer.php";
}
    ?>