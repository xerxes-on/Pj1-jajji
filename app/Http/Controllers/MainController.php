<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MainController extends Controller
{



    public function index($page){
        $data = DB::table($page)->get();
        $columnNames = Schema::getColumnListing($page);
        return view('adminPages.index.' . $page,compact('columnNames'))->with('data', $data->all());
    }



    public function create($page){
        return view('adminPages.create.' . $page);
    }



    public function store(Request $request, $page){
        $storing = $request->all();
        $columnNames = Schema::getColumnListing($page);
        $inserting = [];
        for ($i=1; $i<count($storing)-1; $i++){
            $inserting[$columnNames[$i]] = $storing[$columnNames[$i]];
        }
        $inserting['created_at'] = now();
        $inserting['updated_at'] = now();
        DB::table($page)->insert($inserting);
        return redirect('admin/index/' . $page);
    }



//    editing data
    public function edit( $page,$id){
        $data = DB::table($page)->find($id);
        return view('adminPages/edit/' . $page)->with('data', $data);
    }



//updating data
    public function update(Request $request, $page, $id){
        $storing = $request->all();
        $columnNames = Schema::getColumnListing($page);
        $inserting = [];

        array_shift($storing);
        array_pop($columnNames);
        array_pop($columnNames);

//        dd($storing, $columnNames);
        for ($i=1; $i<=count($columnNames)-1; $i++){
            $inserting[$columnNames[$i]] = $storing[$columnNames[$i]];
        }
        $inserting['updated_at'] = now();

//        dd($inserting);
        DB::table($page)->where('id', $id)->update($inserting);
        return redirect('admin/index/' . $page);
    }

    public function show($page, $id){
        $data = DB::table($page)->where('id', $id)->get()->all();
        $columnNames = Schema::getColumnListing($page);

        return view('adminPages.show.show', compact('data', 'columnNames', 'page'));
    }




    public function delete($page, $id){
        $deleted = DB::table($page)->where('id', $id)->delete();

        if ($deleted) {
            return redirect('admin/index/' . $page);
        } else {
            echo "Record with ID $id not found.";
        }
    }

}
