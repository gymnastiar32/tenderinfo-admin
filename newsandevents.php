<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/topbar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">News and Events</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <div id="toolbar">
                            <button class="btn btn-add" onclick="location.href='newsandevents_add.php'">
                                <div class="add-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                Tambah Data
                            </button>
                        </div>
                        <table class="table mt-4 mb-4" id="table" 
                        data-toggle="table" 
                        data-search="true" 
                        data-show-refresh="true" 
                        data-pagination="true" 
                        data-page-size="5" 
                        data-page-list="[5,10, All]" 
                        data-show-toggle="true" 
                        data-side-pagination="client" 
                        data-resizable="false" 
                        data-show-export="true" 
                        data-toolbar="#toolbar" 
                        data-show-columns="true"
                        data-show-pagination-switch="true">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DD/MM/YYYY</td>
                                    <td>Example</td>
                                    <td class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, minus.</td>
                                    <td>
                                        <a class="badge badge-warning py-1 px-3" href="calon_karyawan_edit.html">
                                            Ubah
                                        </a>
                                        <a class="badge badge-success py-1 px-3" href="calon_karyawan_detail_identitas.html">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>