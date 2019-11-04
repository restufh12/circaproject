<div class="app-main__inner">
  <?php $this->load->view('templates/breadcrumb.php') ?>
  <div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Products Sold</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">$3M</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">45,9%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-lg-7 col-sm-12">
        <div class="mb-3 card">
            <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"></i>Payroll Summary
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last year</a></li>
                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">This Year</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-eg-77">
                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                    <canvas id="canvas"></canvas>
                                </div>
                            </div></div>
                        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/9.jpg') ?>" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/5.jpg') ?>" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/4.jpg') ?>" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                    <div class="widget-subheading">Java Programmer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>429</span>
                                                        <small class="text-warning pl-2">
                                                            <i class="fa fa-dot-circle"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Income Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Expenses Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Spendings Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-12 col-lg-5 col-sm-12">
        <div class="main-card mb-3 card">
            <div class="card-header bg-success text-white">Leave Application</div>
            <div class="table-responsive" style="max-height: 200px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th class="text-center d-none">Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center text-muted">#345</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/4.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">John Doe</div>
                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-warning">On Hold</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#347</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/3.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-success">Approved</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#321</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/2.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Elliot Huber</div>
                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-danger">Denied</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-header bg-info text-white">Claim Approval</div>
            <div class="table-responsive" style="max-height: 200px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th class="text-center d-none">Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center text-muted">#345</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/4.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">John Doe</div>
                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-warning">On Hold</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#347</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/3.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-success">Approved</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#321</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/2.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Elliot Huber</div>
                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-danger">Denied</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-header bg-danger text-white">Claim Checker</div>
            <div class="table-responsive" style="max-height: 200px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th class="text-center d-none">Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center text-muted">#345</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/4.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">John Doe</div>
                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-warning">On Hold</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#347</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/3.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-success">Approved</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#321</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/2.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Elliot Huber</div>
                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                    </div>
                                </div>
                            </div></td>
                        <td class="text-center d-none">23/10/2019</td>
                        <td class="text-center">
                            <div class="badge badge-danger">Denied</div></td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">
                <button class="btn-wide btn btn-success">View All</button>
            </div>
        </div>
    </div>
  </div>
</div>