<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salesrecords;

class AddController extends Controller
{
 public function home()
 {
     return view('add');
 }
 public function store(Request $request)
 {
     Salesrecords::create([
         'nama_item' => $request->nama_item,
         'keterangan' => $request->keterangan,
         'harga' => $request->harga
     ]);
     return redirect('viewRec');
 }
 public function viewRecords()
 {
    $records = salesrecords::all();
    return view('viewRec', compact('records'));
 }
//  public function edit($id)
//  {
//     $record = salesrecords::where('id', $id)->first();
//     return view('viewRec', compact('record'));
//  }
 public function update(Request $request, $id)
 {
     salesrecords::where('id', $id)->update([
        'nama_item' => $request->nama_item,
        'keterangan' => $request->keterangan,
        'harga' => $request->harga
     ]);
     return back();
 }
 public function delete($id)
 {
     salesrecords::destroy($id);
     return back();
 }
}