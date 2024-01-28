<?php include './../../includes/header.php' ?>
<?php $_SESSION['page'] = "ui-general" ?>

<section class="content-header">
    <h1>
        General UI
        <small>Preview of UI elements</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>

<section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-tag"></i> Color Palette</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Primary</h4>
                    <div class="color-palette-set">
                        <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-primary color-palette"><span>#3c8dbc</span></div>
                        <div class="bg-primary-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Info</h4>
                    <div class="color-palette-set">
                        <div class="bg-info disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-info color-palette"><span>#00c0ef</span></div>
                        <div class="bg-info-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Success</h4>
                    <div class="color-palette-set">
                        <div class="bg-success disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-success color-palette"><span>#00a65a</span></div>
                        <div class="bg-success-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Warning</h4>
                    <div class="color-palette-set">
                        <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-warning color-palette"><span>#f39c12</span></div>
                        <div class="bg-warning-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Danger</h4>
                    <div class="color-palette-set">
                        <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-danger color-palette"><span>#f56954</span></div>
                        <div class="bg-danger-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Gray</h4>
                    <div class="color-palette-set">
                        <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-gray color-palette"><span>#d2d6de</span></div>
                        <div class="bg-gray-active color-palette"><span>Active</span></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Navy</h4>
                    <div class="color-palette-set">
                        <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-navy color-palette"><span>#001F3F</span></div>
                        <div class="bg-navy-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Teal</h4>
                    <div class="color-palette-set">
                        <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-teal color-palette"><span>#39CCCC</span></div>
                        <div class="bg-teal-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Purple</h4>
                    <div class="color-palette-set">
                        <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-purple color-palette"><span>#605ca8</span></div>
                        <div class="bg-purple-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Orange</h4>
                    <div class="color-palette-set">
                        <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-orange color-palette"><span>#ff851b</span></div>
                        <div class="bg-orange-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Maroon</h4>
                    <div class="color-palette-set">
                        <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-maroon color-palette"><span>#D81B60</span></div>
                        <div class="bg-maroon-active color-palette"><span>Active</span></div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Black</h4>
                    <div class="color-palette-set">
                        <div class="bg-black disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-black color-palette"><span>#111111</span></div>
                        <div class="bg-black-active color-palette"><span>Active</span></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <h2 class="page-header">Alerts and Callouts</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header">
                    <i class="fa fa-warning"></i>
                    <h3 class="box-title">Alerts</h3>
                </div>

                <div class="box-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4><i class="fa fa-ban"></i> Alert!</h4>
                        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                        soul, like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4><i class="fa fa-info"></i> Alert!</h4>
                        Info alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4><i class="fa fa-warning"></i> Alert!</h4>
                        Warning alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4><i class="fa fa-check"></i> Alert!</h4>
                        Success alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-primary alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4><i class="fa fa-check"></i> Alert!</h4>
                        Success alert preview. This alert is dismissable.
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Callouts</h3>
                </div>

                <div class="box-body">
                    <div class="callout callout-danger">
                        <h4>I am a danger callout!</h4>
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                    <div class="callout callout-info">
                        <h4>I am an info callout!</h4>
                        <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout callout-warning">
                        <h4>I am a warning callout!</h4>
                        <p>This is a yellow callout.</p>
                    </div>
                    <div class="callout callout-success">
                        <h4>I am a success callout!</h4>
                        <p>This is a green callout.</p>
                    </div>
                    <div class="callout callout-primary">
                        <h4>I am a success callout!</h4>
                        <p>This is a green callout.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <h2 class="page-header">AdminLTE Custom Tabs</h2>
    <div class="row">
        <div class="col-md-6">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <button class="nav-link active" id="onetab" data-bs-toggle="tab" data-bs-target="#one" type="button">Tab 1</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="twotab" data-bs-toggle="tab" data-bs-target="#two" type="button">Tab 2</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="threetab" data-bs-toggle="tab" data-bs-target="#three" type="button">Tab 3</button>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
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
                    </li>
                    <li class="nav-item ms-auto">
                        <button href="#" class="nav-link text-muted"><i class="fa fa-gear"></i></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane show active" id="one">
                        <b>How to use:</b>
                        <p>Exactly like the original bootstrap tabs except you should use
                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                        A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                        I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy,
                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                        that I neglect my talents. I should be incapable of drawing a single stroke
                        at the present moment; and yet I feel that I never was a greater artist than now.
                    </div>

                    <div class="tab-pane" id="two">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>

                    <div class="tab-pane" id="three">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>

                </div>

            </div>

        </div>
        <div class="col-md-6">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs flex-row-reverse" id="myTab">
                    <li class="nav-item">
                        <button class="nav-link active" id="onetabbis" data-bs-toggle="tab" data-bs-target="#oneBis" type="button">Tab 1</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="twotabbis" data-bs-toggle="tab" data-bs-target="#twoBis" type="button">Tab 2</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="threetabbis" data-bs-toggle="tab" data-bs-target="#threeBis" type="button">Tab 3</button>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
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
                    </li>

                    <li class="nav-item header me-auto">
                        <i class="fa fa-th"></i> Custom Tabs
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane show active" id="oneBis">
                        <b>How to use:</b>
                        <p>Exactly like the original bootstrap tabs except you should use
                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                        A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                        I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy,
                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                        that I neglect my talents. I should be incapable of drawing a single stroke
                        at the present moment; and yet I feel that I never was a greater artist than now.
                    </div>

                    <div class="tab-pane" id="twoBis">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>

                    <div class="tab-pane" id="threeBis">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>

                </div>

            </div>

        </div>


    </div>
    <h2 class="page-header">Progress Bars</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Progress Bars Different Sizes</h3>
                </div>

                <div class="box-body">
                    <p><code>.progress .progress-bar-striped</code></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 40%">
                        </div>
                    </div>
                    <p>Class: <code>.progress-sm</code></p>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 20%">
                        </div>
                    </div>
                    <p>Class: <code>.progress-xs</code></p>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 60%">
                        </div>
                    </div>
                    <p>Class: <code>.progress-xxs</code></p>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger progress-bar-striped"  style="width: 60%">
                        </div>
                    </div>
                    <p>Class: <code>.progress .progress-bar-animated</code></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated" style="width: 80%">
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Progress bars</h3>
                </div>

                <div class="box-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" style="width: 40%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" style="width: 20%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" style="width: 60%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger"  style="width: 80%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary"  style="width: 50%">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Vertical Progress Bars Different Sizes</h3>
                </div>

                <div class="box-body text-center">
                    <p>By adding the class <code>.progress-vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code> or
                        <code>.progress-xxs</code> we achieve:
                    </p>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated" style="height: 40%">
                        </div>
                    </div>
                    <div class="progress progress-vertical progress-sm">
                        <div class="progress-bar progress-bar-success" style="height: 100%">
                        </div>
                    </div>
                    <div class="progress progress-vertical progress-xs">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="height: 60%">
                        </div>
                    </div>
                    <div class="progress progress-vertical progress-xxs">
                        <div class="progress-bar progress-bar-info progress-bar-striped" style="height: 60%">
                        </div>
                    </div>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" style="height: 40%">
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Vertical Progress bars</h3>
                </div>

                <div class="box-body text-center">
                    <p>By adding the class <code>.progress-vertical</code> we achieve:</p>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-success" style="height: 40%">
                        </div>
                    </div>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-info" style="height: 20%">
                        </div>
                    </div>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-warning" style="height: 60%">
                        </div>
                    </div>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-danger" style="height: 80%">
                        </div>
                    </div>
                    <div class="progress progress-vertical">
                        <div class="progress-bar progress-bar-primary" style="height: 50%">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <h2 class="page-header">Bootstrap Collapse</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Collapsible Accordion</h3>
                </div>

                <div class="box-body">
                    <div class="box-group accordion" id="accordionExample">

                        <div class="box box-primary">
                            <div class="box-header" id="headingOne">
                                <h4 class="box-title">
                                    <a data-bs-toggle="collapse" data-bs-target="#collapseOne" class="collapse-toggle">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="box box-danger">
                            <div class="box-header" id="headingTwo">
                                <h4 class="box-title">
                                    <a data-bs-toggle="collapse" data-bs-target="#collapseTwo" class="collapse-toggle">
                                        Collapsible Group Danger
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <h4 class="box-title">
                                    <a data-bs-toggle="collapse" data-bs-target="#collapseThree" class="collapse-toggle">
                                        Collapsible Group Success
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <h2 class="page-header">Typography</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Headlines</h3>
                </div>

                <div class="box-body">
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Text Emphasis</h3>
                </div>

                <div class="box-body">
                    <p class="lead">Lead to emphasize importance</p>
                    <p class="text-success">Text green to emphasize success</p>
                    <p class="text-info">Text aqua to emphasize info</p>
                    <p class="text-primary">Text light blue to emphasize primary</p>
                    <p class="text-danger">Text red to emphasize danger</p>
                    <p class="text-warning">Text yellow to emphasize warning</p>
                    <p class="text-muted">Text muted to emphasize muted</p>
                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Block Quotes</h3>
                </div>

                <div class="box-body">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Block Quotes Right</h3>
                </div>

                <div class="box-body">
                    <blockquote class="blockquote-reverse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Unordered List</h3>
                </div>

                <div class="box-body">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Ordered Lists</h3>
                </div>

                <div class="box-body">
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ol>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ol>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>

            </div>

        </div>

        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Unstyled List</h3>
                </div>

                <div class="box-body">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Description</h3>
                </div>

                <div class="box-body">
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Description Horizontal</h3>
                </div>

                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <dt>Felis euismod semper eget lacinia</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                            sit amet risus.
                        </dd>
                    </dl>
                </div>

            </div>

        </div>

    </div>
</section>

<style>
    .color-palette-set {
        margin-bottom: 15px;
    }
    .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: center;
    }
    .color-palette-box h4 {
        position: absolute;
        top: 100%;
        left: 25px;
        margin-top: -40px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
    }
    .color-palette:hover span {
        display: block;
    }
    .color-palette span {
        display: none;
        font-size: 12px;
    }
    .color-palette-box .row > * {
        position: relative;
    }
</style>

<?php include './../../includes/footer.php' ?>
