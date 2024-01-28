@extends('admin.index')
@section('adminContent')
<main>
    <div class="head-title">
        <div class="left">
            <h1>Teachers</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="?page=teachers/index">Add a teacher</a>
                </li>
            </ul>
        </div>
        <a href="?page=teachers/index" class="btn-download">
            <i class='bx bxs-left-arrow' ></i>
            <span class="text">Back</span>
        </a>
    </div>

    <div class="table-data">
        <form action="store/teachers" method="post" enctype="multipart/form-data" >
            @csrf
            <label for="name">Name:</label>
            <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="John Doe" value="{{old('name')}}"><br>

            <label for="status" >Role:</label>
            <input type="number" value="{{old('role')}}" name="role" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="1 0"><br>

            <label for="subject" >Subject:</label>
            <input type="text" value="{{old('subject')}}" name="subject" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Math, Science.."><br>

            <label for="email" required>E-mail:</label>
            <input type="email" value="{{old('email')}}" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="example@web.com" name="email"><br>

            <label for="img">Upload an image:</label>
            <input type="file" name="img" ><br><br>

            <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
        </form>
    </div>
</main>
@endsection

