@extends('admin.index')
@section('adminContent')
    <!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1 class="text-uppercase">{{$page}}</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">{{$page}}</a>
                </li>
            </ul>
        </div>
        <a href="/admin/index/{{$page}}" class="btn-download">
            <i class='bx bxs-left-arrow' ></i>
            <span class="text">Go Back</span>
        </a>
    </div>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Teachers</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <img src="/files/images/{{$data[0]->img}}"  class="rounded-circle">
            </div>
            <div class="lightbox d-inline-block w-25">
                <ul>
                    @foreach ($columnNames as $column)
                        <li style='font-size: 20px; color: #0f3460'> {{$column}}: </li>
                    @endforeach
                </ul>
            </div>
            <div class="lightbox d-inline-block">
                <ul>
                    @foreach($data[0] as $d)
                        <li style='font-size: 20px;'>{{$d}}</li>
                    @endforeach
                </ul>
            </div>



        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
