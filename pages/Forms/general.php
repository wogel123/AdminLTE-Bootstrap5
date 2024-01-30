<?php include './../../includes/header.php' ?>
<?php $_SESSION['page'] = "ui-general" ?>

<section class="content-header">
    <h1>
        General Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Quick Example</h3>
                </div>


                <form>
                    <div class="box-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFile" class="form-label">File input</label>
                            <input type="file" class="form-control" id="exampleInputFile">
                            <div class="form-text">Example block-level help text here.</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Check me out
                            </label>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary ms-auto">Submit</button>
                    </div>
                </form>
            </div>


            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Different Height</h3>
                </div>
                <div class="box-body">
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                    <br>
                    <input class="form-control" type="text" placeholder="Default input">
                    <br>
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                </div>

            </div>

            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Different Width</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-info">
                        <h4>Bootstrap Columns</h4>
                        <p>Full documentation about Bootstrap 5 column system on official
                            <a href="https://getbootstrap.com/docs/5.0/layout/columns/">Bootstrap documentation</a>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder=".col-sm-3">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder=".col-sm-4">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder=".col-sm-5">
                        </div>
                    </div>
                </div>

            </div>


            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <h4>With checkbox and radio inputs</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button">
                            </div>
                        </div>
                    </div>

                    <h4>With sizing</h4>
                    <p>Small: <code>.input-group.input-group-sm</code></p>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <p>Normal</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <p>Large <code>.input-group.input-group-lg</code></p>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <h4>With buttons</h4>
                    <p>Small: <code>.input-group.input-group-sm</code></p>
                    <div class="input-group input-group-sm mb-3">
                        <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                            Action
                            <span class="fa fa-caret-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                        <input type="text" class="form-control">
                    </div>
                    <p>Normal</p>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-danger">
                            Action
                        </button>
                        <input type="text" class="form-control">
                    </div>
                    <p>Large <code>.input-group.input-group-lg</code></p>
                    <div class="input-group input-group-lg mb-3">
                        <button type="button" class="btn btn-success btn-sm">
                            Small
                        </button>
                        <input type="text" class="form-control">
                    </div>


                </div>

            </div>

        </div>


        <div class="col-md-6">

            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">General Elements</h3>
                </div>

                <div class="box-body">
                    <form>

                        <div class="form-group mb-3">
                            <label class="form-label">Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Text Disabled</label>
                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Textarea Disabled</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                        </div>

                        <div class="form-group mb-3 form-success">
                            <label class="form-label"><i class="fa fa-check"></i> Input with success</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <div class="form-text">Help block with success</div>
                        </div>
                        <div class="form-group mb-3 form-warning">
                            <label class="form-label"><i class="fa fa-warning"></i> Input with warning</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <div class="form-text">Help block with warning</div>
                        </div>
                        <div class="form-group mb-3 form-danger">
                            <label class="form-label"><i class="fa fa-times-circle-o"></i> Input with danger</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <div class="form-text">Help block with danger</div>
                        </div>

                        <div class="form-check form-success">
                            <input class="form-check-input" type="checkbox" id="successCheck" checked>
                            <label class="form-check-label" for="successCheck">
                                Checkbox success
                            </label>
                        </div>

                        <div class="form-check form-danger">
                            <input class="form-check-input" type="checkbox" id="dangerCheck" checked>
                            <label class="form-check-label" for="dangerCheck">
                                Checkbox danger
                            </label>
                        </div>

                        <div class="form-check form-warning">
                            <input class="form-check-input" type="checkbox" id="warningCheck" checked>
                            <label class="form-check-label" for="warningCheck">
                                Checkbox warning
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" disabled>
                            <label class="form-check-label">
                                Checkbox disabled
                            </label>
                        </div>

                        <div class="form-check form-success">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                        <div class="form-check form-danger">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="form-check form-warning">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                                Option three can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" id="flexRadioDefault4" disabled>
                            <label class="form-check-label">
                                Option four is disabled
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-success mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-danger mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-warning mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Select disabled</label>
                            <select class="form-select" disabled>
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Select multiple</label>
                            <select class="form-select" multiple>
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-warning mb-3">
                            <label class="form-label">Select multiple</label>
                            <select class="form-select" multiple>
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-success mb-3">
                            <label class="form-label">Select multiple</label>
                            <select class="form-select" multiple>
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group form-danger">
                            <label class="form-label">Select multiple</label>
                            <select class="form-select" multiple>
                                <option selected>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>


                    </form>
                </div>

            </div>

        </div>

    </div>

</section>

<?php include './../../includes/footer.php' ?>
