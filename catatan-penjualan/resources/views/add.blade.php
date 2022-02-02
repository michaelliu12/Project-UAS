<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Sales Records</title>
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
                        <a class="nav-link active" href="/">Add Item</a>
                     </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/viewRec">View Records</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container container-form mt-5 shadow">
        <div class="row text-white">
            <div class="col-md-10 offset-md-1">
                <form action="/store" method="POST">
                    @csrf 
                    <h1 class="display-4 text-center mt-4 mb-3">Add Records</h1>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:bold">Nama Item</label>
                        <input type="text" class="form-control" name="nama_item"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:bold">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:bold">Harga</label>
                        <input type="number" class="form-control" name="harga"/>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button class="btn btn-transparent border text-white" style="font-weight:bold">TAMBAH</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Panggil Javascript -->
    <script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('script/jquery-3.5.0.min.js')}}"></script>
    
</body>
</html>