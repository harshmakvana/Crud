<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brilliant Students </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-18">
            <h1>All Users List</h1>
            <a href="/newstudent" class="btn btn-secondary btn-sm mb-3">Add Student</a>
            <form action="search_data" method="GET">
            <div class="left">
                <input type="text"   name="search">
                <button type="submit">Search</button>
            </div>
            </form>
                
                <table class="table">

                    <thead class="text-light bg-dark">
                      <tr class="text-light bg-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                        {{-- <th scope="col">View</th> --}}
                        <th scope="col">Updata</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $id => $student)
                      <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name}}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->age}}</td>
                        <td>{{ $student->city}}</td>
                        {{-- <td><a href="{{ route('view.student', $student->id) }}" class="btn btn-outline-primary">View</a></td> --}}
                        <td><a href="{{ route('update.page', $student->id)}}" class="btn btn-outline-warning">Update</a></td>
                        <td><a href="{{ route('delete.student', $student->id) }}" class="btn btn-outline-danger">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>     
        </div>   
    </div>
</body>
</html>