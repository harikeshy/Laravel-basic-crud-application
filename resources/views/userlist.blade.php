@extends('layouts.app')

@section('content')

<div class="container">
      <!--get pagination parameter--->
	       
			<?php $pagenum = app('request')->input('page'); ?>
		

                @if (Auth::check())
                        <h2>Member List</h2>
					
						@if(session()->has('message'))
							<div class="alert alert-success">
								{{ session()->get('message') }}
							</div>
						@endif
							
                        <table class="table">
                            <thead><tr>
                                <th colspan="1">Name</th>
								<th colspan="1">Email</th>
                            </tr>
                        </thead>
						
                        <tbody>@foreach($userRec as $row)
					
                            <tr>
                                <td>
                                    {{$row->name}}
                                </td>
								 <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                   
                                   
									<a class="btn btn-primary" href="{{url('memberlist/'.$row->id)}} " class="btn btn-primary">Edit</a>
									@if($pagenum!="")
									   <a class="btn btn-primary" onClick="return confirm('Do you want to delete this record?');" href="{{url('/memberDelete/'.$row->id.'/'.$pagenum)}} " class="btn btn-danger">Delete</a>
                                       @else 
                                       <a class="btn btn-primary" onClick="return confirm('Do you want to delete this record?');" href="{{url('/memberDelete/'.$row->id)}} " class="btn btn-danger">Delete</a>
                                        @endif

									   {{ csrf_field() }}
                                 
                                </td>
                            </tr>
                           
    
                        @endforeach</tbody>
                        </table>
						
						
						 {{ $userRec->links() }}
                @else
                    <h3>You need to log in. <a href="{{url('/login')}}">Click here to login</a></h3>
                @endif
               
</div>
@endsection