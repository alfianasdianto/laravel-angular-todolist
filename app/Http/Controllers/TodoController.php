<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todo;

use Carbon;

class TodoController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }


    public function list()
    {
    	return Todo::orderBy('duedate', 'ASC')->get();
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	$data['duedate'] = Carbon::parse($data['duedate'])->format('Y-m-d');

    	$save = Todo::create($data);
    
    	if ($save) {
    		return true;
    	}
    }

    public function destroy($id)
    {
    	$data = Todo::find($id);

    	if ($data->delete()) {
    		return true;
    	}
    }
}
