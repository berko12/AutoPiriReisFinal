







<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==3) or strlen($_SESSION['giriskontrol']==2)) ) {
    header('location:../logout.php');
} else{


include "assets/header.php";
include "kakbir.php";

?>

<?php
if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
    $a=$editid;
  
	}

?>
<?php

$sql = "SELECT * from calisan where id=$a";
$query = $dbh -> prepare($sql);
$query->bindParam(':editid',$editid,PDO::PARAM_INT);
$query->execute();
$result=$query->fetch(PDO::FETCH_OBJ);
$cnt=1;

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
                   
                   
                       
                       
                       <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                            <div class="card mb-12">
                            
                                <div class="card-body">
                            <big>Kişi Bilgileri</big><br><br>
                            <span>Ad Soyad :</span> <b><?php echo $result->a1; ?></b> <br><br> 
                            <span>Mail :</span> <b><?php echo $result->a2; ?></b> <br><br> 
                            <span>Telefon :</span> <b><?php echo $result->a3; ?></b> <br><br> 
                            <span>Ünvan :</span> <b><?php echo $result->a4; ?></b> <br><br> 
                                
                                </div>
                            </div>
               
                         </div>
                         <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                  <div class="card mb-12">
         
                  <?php


$sayi=0;
$sql = "SELECT * from  isler    WHERE a9a='$a'            ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
<?php 
$sayi=$sayi+1;
?>
   <?php $cnt=$cnt+1; }} ?> 
   <?php


$sayi2=0;
$sql = "SELECT * from  isler    WHERE a9a='$a'  and a10='Bitti'           ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
<?php 
$sayi2=$sayi2+1;
?>
   <?php $cnt=$cnt+1; }} ?> 
   <?php


$sayi3=0;
$sql = "SELECT * from  isler    WHERE a9a='$a'   and a10!='Bitti'         ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
<?php 
$sayi3=$sayi3+1;
?>
   <?php $cnt=$cnt+1; }} ?> 
                      <div class="card-body">
                  <big>İş Bilgileri</big><br><br>
                  <span>Toplam İş :</span> <b><?php echo $sayi; ?></b> <br><br> 
                  <span>Tamamlanan :</span> <b><?php echo $sayi2; ?></b> <br><br> 
                  <span>Devam Eden :</span> <b><?php echo $sayi3; ?></b> <br><br> 
                      
                      </div>
                  </div>
     
               </div>
               <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                  <div class="card mb-12">
                  
                      <div class="card-body">
                      <form  class="needs-validation tooltip-label-right"  method="post"  action="kakbir.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
						<input type="hidden" name="a1" value="<?php echo $a; ?>">
                      <button type="submit" name="calisansil" class="btn btn-primary mb-0">Çalılanı Sil</button>
</form>
                      </div>
                  </div>
     
               </div>

               <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Müşterinin İşleri</h4>
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



$sql = "SELECT * from  isler WHERE a9a=$a ";
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

    include "../assets/footer.php";
}
    ?>