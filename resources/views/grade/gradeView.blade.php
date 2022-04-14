<!doctype html>
<html lang="en">
<head>
    @include('HeaderFooter.header')
    <title>Insert Grade </title>

</head>
<body>



<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Insert New Grade</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form action="{{route('storeGrade')}}" method="post">
                @csrf
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput">Enter Grade </label>
                    <input placeholder="Grade" type="text" name="grade" class="form-control" id="formGroupExampleInput" >
                </div>

                <button class="btn btn-primary" type="submit">Store Grade</button>
            </form>



        </div>
    </div>
</div>

@include('HeaderFooter.footer')

</body>
</html>
