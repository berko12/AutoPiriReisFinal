<?php error_reporting(0);?>
<?php
// DB credentials.
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Cd123456');
define('DB_NAME', 'autodas_autodas');
// Establish database connection.
// Establish database connection.
try
{
    $dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' "));
    $dbh->exec("SET NAMES utf8");
}
catch (PDOException $e )
{
    exit("Error: " . $e->getMessage());
}


?>



<?php


if(isset($_POST['calisanekle']))
{



    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $a5=$_POST['a5'];
    $a6=$_POST['a6'];


     $sql ="INSERT INTO calisan (a1,a2,a3,a4,a5,a6) VALUES(:a1,:a2,:a3,:a4,:a5,:a6)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':a1', $a1, PDO::PARAM_STR);
    $query-> bindParam(':a2', $a2, PDO::PARAM_STR);
    $query-> bindParam(':a3', $a3, PDO::PARAM_STR);
    $query-> bindParam(':a4', $a4, PDO::PARAM_STR);
    $query-> bindParam(':a5', $a5, PDO::PARAM_STR);
    $query-> bindParam(':a6', $a6, PDO::PARAM_STR);


    
    $query->execute();
    header("Location: calisanlar.php");
    die();




}


if(isset($_POST['firmaekle']))
{



    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $a5=$_POST['a5'];
    $a6=$_POST['a6'];


     $sql ="INSERT INTO firmalar (a1,a2,a3,a4,a5,a6) VALUES(:a1,:a2,:a3,:a4,:a5,:a6)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':a1', $a1, PDO::PARAM_STR);
    $query-> bindParam(':a2', $a2, PDO::PARAM_STR);
    $query-> bindParam(':a3', $a3, PDO::PARAM_STR);
    $query-> bindParam(':a4', $a4, PDO::PARAM_STR);
    $query-> bindParam(':a5', $a5, PDO::PARAM_STR);
    $query-> bindParam(':a6', $a6, PDO::PARAM_STR);


    
    $query->execute();
    header("Location: firmalar.php");
    die();




}


if(isset($_POST['isekle']))
{




    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $a5=$_POST['a5'];
    $a6=$_POST['a6'];
    $a7=$_POST['a7'];
    $a8=$_POST['a8'];
    $a10="İs Alimi Bekleniyor";



     $sql ="INSERT INTO isler (a1,a2,a3,a4,a5,a6,a7,a8,a10) VALUES(:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a10)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':a1', $a1, PDO::PARAM_STR);
    $query-> bindParam(':a2', $a2, PDO::PARAM_STR);
    $query-> bindParam(':a3', $a3, PDO::PARAM_STR);
    $query-> bindParam(':a4', $a4, PDO::PARAM_STR);
    $query-> bindParam(':a5', $a5, PDO::PARAM_STR);
    $query-> bindParam(':a6', $a6, PDO::PARAM_STR);
    $query-> bindParam(':a7', $a7, PDO::PARAM_STR);
    $query-> bindParam(':a8', $a8, PDO::PARAM_STR);
    $query-> bindParam(':a10', $a10, PDO::PARAM_STR);


    
    $query->execute();
    header("Location: customer/misler.php");
    die();




}


if(isset($_POST['islemekle']))
{




    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];




     $sql ="INSERT INTO islemler (a1,a2,a3) VALUES(:a1,:a2,:a3)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':a1', $a1, PDO::PARAM_STR);
    $query-> bindParam(':a2', $a2, PDO::PARAM_STR);
    $query-> bindParam(':a3', $a3, PDO::PARAM_STR);


    
    $query->execute();
    header("location:worker/ispage.php?edit=$a3");
    die();




}


if(isset($_POST['notekle']))
{




    $a1=$_POST['a1'];
    $a2=$_POST['a2'];





     $sql ="INSERT INTO notlar (a1,a2) VALUES(:a1,:a2)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':a1', $a1, PDO::PARAM_STR);
    $query-> bindParam(':a2', $a2, PDO::PARAM_STR);


    
    $query->execute();
    header("location:customer/ispage.php?edit=$a2");
    die();




}



if(isset($_POST['isial']))
{

    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a0=$_POST['a3'];



  try {
    
      $sqlquery = "UPDATE isler SET a9='$a1',a9a='$a2', a10='İş Alındı' WHERE id='$a0' ";
      $dbh->exec($sqlquery);
      echo "Kayit güncelleme işlemi tamamlandi!";
         
    header("location:worker/misler.php");


      die();
  }
  catch(PDOException $e) {
      echo "Hata: " . $e->getMessage();
  }
  
  $dbh = null;


}


if(isset($_POST['durumguncelle']))
{

    $a1=$_POST['a1'];
    $a0=$_POST['a2'];



  try {
    
      $sqlquery = "UPDATE isler SET  a10='$a1' WHERE id='$a0' ";
      $dbh->exec($sqlquery);
      echo "Kayıt güncelleme işlemi tamamlandı!";
         
    header("location:worker/ispage.php?edit=$a0");


      die();
  }
  catch(PDOException $e) {
      echo "Hata: " . $e->getMessage();
  }
  
  $dbh = null;


}

if(isset($_POST['musteriyisil']))
{
    $id=$_POST['a1'];
    
try {


   $query=$dbh->prepare("DELETE FROM firmalar WHERE id=?");
   $sil=$query->execute([$id]);

   if($sil){
    echo "Kayıt silindi";
    }else{
    echo "Herhangi bir kayıt silinmedi";
   } 

     
} catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
}
}
if(isset($_POST['calisansil']))
{
    $id=$_POST['a1'];
    
try {


   $query=$dbh->prepare("DELETE FROM calisan WHERE id=?");
   $sil=$query->execute([$id]);

   if($sil){
    echo "Kayıt silindi";
    }else{
    echo "Herhangi bir kayıt silinmedi";
   } 

     
} catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
}
}

?>