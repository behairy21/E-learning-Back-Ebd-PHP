<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Bootstrap Forms | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="alt-menu sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">



<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed sbar-open" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>



    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">


        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Update Track Course</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" action="{{route('trackCrudUpdateRequest')}}">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Course </label>
                            <input name="course" type="text" class="form-control" id="formGroupExampleInput" value="{{$info->track}}">
                        </div>
                        <div >
                            <label for="formGroupExampleInput">Track </label>
                            <select name="track" class="form-control form-control-lg">
                                <option value="{{$info->track_id}}">{{$info->tracks->track}}</option>
                                @foreach($tracks as $track)
                                    <option value="{{$track->id}}">{{$track->track}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <input type="hidden" name="id" value="{{$info->id}}">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>



                </div>
            </div>
        </div>


        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->



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
    <script src="/assets/js/scrollspyNav.js"></script>
</body>
</html>
