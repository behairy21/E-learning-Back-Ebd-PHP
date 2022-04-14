<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Fast Find </title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link href="/assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body class="alt-menu sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">


    <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                        <a class="btn btn-primary" target="_blank" href="{{route('insertTrack')}}">Insert Track</a>
                        <a class="btn btn-primary" target="_blank" href="{{route('storeGrade')}}">Insert Grade</a>

                        <a class="btn btn-primary" target="_blank" href="{{route('gradeCourse')}}">Insert course to grade</a>
                        <a class="btn btn-primary" target="_blank" href="{{route('trackCourse')}}">Insert course to track</a>

                        <a class="btn btn-primary" target="_blank" href="{{route('trackCrudRead')}}">track courses Read</a>
                        <a class="btn btn-primary" target="_blank" href="{{route('gradeCrudRead')}}">grade courses Read</a>

                        <a class="btn btn-primary" target="_blank" href="{{route('login')}}">login</a>
                        <a class="btn btn-primary" target="_blank" href="{{route('register')}}">register</a>




                    </div>


                </div>

            </div>
            <div class="widget-content widget-content-area">




            </div>
        </div>

    </div>



</div>




<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="/bootstrap/js/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="/plugins/highlight/highlight.pack.js"></script>
<script src="/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="/assets/js/scrollspyNav.js"></script>
<script>
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()
</script>
<!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>
</html>
