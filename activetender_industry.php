<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Daftar Jenis Perusahaan Pemilik Tender</h3>
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
                            <a href="activetender_process.php" class="btn btn-outline mr-2 b-r-md">Process</a>
                            <a href="activetender_industry.php" class="btn btn-outline active b-r-md">Industry</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="kategori-industry mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Jenis</th>
                                        <th class="text-center">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">BUMN/BUMD</a><span class="label label-danger ml-3">new</span></td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">Goverment</a><span class="label label-danger ml-3">new</span></td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><a href="">Oil & Gas</a></td>
                                        <td>100</td>
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