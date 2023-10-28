<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stundent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update Student</h1>
                <form action="{{ route('update.student', $data->id) }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="form-lable">Name</label>
                        <input type="text" value="{{ $data->name }}" class="form-control" name="studentname">
                    </div>
                    <div class="mb-4">
                        <label class="form-lable">Email</label>
                        <input type="text" value="{{ $data->email }}" class="form-control" name="studentemail">
                    </div>
                    <div class="mb-4">
                        <label class="form-lable">Age</label>
                        <input type="text" value="{{ $data->age }}" class="form-control" name="studentage">
                    </div>
                    <div class="mb-4">
                        <label class="form-lable">City</label>
                        <input type="text" value="{{ $data->city }}" class="form-control" name="studentcity">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>