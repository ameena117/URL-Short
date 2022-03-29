<?php

namespace App\Http\Controllers;
use App\Models\Shortest;
use App\Http\Requests\LinkRequest;
use Illuminate\Support\Str;
//use DB;

class LinksController extends Controller
{
    //
    public function index()
    {
        $shortLinks = Shortest::latest()->get();
        return view('shortLink', compact('shortLinks'));
    }
    public function store(LinkRequest $request)
    {
        //return $request;
        Shortest::create([
            'long' =>  $request->long, 
            'short'=> Str::random(10)
            
        ]);
  
        return redirect('shortest-link')
             ->with('success', 'Done !!');

    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function shortLink($code)
    {
    
        $find = Shortest::where('short', $code)->first();
        return redirect($find->long);
    }
    /*public function destroy($id) {
        DB::delete('delete from student_details where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }*/
}
