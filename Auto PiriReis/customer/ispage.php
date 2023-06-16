<?php
session_start();

if (strlen($_SESSION['id']==0 or strlen($_SESSION['giriskontrol']==1) or strlen($_SESSION['giriskontrol']==3)) ) {
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
                          <big>Not Ekle</big>
                  <br>
                          </p>

                   
                          <form  class="needs-validation tooltip-label-right"  method="post"  action="../kakbir.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
            

                                                  <div class="form-group">
                                                        <div class="controls">
                                                        <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" name="a1" placeholder="Çalışana Not Gönder"></textarea>
                                                         </fieldset>
                                                            </div>
                                                    </div>
            
              
                                  <input type="hidden" name="a2" value="<?php echo $editid; ?>">
                      
                              
                               
                                      
                      <button type="submit" name="notekle" class="btn btn-primary mb-0">Ekle</button>
                  </form>


                          <br><br><br>
                   Notlar:<br>
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