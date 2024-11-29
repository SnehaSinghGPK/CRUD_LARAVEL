<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 style="text-align: center;">Registration Edit Form</h1>
                <form action="../registerupdate" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$data->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$data->email}}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$data->password}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mobile</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="mobile" value="{{$data->mobile}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" {{$data->gender='male'?"checked":""}}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked value="female" {{$data->gender='female'?"checked":""}}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                female
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">City</label>
                        <select class="form-select" aria-label="Default select example" name="city">
                            <option selected {{$data->city='Select One'?"checked":""}}>Select One</option>
                            <option {{$data->city='Ghazipur'?"selected":""}}>Ghazipur</option>
                            <option {{$data->city='Kanpur'?"selected":""}}>Kanpur</option>
                            <option {{$data->city='Lucknow'?"selected":""}}>Lucknow</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        @php
                        $x = explode(',',$data->course);
                        @endphp
                        <label for="exampleInputPassword1" class="form-label">Course</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="C" id="flexCheckDefault" name="course[]" {{in_array('C',$x)?"checked":""}}>
                            <label class="form-check-label" for="flexCheckDefault">
                                C
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="C++" id="flexCheckChecked" checked name="course[]" {{in_array('C++',$x)?"checked":""}}>
                            <label class="form-check-label" for="flexCheckChecked">
                                C++
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="C#" id="flexCheckChecked" checked name="course[]" {{in_array('C#',$x)?"checked":""}}>
                            <label class="form-check-label" for="flexCheckChecked">
                                C#
                            </label>
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="address">{{$data->address}}</textarea>
                        <label for="floatingTextarea">Enter Address</label>
                    </div>

                    <div class="mb-3">
                        <img src="{{asset('image/'.$data->photo)}}" alt="" height="50px" width="50px">
                        <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <div class="col-sm-3"></div>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>