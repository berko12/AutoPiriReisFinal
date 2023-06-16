<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==1) or strlen($_SESSION['giriskontrol']==2)) ) {
    header('location:../logout.php');
} else{


include "header.php";
#include "../kakbir.php";
include(__DIR__ . '../../kakbir.php');


?>

<?php
if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
    $a=$editid;
  
	}

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
                                   <h4 class="card-title">Mevcut İş</h4>
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



$sql = "SELECT * from  isler WHERE id=$editid";
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
                       
                       
                       <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                    <div class="card mb-4">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                        
                            <p class="mb-3">
                            <big>Durum Güncelleme</big>
                    <br>
                    <br>
                           Mevcut Durum :  <b> <?php echo $result->a10;?></b>
                      
                            
                            </p>

                     
                            <form  class="needs-validation tooltip-label-right"  method="post"  action="../kakbir.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
						
                            <div class="form-group">
                                                        <div class="controls">
                                                        <select name="a1" class="form-control">
                                                        <option value="---">Seçiniz...</option>
                                                        <option value="İş Alındı">İş Alındı</option>
                                                        <option value="Bakım Başladı">Bakım Başladı</option>
                                                        <option value="Onarımda">Onarımda</option>
                                                        <option value="Bitti">Bitti</option>
                                          
                                                        </select>
                                                                 </div>
                                                    </div>
              
                
                                    <input type="hidden" name="a2" value="<?php echo $editid; ?>">
                                
                                 
                                        
                        <button type="submit" name="durumguncelle" class="btn btn-primary mb-0">Güncelle</button>
                    </form>


                            <br><br><br>
                     
                        </div>
                    </div>
               
                </div>



                <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                  <div class="card mb-4">
                      <div class="position-absolute card-top-buttons">
                          <button class="btn btn-header-light icon-button">
                              <i class="simple-icon-refresh"></i>
                          </button>
                      </div>
                      <div class="card-body">
                      
                          <p class="mb-3">
                          <big>İşlem Ekle</big>
                  <br>
                          </p>

                   
                          <form  class="needs-validation tooltip-label-right"  method="post"  action="../kakbir.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                      <?php 
                      $abc=$result->a2;
                      if($abc=="Ağır Bakım") 
                      {
                      ?>
                          <div class="form-group">
                                                      <div class="controls">
                                                      <select name="a1" class="form-control">
                                                      <option value="---">İşlem Seçiniz ...</option>
                                                      <option value="Triger Kayışı Kontrolü / Değişimi">Triger Kayışı Kontrolü / Değişimi</option>
                                                      <option value="Baskı Balata Kontrolü / Değişimi">Baskı Balata Kontrolü / Değişimi</option>
                                                      <option value="Şansızman Kontrolü">Şansızman Kontrolü</option>
                                                      <option value="Direksiyon Kutusu">Direksiyon Kutusu</option>
                                                      <option value="Rot Ayarı">Rot Ayarı</option>
                                        
                                                      </select>
                                                               </div>
                                                  </div>
                                                  <?php } 
                                                  else {
                                                  ?>
                                                       <div class="form-group">
                                                      <div class="controls">
                                                      <select name="a1" class="form-control">
                                                      <option value="---">İşlem Seçiniz ...</option>
                                                      <option value="Motor Yağı Değişimi">Motor Yağı Değişimi</option>
                                                      <option value="Motor Bakımı">Motor Bakımı</option>
                                                      <option value="Yağ Filtresi Değişimi">Yağ Filtresi Değişimi</option>
                                                      <option value="Hava Filtresi Değişimi">Hava Filtresi Değişimi</option>
                                                      <option value="Polen Filtresi Değişimi">Polen Filtresi Değişimi</option>
                                                      <option value="Yakıt Filtresi Değişimi">Yakıt Filtresi Değişimi</option>
                                                      <option value="Frenlerin Bakımı Kontrolü">Frenlerin Bakımı Kontrolü</option>
                                                      <option value="Soğutma Suyu Kontrolü">Soğutma Suyu Kontrolü</option>
                                                      <option value="Far Ayarı">Far Ayarı</option>
                                        
                                                      </select>
                                                               </div>
                                                  </div>
                                                  <?php }?>


                                                  <div class="form-group">
                                                        <div class="controls">
                                                        <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" name="a2" placeholder="Bilgi"></textarea>
                                                         </fieldset>
                                                            </div>
                                                    </div>
            
              
                                  <input type="hidden" name="a3" value="<?php echo $editid; ?>">
                      
                              
                               
                                      
                      <button type="submit" name="islemekle" class="btn btn-primary mb-0">Ekle</button>
                  </form>


                          <br><br><br>
                   
                      </div>
                  </div>
             
              </div>


              <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Yapılan İşlemler</h5>
<br>
                            <div class="scroll dashboard-list-with-user">

                                    
                            <?php



$sql = "SELECT * from  islemler     WHERE a3='$editid'            ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>

  

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                               
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 "><big><?php echo $result->a1;?></big></p>
                                            <p class="text-muted mb-0 text-small">
                                            <?php echo $result->a2;?> <br>   
                                        </p>
                                        </a>
                                        <small>    <?php echo $result->tarih;?></small>
                                    </div>
                                    
                                </div>

                        
                                <?php $cnt=$cnt+1; }} ?>
                          
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-12 col-md-12 col-xl-4 col-right">
                  

                
                  <div class="card mb-4">
                      <div class="position-absolute card-top-buttons">
                          <button class="btn btn-header-light icon-button">
                              <i class="simple-icon-refresh"></i>
                          </button>
                      </div>
                      <div class="card-body">
                      
              

                          <br><br><br>
                   Müşteri Notları:<br>
                   <?php



$sql = "SELECT * from  notlar     WHERE a2='$editid'            ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
                   <p>
                 
<?php echo $result->a1;?>


                   </p>
                   <?php $cnt=$cnt+1; }} ?>
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