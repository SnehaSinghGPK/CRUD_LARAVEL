<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- datatable css link -->
    @include('datatable_css');

</head>

<body>
    <h1 style="text-align:center">Show Register Page</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>City</th>
                <th>Course</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $x)
            <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->name}}</td>
                <td>{{$x->email}}</td>
                <td>{{$x->password}}</td>
                <td>{{$x->mobile}}</td>
                <td>{{$x->gender}}</td>
                <td>{{$x->city}}</td>
                <td>{{$x->course}}</td>
                <td>{{$x->address}}</td>
                <td> <img src="{{ asset('image/' . $x->photo) }}" alt="Image" height="50px" width="50px">
                </td>
                <td><a href="{{'regisedit/' .$x->id}}"><button class="btn btn-danger">Edit</button></a></td>
                <td><a href="{{'registerdelete/' .$x->id}}"><button class="btn btn-success">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- datatable js link -->
    @include('datatable_js');
</body>

</html>