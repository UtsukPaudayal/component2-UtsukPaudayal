@extends('layouts.app')
@section('title','update')
@section('content')

<div class="conatiner" style="padding:30px;">
    <div class="row">



        <div class="col-md-4"> </div>


        <div class = "col-md-4">
           <div class="container">
                <div class="container-header">
                <h4 style="text-align:center;"><strong>Update Product</strong></h4>
                </div>

                 <div class="container-body">
                    <div class="row centered-form">		
                        <form method="POST" action="{{route('updateproduct',$data['id'])}}" >
                        @csrf
                        @method ('PUT')
                        
                        <input type="hidden" name="id" value="{{ $data['id']}}">

                            <div class="form-group">
			    				<input type="text" name="title" class="form-control input-sm" value="{{ $data['title']}}">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstname" class="form-control input-sm" value="{{$data['firstname']}}">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    					<input type="text" name="lastname" class="form-control input-sm" value="{{$data['lastname']}}">
			    					</div>
			    				</div>
			    			</div>

                            <div class="form-group">
			    				<input type="text" name="pgpl" class="form-control input-sm" value="{{$data['pgpl']}}">
			    			</div>

                            <div class="form-group">
			    				<input type="text" name="price" class="form-control input-sm" value="{{$data['price']}}">
			    			</div>
			    			
			    			<input type="submit" value="UPDATE" class="btn btn-success btn-block">
			    		
			    	    </form>	    		
    		        </div>
    
                </div>

            </div>      
              
        </div>
    
    
    </div>
</div>



@endsection