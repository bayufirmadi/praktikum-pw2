@@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Backend</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->

                <!-- Card Body -->
                <div class="card-body">
                <h1 class="mt-4">Layanan kami (Eloquent)</h1>
                <a href="{{ route('penulis.tambah') }}" class="btn btn-primary">Tambah Penulis</a>
                <ul>
                    Ini merupakan halaman latihan untuk praktikum pemrograman web 2. Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Qui eaque quis eius nisi, voluptatem, vero
                    maxime iure harum quasi repellat fuga provident doloremque est minima at delectus
                    nesciunt sit libero.
                </div>
            </div>



        </div>
    </div>
</div>
@endsection