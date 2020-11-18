<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/topbar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Daftar Proses Tender</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="tools w-100">
                        <div class="kategori-tender float-left">
                            <a href="activetender_company.php" class="btn btn-outline mr-2 b-r-md">Company</a>
                            <a href="activetender_commodity.php" class="btn btn-outline mr-2 b-r-md">Commodity</a>
                            <a href="activetender_process.php" class="btn btn-outline active mr-2 b-r-md">Process</a>
                            <a href="activetender_industry.php" class="btn btn-outline b-r-md">Industry</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="kategori-process mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Proses</th>
                                        <th class="text-center">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">Announcement</a></td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td><a href="">PascaQualification</a><span class="label label-danger ml-2">new</span></td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">PraQualification</a><span class="label label-danger ml-2">new</span></td>
                                        <td>89</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">Registration</a><span class="label label-danger ml-2">new</span></td>
                                        <td>825</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>