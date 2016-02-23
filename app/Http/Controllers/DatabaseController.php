<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class DatabaseController extends Controller
{
    //Calls the welcome.blade.php
    public function Welcome(){
        $cats=DB::table('menu')->where('type', 'cat')->get();
        return view('welcome', compact('cats'));
    }
    //Calls the items.blade.php
    public function Items($id){
        $items=DB::table('menu')->where('cat_id', $id)->get();
        return view('items', compact('items'));
    }
}
