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
                                        <div class="col-sm-12 col-md-6">
                                            <input name="text" id="text" placeholder="Phone Number 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <input name="text" id="text" placeholder="Phone Number 2" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Fax</label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <input name="text" id="text" placeholder="Fax 1" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6">
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
                                <button class="mt-1 btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Groups</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                    <input placeholder="username" type="text" class="form-control"></div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><input aria-label="Checkbox for following text input" type="checkbox" class=""></span></div>
                                    <input placeholder="Check it out" type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input placeholder="username" type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">@example.com</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                    <input placeholder="Dolla dolla billz yo!" type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input placeholder="Amount" step="1" type="number" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button Dropdown</h5>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                    </div>
                                </div>
                                <input type="text" class="form-control"></div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button Shorthand</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary">To the Left!</button>
                                    </div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">To the Right!</button>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger">To the Left!</button>
                                    </div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success">To the Right!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Sizing</h5>
                            <div>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend"><span class="input-group-text">@lg</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">@normal</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend"><span class="input-group-text">@sm</span></div>
                                    <input type="text" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Addon</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary">I'm a button</button>
                                    </div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary">Split Button</button>
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split btn btn-outline-secondary"><span
                                                class="sr-only">Toggle Dropdown</span></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        </div>
                                    </div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">I'm a button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <form class="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Checkboxes</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox">Check this
                                            custom checkbox</label></div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">Or this
                                            one</label></div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3">But
                                            not this disabled one</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Inline</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input"><label class="custom-control-label" for="exampleCustomInline">An inline custom input</label></div>
                                        <div class="custom-checkbox custom-control ustom-control-inline"><input type="checkbox" id="exampleCustomInline2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomInline2">and another one</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Radios</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Select
                                            this custom radio</label></div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">Or
                                            this one</label></div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio3">But not this
                                            disabled one</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Form Select</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Custom Select</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                            <option value="">Select</option>
                                            <option>Value 1</option>
                                            <option>Value 2</option>
                                            <option>Value 3</option>
                                            <option>Value 4</option>
                                            <option>Value 5</option>
                                        </select></div>
                                        <div class="position-relative form-group"><label for="exampleCustomMutlipleSelect" class="">Custom Multiple Select</label><select multiple="" type="select" id="exampleCustomMutlipleSelect" name="customSelect" class="custom-select">
                                            <option value="">Select</option>
                                            <option>Value 1</option>
                                            <option>Value 2</option>
                                            <option>Value 3</option>
                                            <option>Value 4</option>
                                            <option>Value 5</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleCustomSelectDisabled" class="">Custom Select Disabled</label><select type="select" id="exampleCustomSelectDisabled" name="customSelect" disabled="" class="custom-select">
                                            <option value="">Select</option>
                                            <option>Value 1</option>
                                            <option>Value 2</option>
                                            <option>Value 3</option>
                                            <option>Value 4</option>
                                            <option>Value 5</option>
                                        </select></div>
                                        <div class="position-relative form-group"><label for="exampleCustomMutlipleSelectDisabled" class="">Custom Multiple Select Disabled</label><select multiple="" type="select" id="exampleCustomMutlipleSelectDisabled" name="customSelect" disabled="" class="custom-select">
                                            <option value="">Select</option>
                                            <option>Value 1</option>
                                            <option>Value 2</option>
                                            <option>Value 3</option>
                                            <option>Value 4</option>
                                            <option>Value 5</option>
                                        </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>