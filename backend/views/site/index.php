<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">5</span>
                </div>
                <div class="desc"> New Feedbacks </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="12,5">1222</span>M$ </div>
                <div class="desc"> Total Profit </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="549">232</span>
                </div>
                <div class="desc"> New Orders </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> +
                    <span data-counter="counterup" data-value="89">2324</span>% </div>
                <div class="desc"> Brand Popularity </div>
            </div>
        </a>
    </div>
</div>

<div>

</div>











<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-edit font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Notes</span>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="note note-success">
            <h4 class="block">Success! Some Header Goes Here</h4>
            <p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
        </div>
        <div class="note note-info">
            <h4 class="block">Info! Some Header Goes Here</h4>
            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
        </div>
        <div class="note note-danger">
            <h4 class="block">Danger! Some Header Goes Here</h4>
            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\ Cras mattis consectetur purus sit amet fermentum. </p>
        </div>
        <div class="note note-warning">
            <h4 class="block">Warning! Some Header Goes Here</h4>
            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
        </div>
    </div>
</div>




<div class="portlet box red-sunglo">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Nestable Portlets </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="" class="fullscreen"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <p>
            <strong>Scroll is hidden</strong>
            <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
            amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
        <div class="row">
            <div class="col-md-4">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet solid purple">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Portlet </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn blue btn-sm">
                                <i class="fa fa-pencil"></i> Edit </a>
                            <div class="btn-group">
                                <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> User
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-ban"></i> Ban </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Make admin </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height:200px">
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
            </div>
            <div class="col-md-4">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Portlet </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="javascript:;" class="reload"> </a>
                            <a href="" class="fullscreen"> </a>
                            <a href="javascript:;" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height:200px">
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
            </div>
            <div class="col-md-4">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet box yellow">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Portlet </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn blue btn-sm">
                                <i class="fa fa-pencil"></i> Edit </a>
                            <div class="btn-group">
                                <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> User
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-ban"></i> Ban </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Make admin </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height:200px">
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="portlet box red">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Portlet </div>
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#portlet_tab_3" data-toggle="tab"> Tab 3 </a>
                            </li>
                            <li>
                                <a href="#portlet_tab_2" data-toggle="tab"> Tab 2 </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_tab_1" data-toggle="tab"> Tab 1 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_tab_1">
                                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna aliquam erat volutpat.ut laoreet dolore magna ut laoreet dolore magna. ut laoreet dolore magna. ut laoreet dolore magna. </p>
                            </div>
                            <div class="tab-pane" id="portlet_tab_2">
                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
                            </div>
                            <div class="tab-pane" id="portlet_tab_3">
                                <p> Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                    esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                    nulla facilisi. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet solid grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Portlet </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn default btn-sm">
                                <i class="fa fa-pencil icon-black"></i> Edit </a>
                            <div class="btn-group">
                                <a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> User
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-ban"></i> Ban </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Make admin </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget
                        lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.nisi erat porttitor
                        ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                        fermentum </div>
                </div>
                <!-- END GRID PORTLET-->
            </div>
        </div>
    </div>
</div>










<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>CKEditor Editor </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal form-bordered">
            <div class="form-body">
                <div class="form-group last">
                    <label class="control-label col-md-3">CKEditor</label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <a href="javascript:;" class="btn green">
                            <i class="fa fa-check"></i> Submit</a>
                        <a href="javascript:;" class="btn btn-outline grey-salsa">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


<div class="col-md-4  portlet light bordered" style="border:1px solid #e7ecf1 ;" >
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                <span class="caption-subject font-green-sharp bold uppercase">PROJECTS </span>
                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
            </div>
            <div class="actions">
                <div class="btn-group">
                    <a class="btn green btn-circle btn-outline btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-settings"></i> &nbsp;
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;"> New Project </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;"> Pending
                                <span class="badge badge-danger"> 4 </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Completed
                                <span class="badge badge-success"> 12 </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Overdue
                                <span class="badge badge-warning"> 9 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;"> Archived Projects </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portlet-body todo-project-list-content">
            <div class="todo-project-list">
                <ul class="nav nav-stacked">
                    <li>
                        <a href="javascript:;">
                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge badge-success"> 2 </span> HSBC Promo </a>
                    </li>
                    <li class="active">
                        <a href="javascript:;">
                            <span class="badge badge-success"> 3 </span> GlobalEx</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge badge-default"> 14 </span> Empire City </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge badge-danger"> 2 </span> Loop Inc Promo </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

