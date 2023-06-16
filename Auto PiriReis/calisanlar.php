<?php
session_start();

if (strlen($_SESSION['id']==0) ) {
    header('location:logout.php');
} else{

include "kakbir.php";
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
                   
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Çalışanlar Listesi</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Auto Das tüm çalışanları bu listededir.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Ad Soyad</th>
                                                        <th>Mail Adresi</th>
                                                        <th>Telefon Numarası</th>
                                                        <th>Ünvan</th>
                                                        <th>İşler</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php



$sql = "SELECT * from  calisan ";
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
                                                        <td><a - =<?php echo $result->id; ?>"><?php echo $result->a1;?></a></td>
                                                        <td><?php echo $result->a2;?></td>
                                                        <td><?php echo $result->a3;?></td>
                                                        <td><?php echo $result->a4;?></td>
                                                        <td><?php echo $result->a7;?></td>
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