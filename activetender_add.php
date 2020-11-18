<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/topbar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Add New Post</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="post">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control b-r-md" placeholder="Insert Tender Title">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control b-r-md" placeholder="Insert Tender Number">
                            </div>
                            <div class="form-group col-12">
                                <label for="tenderFrom" class="font-bold">Tender From</label>
                                <select name="tenderFrom" class="select2-basic form-control b-r-md">
                                    <option value="Option1">Option1</option>
                                    <option value="Option2">Option2</option>
                                    <option value="Option3">Option3</option>
                                    <option value="Option4">Option4</option>
                                    <option value="Option5">Option5</option>
                                </select>
                            </div>
                            <div class="form-group col-12" id="data_1">
                                <label class="font-bold">Tender Announcement Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon b-r-md">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="form-control b-r-md" value="03/04/2014">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="tenderFrom" class="font-bold">Sumber Tender</label>
                                <select name="tenderFrom" class="select2-basic form-control b-r-md">
                                    <option value="Option1">Option1</option>
                                    <option value="Option2">Option2</option>
                                    <option value="Option3">Option3</option>
                                    <option value="Option4">Option4</option>
                                    <option value="Option5">Option5</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="tenderFrom" class="font-bold">Tender Process</label>
                                <select name="tenderFrom" class="select2-basic form-control b-r-md">
                                    <option value="Option1">Option1</option>
                                    <option value="Option2">Option2</option>
                                    <option value="Option3">Option3</option>
                                    <option value="Option4">Option4</option>
                                    <option value="Option5">Option5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="border-top w-100">
                                <h2 class="title font-bold mt-3 mb-4">Registration</h2>
                            </div>
                            <div class="form-group col-12" id="data_1">
                                <label class="font-bold">Opening Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon b-r-md">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="form-control b-r-md" value="03/04/2014">
                                </div>
                            </div>
                            <div class="form-group col-12" id="data_1">
                                <label class="font-bold">Closing Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon b-r-md">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="form-control b-r-md" value="03/04/2014">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <div id="summernote">
                                    <h3 class="">Add Some Title</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem veniam magnam aperiam fuga dolores voluptatum dolorem hic ipsum. Esse tempore nam eos libero quibusdam quae quas excepturi dicta eius officiis. Enim nesciunt nobis libero autem adipisci. Aut doloremque est vel reprehenderit veritatis? Eveniet eius, voluptatibus sint optio voluptatum itaque neque minima consequuntur exercitationem nihil molestias voluptate, omnis doloremque quaerat laudantium dignissimos labore officiis et qui distinctio non incidunt quo odio assumenda. Explicabo eaque ab laudantium ratione harum praesentium aperiam temporibus reprehenderit inventore veritatis vel eligendi doloribus nemo quibusdam fuga dolorum quae necessitatibus qui eius id quia iure, nisi deleniti laborum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore harum asperiores inventore distinctio nobis cumque aspernatur sint doloribus, quaerat corrupti officiis omnis animi obcaecati iste?</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="numberCopy" class="font-bold">Number of Copy</label>
                                <input name="numberCopy" type="text" class="form-control b-r-md" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Industry</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="category-jstree">
                        <ul>
                            <li class="jstree-open">All Industry
                                <ul>
                                    <li class="parentNode">Oil & Gas</li>
                                    <li class="parentNode">Goverment</li>
                                    <li class="parentNode">BUMN/BUMD</li>
                                    <li class="parentNode">Private Sector</li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <a href="" class="text-primary">+ Add New Industry</a>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Commodity</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="category-jstree">
                        <ul>
                            <li class="jstree-open">All Commodity
                                <ul>
                                    <li class="parentNode">Telecommunication</li>
                                    <li class="parentNode">Transportation</li>
                                    <li class="parentNode">Communication & Advertising</li>
                                    <li class="parentNode">Engineering Consultant</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="text-primary">+ Add New Commodity</a>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Categories</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="category-jstree">
                        <ul>
                            <li class="jstree-open">All Categories
                                <ul>
                                    <li class="parentNode">Penyedia Barang</li>
                                    <li class="parentNode">Penyedia Jasa</li>
                                    <li class="parentNode">Penyedia Barang dan Jasa</li>
                                    <li class="parentNode">Penyedia Jasa Lainnya</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="text-primary">+ Add New Category</a>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Publish</h3>
                    <div class="ibox-tools">
                        <div class="collapse-link">
                            <i class="fa fa-chevron-up">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="action pb-3 border-bottom clearfix">
                        <button class="btn btn-outline b-r-md float-left">Save Draft</button>
                        <button class="btn btn-outline b-r-md float-right">Preview</button>
                    </div>
                    <button class="btn btn-success b-r-md full-width mt-3">Publish</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>