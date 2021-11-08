@extends('layouts.app')

@section('content')

<div class="container">
                @if (Auth::check())
                        <h2>Tasks List</h2>
					
						@if(session()->has('message'))
							<div class="alert alert-success">
								{{ session()->get('message') }}
							</div>
						@endif
								<a href="{{url('task')}} " class="btn btn-primary">Add new Task</a>
						<a style="float:right;" href="{{url('registernew')}}" class="btn btn-primary">Add new User</a>
						
						<a style="float:right; margin-right:50px;" href="{{url('memberlist')}}" class="btn btn-primary">View Memeber</a>
                        <table class="table">
                            <thead><tr>
                                <th colspan="">Tasks</th>
								<th colspan="">Name</th>
								<th colspan="">Action</th>
								
								
                            </tr>
                        </thead>
						<tbody>@foreach($user->tasks as $task)
						
                            <tr>
                                <td>
                                    {{$task->description}}
                                </td>
								<td>
                                    {{$user->name}}
                                </td>
                                <td>
                                   
                                    <form action="task/{{$task->id}}">
									<a class="btn btn-primary" href="{{url('task/'.$task->id)}} " class="btn btn-primary">Edit</a>
									
									<a class="btn btn-primary" href="{{url('delete/'.$task->id)}} " class="btn btn-danger">Delete</a>
                                        
                                       
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                            
    
                        @endforeach</tbody>
                        </table>
                @else
                    <h3>You need to log in. <a href="{{url('/login')}}">Click here to login</a></h3>
                @endif
               
</div>
@endsection