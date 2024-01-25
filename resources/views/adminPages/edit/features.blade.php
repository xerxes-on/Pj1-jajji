@extends('admin.index')
@section('adminContent')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Features</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="?page=features/index">Add a feature</a>
                    </li>
                </ul>
            </div>
            <a href="?page=features/index" class="btn-download">
                <i class='bx bxs-left-arrow' ></i>
                <span class="text">Back</span>
            </a>
        </div>

        <div class="table-data">
            <form action="/admin/update/features/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="name">Title:</label>
                <input type="text"  value="{{$data->name}}" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="High quality"><br>

                <label for="description" >Description:</label>
                <input type="text"  value="{{$data->description}}" name="description" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Blah blah blah..."><br>

                            <label for="logo">Upload the logo:</label>
                            <input type="file" name="img" required><br><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
        </div>
    </main>
@endsection
