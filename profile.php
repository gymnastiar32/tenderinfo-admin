<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/topbar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">My Profile</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="ibox-content clearfix">
                        <form action="">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="font-bold">Username(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="min. 5 karakter"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Password(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="password" placeholder="min. 5 karakter"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Re-Password(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="password" placeholder="masukkan lagi password"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"> &nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Nama Perusahaan(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="exp:Indonesia Raya, PT"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Email(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="exp:adw@google.com"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Alamat(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Alamat"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Kota(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Kota"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Negara(*)</td>
                                    <td>
                                        <select name="negara" class="form-control b-r-md" id="negara">
                                            <option value="">Indonesia</option>
                                            <option value="">Malaysia</option>
                                            <option value="">Singapore</option>
                                            <option value="">Vietnam</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> &nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Nomor Telepon(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="exp:62-21-51515151"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Fax(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="exp:62-21-52525252"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Nama Kontak(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Nama Kontak"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Telepon Kontak(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Telepon Kontak"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"> &nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Nomor NPWP(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="123456789987654"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Nama Sesuai NPWP(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Nama NPWP"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Alamat Sesuai NPWP(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Alamat NPWP"></td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Kota Sesuai NPWP(*)</td>
                                    <td> <input class="form-control form-control-sm b-r-md" type="text" placeholder="Kota NPWP"></td>
                                </tr>
                            </table>
                            <button class="btn btn-success b-r-md float-right">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Change Password</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content clearfix">
                    <form action="">
                        <table class="table table-bordered">
                            <tr>
                                <td class="font-bold">Masukan Password Anda Saat Ini</td>
                                <td> <input class="form-control form-control-sm b-r-md" type="password" placeholder="Masukkan Password Lama"></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Masukan Password Baru Anda</td>
                                <td> <input class="form-control form-control-sm b-r-md" type="password" placeholder="Masukkan Password Baru"></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Masukan Kembali Password Baru Anda</td>
                                <td> <input class="form-control form-control-sm b-r-md" type="password" placeholder="Masukkan Lagi Password Baru"></td>
                            </tr>
                        </table>
                        <button class="btn btn-success b-r-md float-right">Ganti Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>