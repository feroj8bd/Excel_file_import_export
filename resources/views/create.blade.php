<!DOCTYPE html>
<html>

<head>
    <title>Import student</title>

    <!-- bootstarp cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">


        <div class="mb-3">
            <a href="{{ route('student.create') }}" class="btn btn-success mt-3">Add Student</a>

            <a href="{{ route('student.index') }}" class="btn btn-success mt-3">See All Student</a>

            <a href="{{ route('student.import') }}" class="btn btn-warning mt-3">Import file</a>

            <a href="{{ route('file.export') }}" class="btn btn-primary mt-3">Downlode file</a>

            <a href="{{ route('export-pdf.file') }}" class="btn btn-primary mt-3">Downlode PDF File</a>

        </div>

        <h4 class="text-center pt-3 mt-5">Add Student</h4>

        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">

                </div>
            </div>
            <div class="row mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1">

                </div>
            </div>

            <div class="row mb-3">
                <div class="mb-3">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                </div>
            </div>

            <div class="row mb-3">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    {{-- biotstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
