<div class="app-main__inner">
    <?php $this->load->view('templates/breadcrumb.php') ?>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Employee</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Letter</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <form action="">
                <div class="row">
                    <div class="col-md-9">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Employee Information</h5>
                                <div class="position-relative form-group">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <label for="EyeCode" class="">Employee Code</label>
                                            <input name="EyeCode" id="EyeCode" placeholder="Company Registration Number" type="text" class="form-control" value="JKF746347" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-8">
                                            <label class="">Employee Name</label>
                                            <input name="text" id="text" placeholder="Company Registration Number" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Company Name</label>
                                    <input name="text" id="text" placeholder="Company Name" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Company NPWP</label>
                                    <input name="text" id="text" placeholder="Company NPWP Number" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Address</label>
                                    <div class="row">
                                        <div class="col-sm-12 mb-2">
                                            <input name="text" id="text" placeholder="Street Address 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <input name="text" id="text" placeholder="City" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="aa">DKI Jakarta</option>
                                                <option value="aa">Banten</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <input name="text" id="text" placeholder="Postcode" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-12 mb-2">
                                            <input name="text" id="text" placeholder="INDONESIA" type="text" class="form-control" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Telephone</label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Phone Number 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Phone Number 2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Fax</label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Fax 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Fax 2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">URL</label>
                                    <input name="text" id="text" placeholder="Website Company" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Email</label>
                                    <input name="email" id="text" placeholder="Email Company" type="email" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Base Currency</label>
                                    <input name="text" id="text" placeholder="IDR (Rupiah)" type="text" class="form-control" disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-card mb-3 card sticky-top" style="top: 100px !important">
                            <div class="card-body">
                                <button class="mt-1 btn btn-danger btn-block">Reset</button>
                                <button class="mt-1 btn btn-success btn-block">Save</button>
                            </div>
                            <div class="card-body" style="border-top:10px #ebeef4 solid">
                                <button class="mt-1 btn btn-danger btn-block">Reset</button>
                                <button class="mt-1 btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane tabs-animation fade show" id="tab-content-1" role="tabpanel">
            <form action="">
                <div class="row">
                    <div class="col-md-9">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Company Information</h5>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Company No</label>
                                    <input name="text" id="text" placeholder="Company Registration Number" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Company Name</label>
                                    <input name="text" id="text" placeholder="Company Name" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Company NPWP</label>
                                    <input name="text" id="text" placeholder="Company NPWP Number" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Address</label>
                                    <div class="row">
                                        <div class="col-sm-12 mb-2">
                                            <input name="text" id="text" placeholder="Street Address 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <input name="text" id="text" placeholder="City" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="aa">DKI Jakarta</option>
                                                <option value="aa">Banten</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-2">
                                            <input name="text" id="text" placeholder="Postcode" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-12 mb-2">
                                            <input name="text" id="text" placeholder="INDONESIA" type="text" class="form-control" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Telephone</label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Phone Number 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Phone Number 2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Fax</label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Fax 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-2">
                                            <input name="text" id="text" placeholder="Fax 2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">URL</label>
                                    <input name="text" id="text" placeholder="Website Company" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Email</label>
                                    <input name="email" id="text" placeholder="Email Company" type="email" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Base Currency</label>
                                    <input name="text" id="text" placeholder="IDR (Rupiah)" type="text" class="form-control" disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-card mb-3 card sticky-top" style="top: 100px !important">
                            <div class="card-body">
                                <button class="mt-1 btn btn-danger btn-block">Reset</button>
                                <button class="mt-1 btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>