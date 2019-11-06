<div class="app-main__inner">
    <?php $this->load->view('templates/breadcrumb.php') ?>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Company Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Payroll Setting</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Payroll Details</span>
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
                                <h5 class="card-title">Payroll Setting</h5>
                                <div class="row mb-5">
                                    <div class="col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Pay Slip Day</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option selected="" value="0">Last Day</option>
                                                <option value="2nd Last Day">2nd Last Day</option>
                                                <option value="3rd Last Day">3rd Last Day</option>
                                                <option value="28">28th</option>
                                                <option value="27">27th</option>
                                                <option value="26">26th</option>
                                                <option value="25">25th</option>
                                                <option value="24">24th</option>
                                                <option value="23">23th</option>
                                                <option value="22">22th</option>
                                                <option value="21">21th</option>
                                                <option value="20">20th</option>
                                                <option value="19">19th</option>
                                                <option value="18">18th</option>
                                                <option value="17">17th</option>
                                                <option value="16">16th</option>
                                                <option value="15">15th</option>
                                                <option value="14">14th</option>
                                                <option value="13">13th</option>
                                                <option value="12">12th</option>
                                                <option value="11">11th</option>
                                                <option value="10">10th</option>
                                                <option value="9">9th</option>
                                                <option value="8">8th</option>
                                                <option value="7">7th</option>
                                                <option value="6">6th</option>
                                                <option value="5">5th</option>
                                                <option value="4">4th</option>
                                                <option value="3">3rd</option>
                                                <option value="2">2nd</option>
                                                <option value="1">1st</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Leave Lock Date</label>
                                            <input name="text" id="text" placeholder="" type="text" class="form-control" value="31/02/2019">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Claim Lock Date</label>
                                            <input name="text" id="text" placeholder="" type="text" class="form-control" value="31/02/2019">
                                        </div>
                                    </div>
                                </div>

                                <h5 class="card-title">Payroll Manager</h5>
                                <div class="row mb-5">
                                    <div class="col-sm-12 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Employee</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option selected="" value="0">Mulyono</option>
                                                <option value="2nd Last Day">Mulyani</option>
                                                <option value="3rd Last Day">Maemunah</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Position</label>
                                            <input name="text" id="text" placeholder="" type="text" class="form-control" value="Staff">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">KTP No</label>
                                            <input name="text" id="text" placeholder="" type="text" class="form-control" value="2374326483264">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Telephone</label>
                                            <input name="text" id="text" placeholder="" type="text" class="form-control" value="0123456789">
                                        </div>
                                    </div>
                                </div>

                                <h5 class="card-title">Decimal Places</h5>
                                <div class="row mb-5">
                                    <div class="col-sm-12 col-md-6 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Decimal Place For Quantity</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Decimal Place For Unit Price</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Decimal Place For Line Amount</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-2">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Rounding For Line Amount</label>
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="card-title">Payroll Month</h5>
                                <div class="row mb-5">
                                    <div class="col-sm-12 mb-2">
                                        <div class="position-relative form-group">
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="1|2019">Jan/2019</option>
                                                <option value="2|2019">Feb/2019</option>
                                                <option value="3|2019">Mar/2019</option>
                                                <option value="4|2019">Apr/2019</option>
                                                <option value="5|2019">May/2019</option>
                                                <option value="6|2019">Jun/2019</option>
                                                <option value="7|2019">Jul/2019</option>
                                                <option value="8|2019">Aug/2019</option>
                                                <option value="9|2019">Sep/2019</option>
                                                <option value="10|2019">Oct/2019</option>
                                                <option value="11|2019">Nov/2019</option>
                                                <option value="12|2019">Dec/2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option value="6">Monthly</option>
                                                <option value="5">Bi-Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2 mb-2">
                                        <div class="position-relative form-group">
                                            <div class="input-group-append"><span class="input-group-text">Pay at</span></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-2">
                                        <div class="position-relative form-group">
                                            <select name="select" id="exampleSelect" class="form-control">
                                                <option disabled="disabled" selected="selected">Select</option>
                                                <option selected="" value="0">Last Day</option>
                                                <option value="2nd Last Day">2nd Last Day</option>
                                                <option value="3rd Last Day">3rd Last Day</option>
                                                <option value="28">28th</option>
                                                <option value="27">27th</option>
                                                <option value="26">26th</option>
                                                <option value="25">25th</option>
                                                <option value="24">24th</option>
                                                <option value="23">23th</option>
                                                <option value="22">22th</option>
                                                <option value="21">21th</option>
                                                <option value="20">20th</option>
                                                <option value="19">19th</option>
                                                <option value="18">18th</option>
                                                <option value="17">17th</option>
                                                <option value="16">16th</option>
                                                <option value="15">15th</option>
                                                <option value="14">14th</option>
                                                <option value="13">13th</option>
                                                <option value="12">12th</option>
                                                <option value="11">11th</option>
                                                <option value="10">10th</option>
                                                <option value="9">9th</option>
                                                <option value="8">8th</option>
                                                <option value="7">7th</option>
                                                <option value="6">6th</option>
                                                <option value="5">5th</option>
                                                <option value="4">4th</option>
                                                <option value="3">3rd</option>
                                                <option value="2">2nd</option>
                                                <option value="1">1st</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2 mb-2">
                                        <div class="position-relative form-group">
                                            <div class="input-group-append"><span class="input-group-text">of The Month</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-card mb-3 card sticky-top" style="top: 100px !important">
                            <div class="card-body">
                                <button class="mt-1 btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane tabs-animation fade show" id="tab-content-2" role="tabpanel">
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
                                <button class="mt-1 btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>