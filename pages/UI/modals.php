<?php include './../../includes/header.php' ?>

<section class="content-header">
    <h1>
        Modals
        <small>Bootstrap Modals</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Modals</li>
    </ol>
</section>

<section class="content">
    <div class="callout callout-info">
        <h4>Bootstrap Modals</h4>
        <p>This version of AdminLTE uses Bootstrap 5 modals. Instructions for how to use modals are available on the
            <a href="https://getbootstrap.com/docs/5.0/components/modal/">Bootstrap documentation</a>
        </p>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Modal Examples</h3>
                </div>
                <div class="box-body">
                    <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#modal-default">
                        Launch Default Modal
                    </button>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-info">
                        Launch Info Modal
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-danger">
                        Launch Danger Modal
                    </button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-warning">
                        Launch Warning Modal
                    </button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-success">
                        Launch Success Modal
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-primary">
                        Launch Primary Modal
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include './../../includes/footer.php' ?>
