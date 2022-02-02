<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <!-- Panggil bootstrap & css -->
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/mystyle.css')}}">
</head>

<body style="background-image: url('{{asset('img/bg.jpg')}}')">
    <!-- Nav-bar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow-lg">
        <div class="container">
            <a class="navbar-brand mt-2" href="#">Sistem Pencatatan Penjualan</a>
             <!-- Burger Button -->
            <button class="navbar-toggler navbar-dark bg-transparent border" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse pt-2 pb-2" id="mynavbar">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/">Add Item</a>
                     </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="/viewRec">View Records</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container container-form mt-5 mb-5 shadow">
    <div class="row text-white">
        <div class="col-md-10 offset-md-1">
            <h1 class="display-4 text-center mt-4 mb-4">Sales Records List</h1>
            <table class="table text-white mb-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>   
                    @foreach($records as $record) 
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$record->nama_item}}</td>
                        <td>{{$record->keterangan}}</td>
                        <td>{{$record->harga}}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <form action="">
                                <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$record->id}}">
                                Edit
                                </button>
                            </form>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{$record->id}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content" style="background-image: url('{{asset('img/bg.jpg')}}')">

                                        <!-- Body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-10 offset-md-1">
                                                    
                                                    <form action="/update/{{$record->id}}" method="POST">
                                                        @csrf
                                                        @method('patch')
                                                        <h1 class="display-4 text-center mt-2 mb-4">Edit Records</h1>
                                                        <div class="mb-3">
                                                            <label class="form-label" style="font-weight:bold">Nama Item</label>
                                                            <input value="{{$record->nama_item}}" type="text" class="form-control" name="nama_item"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" style="font-weight:bold">Keterangan</label>
                                                            <input value="{{$record->keterangan}}" type="text" class="form-control" name="keterangan"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" style="font-weight:bold">Harga</label>
                                                            <input value="{{$record->harga}}" type="number" class="form-control" name="harga"/>
                                                        </div>
                                                        <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-3">
                                                            <button type="submit" class="btn btn-transparent border text-white">Save Changes</button>
                                                            <button type="button" class="btn btn-danger border" data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="/delete/{{$record->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Panggil Javascript -->
    <script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('script/jquery-3.5.0.min.js')}}"></script>
    
</body>
</html>