<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Export</title>
</head>

<body>
    <div class="container">
        <form action={{ route('file.export') }} method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
            <a href="{{ route('student.create') }}" class="btn btn-success mt-3">Add Student</a>

                <a href="{{ route('student.index') }}" class="btn btn-success mt-3">See All Student</a>

                <a href="{{ route('student.import') }}" class="btn btn-warning mt-3">Import file</a>

                <a href="{{ route('file.export') }}" class="btn btn-primary mt-3">Downlode file</a>

                <a href="{{ route('export-pdf.file') }}" class="btn btn-primary mt-3">Downlode PDF File</a>

            </div>

            <div class="row">
                <input type="file" name="file" class="form-control">
                <button type="submit" class="btn btn-success">Downlade </button>
            </div>
        </form>
    </div>
</body>

</html>
