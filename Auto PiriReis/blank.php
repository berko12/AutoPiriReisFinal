<?php

phpinfo();
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