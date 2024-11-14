<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TransactionController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = Transaction::all();
            return DataTables::of($data)->make(true);
        }
        return view('admin-page.transactions.transaction');
    }

    public function submit(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'harga' => 'required|numeric',
            'no_telp_outlet' => 'required|numeric',
        ]);
        
        if($validator->fails()){
            $messages = $validator->messages();
            $alertMessage = $messages->first(); 
            return back()->with(['error' => $alertMessage]);
        }

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());
        Destination::create([
            'nama_kota' => $request->nama_kota,
            'description' => $request->description,
            'image' => $image->hashName(),
            'harga' => $request->harga,
            'no_telp_outlet' => $request->no_telp_outlet
        ]);

        return redirect('/admin/destinations')->with('success', 'data dah masukk');
    }

    public function edit($id){
        $data = Destination::find($id);
        return view('admin-page.destinations.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'string',
            'description' => 'string',
            'image' => 'image|mimes:jpeg,jpg,png',
            'harga' => 'numeric',
            'no_telp_outlet' => 'numeric',
        ]);
        
        if($validator->fails()){
            $messages = $validator->messages();
            $alertMessage = $messages->first(); 
            return back()->with(['error' => $alertMessage]);
        }

        $destinasi = Destination::find($id);
        $data = [
            'nama_kota' => $request->nama_kota,
            'description' => $request->description,
            'harga' => $request->harga,
            'no_telp_outlet' => $request->no_telp_outlet
        ];
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = $image->hashName();
            $image->storeAs('public/image', $data['image']);
        }    

        $destinasi->update($data);

        return redirect('/admin/destinations')->with('success', 'data dah di update');
    }
    
    public function delete($id){
        $data = Destination::find($id);
        $data->delete();
        return redirect('/admin/destinations')->with('success', 'data dah di hapuss');
    }
}
