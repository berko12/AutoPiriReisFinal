<?php
session_start();

if (strlen($_SESSION['id'] == 0 or strlen($_SESSION['giriskontrol'] == 2) or strlen($_SESSION['giriskontrol'] == 3))) {
    header('location:logout.php');
} else {

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
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card bg-analytics text-white">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <img src="app-assets/images/elements/decore-left.png" class="img-left" alt="
            card-img-left">
                                    <img src="app-assets/images/elements/decore-right.png" class="img-right" alt="
            card-img-right">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-2 text-white">Hoşgeldin <?php echo $_SESSION['kname']; ?> ,</h1>
                                        <p class="m-auto w-75">Bugün <strong></strong> yeni işler var. İyi çalışmalar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <?php


                                $b = 0;
                                $sql = "SELECT * from  firmalar     ";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {                ?>

                                        <?php

                                        $b = $b + 1;
                                        ?>
                                <?php $cnt = $cnt + 1;
                                    }
                                } ?>
                                <h2 class="text-bold-700 mt-1 mb-25"><?php echo $b; ?></h2>
                                <p class="mb-0">Müşteri</p><br>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-package text-warning font-medium-5"></i>
                                    </div>
                                </div>
                                <?php


                                $a = 0;
                                $sql = "SELECT * from  isler     ";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {                ?>

                                        <?php

                                        $a = $a + 1;
                                        ?>


                                <?php $cnt = $cnt + 1;
                                    }
                                } ?>
                                <h2 class="text-bold-700 mt-1 mb-25"><?php echo $a; ?></h2>
                                <p class="mb-0">Yapılan İş</p><br>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Aktif İşler</h4>
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



                                                $sql = "SELECT * from  isler WHERE a10 !='Bitti'";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {                ?>



                                                        <tr>
                                                            <td><?php echo $result->id; ?></td>
                                                            <td><?php echo $result->a5; ?>-<?php echo $result->a6; ?></td>
                                                            <td><?php echo $result->a9; ?></td>
                                                            <td><?php echo $result->a2; ?></td>
                                                            <td><?php echo $result->a4; ?></td>
                                                            <td><?php echo $result->a10; ?></td>
                                                            <td><a href="ispage.php?edit=<?php echo $result->id; ?>">Ayrıntılar</a></td>
                                                        </tr>
                                                <?php $cnt = $cnt + 1;
                                                    }
                                                } ?>

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