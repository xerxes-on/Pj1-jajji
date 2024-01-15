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
            <table>
                @foreach ($columnNames as $column)
                    <th style='font-size: 20px;'> {{$column}} </th>
                @endforeach
                <tr>
                @foreach($data[0] as $d)

                        <td>{{$d}}</td>

                @endforeach
                </tr>
            </table>
        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
