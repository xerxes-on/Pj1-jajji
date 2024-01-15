@extends('admin.index')
@section('adminContent')
    <!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Articles</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="/">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Articles</a>
                </li>
            </ul>
        </div>
        <a href="/admin/create/articles" class="btn-download">
            <i class='bx bxs-plus-circle' ></i>
            <span class="text">Add an article</span>
        </a>
    </div>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Articles</h3>
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
                            <td>{{$data[$i]->title}}</td>
                            <td>{{$data[$i]->description}}</td>
                            <td>{{$data[$i]->author}}</td>
                            <td>{{$data[$i]->created_at}}</td>
                            <td>{{$data[$i]->updated_at}}</td>
                            <td>
                                <a href='/admin/show/articles/{{$data[$i]->id}}'><i class='fa-solid fa-eye fa-xl' style='color: #366ece;'></i></a>
                                <a href='/admin/edit/articles/{{$data[$i]->id}}'><i class='fa-solid fa-pen-to-square fa-xl' style='color: #1e8c08;'></i></a>
                                <form action="/admin/delete/articles/{{$data[$i]->id}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"><i class='fa-solid fa-trash fa-xl' style='color: #c81414;'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endfor
            </table>
        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
