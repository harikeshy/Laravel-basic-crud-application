<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Task;  // Model
use App\User;  // Model
use Illuminate\Http\Request;

class TasksController extends Controller
{
	
    public function index()
    {
		
		$user = Auth::user();
		return view('welcome',compact('user'));
	  }

    public function add()
    {
	
    	return view('add');
    }

    public function addData(Request $request)
    {
	    
		$validatedData = $request->validate([
        'description' => 'required|max:255',
		
        ]);	
			
    	$task = new Task();
		$task->description = $request->description;
		
		$task->user_id = Auth::id();
	
		$task->save();
		
		$data['message'] = "Record Added Successfully";
		return redirect('/')->with($data); 
		
    }

    public function edit(Task $task)
    {

    	if (Auth::check() && Auth::user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/');
         }            	
    }

    public function update(Request $request, Task $task)
    {
		
    		$task->description = $request->description;
	    	$task->save();
	    	
			$data['message'] = "Record updated Successfully";
			return redirect('/')->with($data); 
			
    }
	
	 public function deleteRec(Request $request, Task $task)
    {
		if($task!="") {
		
			$task->delete();
			
    		$data['message'] = 'Record deleted Successfully';
			return redirect('/')->with($data);
    	}
    	else
    	{
    		$data['errors'] = 'Invalid Operation. You have not sufficient permissions';
	    	return redirect('/')->with($data);
    	}    	
    }
	
	public function add_new_user()
    {
		
		return view('add_user');
    }
	
	public function addUser(Request $request)
   {
	 $validatedData = $request->validate([
        'username' => 'required|max:255',
        'email' => 'required|email|unique:users',
		'password'  =>  'required|min:6|confirmed',
	]);

   $post = new User();
 
   $post->name = $request->username;
   $post->email = $request->email;
   $post->password = Hash::make($request->pass);
  
   $post->save();
   return redirect('/memberlist');
   
   
   }
   
   public function memberList()
   {
	    //$userList = DB::table('users')->paginate(10);
		$userList = User::orderBy('created_at','desc')->paginate(10);
		return view('userlist', ['userRec' => $userList]);
		
	}
	 public function editMember(Request $request, $uid)
    {
		
		$userList = User::where('id',$uid)->first();
		//echo "<pre>";print_r($request->user()->id);
		if($userList && ($request->user()->id == $uid ))
			return view('memberedit')->with('userRec',$userList);
		else 
		{
			return redirect('/memberlist')->withErrors('you have not sufficient permissions');
		}
	}
	
	public function updateMember(Request $request)
	{
		// hidden input
		$user_id = $request->user_id;
		
		$user = User::find($user_id);
		
		if($user_id!="")
		{
		   $user->name = $request->username;
		   $message = 'Memeber updated successfully';
				
			$user->save();
	 		return redirect('memberlist')->withMessage($message);
		}
		else
		{
			return redirect('memberlist')->withErrors('you have not sufficient permissions');
		}
	}

	
	public function memberDelete(Request $request, User $uid, $page_no="")
	{
		
		if($uid!="")
		{
			$uid->delete();
			$data['message'] = "Record deleted successfully";
			if($page_no!=""){
				return redirect('/memberlist?page='.$page_no.' ')->with($data);
				} else {
					return redirect('/memberlist')->with($data);
				}
		   }
		else
		{
				$data['message'] = "Invalid operation. Please try again later!";
				return redirect('/memberlist')->with($data);
		}
	}

}
