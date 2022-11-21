<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function index(){
        $data = Companies::all();
        return view('datacompanies', compact('data'));
    }
    public function create(Request $req){

         $this->validate($req,[
            'name' => 'required',
            'email' => 'required',
            'logo'  => 'required|file|dimensions:min_width=100,min_height=100',
            'website' => 'required',
         ]);

       $data = Companies::create($req->all());
       if($req->hasFile('logo')){
        $req->file('logo')->move('logo/', $req->file('logo')->getClientOriginalName());
        $data->logo = $req->file('logo')->getClientOriginalName();
        $data->save();
       }
        return redirect()->route('companiesdata')->with('jadi' , 'data ditambahkan');

    }
    public function add(){
        return view('addcompanies');
    }
    public function edit($id){
       $data = Companies::find($id);
       return view('editdatacompanies', compact('data'));
    }
    public function update(Request $req, $id){
         $data = Companies::find($id);
         $data->update($req->all());
         return redirect()->route('companiesdata')->with('jadi', 'data terupdate');
    }
    public function delete($id){
        $data = Companies::find($id);
        $data->delete();
        return redirect()->route('companiesdata')->with('jadi', 'data dihapus');
    }
}
