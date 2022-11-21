<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
   public function index(){
      $data2 = Employee::all();
      return view('employeedata', compact('data2'));
  }
  public function create(Request $req){

    $this->validate($req,[
        'firstname' => 'required',
        'lastname' => 'required',
        'email'  => 'required',
        'company' => 'required',
        'phone' => 'required',
     ]);
     $data2 = Employee::create($req->all());
      return redirect()->route('employeesdata')->with('jadi' , 'data ditambahkan');

  }
  public function add(){
      return view('addemployee');
  }
  public function edit($id){
     $data2 = Employee::find($id);
     return view('editdataemployee', compact('data'));
  }
  public function update(Request $req, $id){
       $data2 = Employee::find($id);
       $data2->update($req->all());
       return redirect()->route('employeesdata')->with('jadi', 'data terupdate');
  }
  public function delete($id){
      $data2 = Employee::find($id);
      $data2->delete();
      return redirect()->route('employeesdata')->with('jadi', 'data dihapus');
  }
}
