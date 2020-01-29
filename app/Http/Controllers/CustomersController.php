<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomersController extends Controller
{
    public function index()
{
    $customers = Customers::all();
    return $customers;

}
public function show ($id)
{
    $customers = Customers::find($id);
    return $customers;
}
public function store($id=null,$nis=null,$nama=null,$kelas=null,$jumlah=null)
{
    $customers = new Customers();
    $customers->code = $a;
    $customers->name = $b;
    $customers->email = $c;
    $customers->country = $d;
    $customers->city = $d;
    $customers->address = $d;
    $customers->contact_number = $d;

    $customers->save();
    return $customers;
}
public function delete ($id){
    $customers = Customers::find($id);
    $customers->delete();
    return $customers;
}
}
