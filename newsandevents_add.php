<?php include "template/header.php"; ?>
<?php include "template/sidebar.php"; ?>
<?php include "template/topbar.php"; ?>
<?php include "template/pageheader.php"; ?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Add New Tender</h3>
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
                                <input type="text" class="form-control b-r-md" placeholder="Insert Title">
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
                            <div class="form-group col-md-6" id="data_1">
                                <label class="font-normal">Event Start</label>
                                <div class="input-group date">
                                    <span class="input-group-addon b-r-md">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="form-control b-r-md" value="03/04/2014">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="data_1">
                                <label class="font-normal">Event End</label>
                                <div class="input-group date">
                                    <span class="input-group-addon b-r-md">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="form-control b-r-md" value="03/04/2014">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check abc-checkbox">
                                    <input class="form-check-input" id="checkbox1" type="checkbox">
                                    <label class="form-check-label" for="checkbox1">
                                        All Day
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="title">Category</h3>
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
                            <li class="parentNode">Procurement News</li>
                            <li class="jstree-open parentNode">Event
                                <ul>
                                    <li>Webinar</li>
                                    <li>Training</li>
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