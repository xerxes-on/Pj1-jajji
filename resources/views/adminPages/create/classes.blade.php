@extends('admin.index')
@section('adminContent')
<main>
    <div class="head-title">
        <div class="left">
            <h1>Classes</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="?page=classes/index">Add a class</a>
                </li>
            </ul>
        </div>
        <a href="?page=classes/index" class="btn-download">
            <i class='bx bxs-left-arrow' ></i>
            <span class="text">Back</span>
        </a>
    </div>

    <div class="table-data">
        <form action="store/classes" method="post" enctype="multipart/form-data">
            @csrf
            <label  for="groupName">Group name:</label>
            <input type="text" class=" w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="CF-2"><br>

            <label for="description" >Description:</label>
            <input type="text" name="description" class="w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Students who is  into IT.."><br>

            <label for="capacity" required>Capacity:</label>
            <input type="number"class=" w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="20" name="capacity"><br>


            <label for="price" required>Price:</label>
            <input type="number"class=" w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="250 000" name="price"><br>

            <label for="ages" required>Ages:</label>
            <input type="number"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="3-4" name="age"><br>


            <label for="img" required>IMG:</label>
            <input type="file" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="img"><br>


            <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  "  value="Send" name="submit">
        </form>
    </div>
</main>
@endsection

