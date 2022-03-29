<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB ;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LinkDeleteController extends Controller {
public function index(){
return $users = DB::select('select * from student_details');
return view('stud_delete_view',['users'=>$users]);
}
public function destroy($id) {
DB::delete('delete from shortests where id = ?',[$id]);

}
}