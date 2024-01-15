@extends('admin.index')
@section('adminContent')
    <!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Messages</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="/">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Messages</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Messages</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <table>
                @foreach ($columnNames as $column)
                    <th style='font-size: 20px;'> {{$column}} </th>
                @endforeach
                @for($i=0; $i<count($data); $i++)
                    <tr>
                        <td>{{$data[$i]->id}}</td>
                        <td>{{$data[$i]->name}}</td>
                        <td>{{$data[$i]->mobile}}</td>
                        <td>{{$data[$i]->group}}</td>
                        <td>{{$data[$i]->created_at}}</td>
                        <td>{{$data[$i]->updated_at}}</td>
                        <td>
                            <a href='/admin/show/messages/{{$data[$i]->id}}'><i class='fa-solid fa-eye fa-xl' style='color: #366ece;'></i></a>
                        </td>
                    </tr>
                @endfor
            </table>
        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
