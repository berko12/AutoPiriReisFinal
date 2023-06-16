<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==3) or strlen($_SESSION['giriskontrol']==2)) ) {
    header('location:logout.php');
} else{

include "kakbir.php";
include "assets/header.php";


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
                   
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Devam Eden Görevler</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                     
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>PLAKA</th>
                                                        <th>ARAÇ MARKA </th>
                                                        <th>İŞİ TESLİM ALAN</th>
                                                        <th>ARAÇ TÜRÜ</th>
                                                        <th>ŞEHİR</th>
                                                        <th>DURUMU</th>
                                                        <th>iŞLEM YAP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php



$sql = "SELECT * from  isler WHERE a10 !='Bitti'";
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
                                                        <td><a href="ispage.php?edit=<?php echo $result->id; ?>">Ayrıntılar</a></td>
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

    include "assets/footer.php";
}
    ?>