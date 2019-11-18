@extends('layouts.app')


@section('content')




<div class="card card-default">
    <div class="card-header">create category</div>
        <div class="card-body">

          @if($errors->any())   
           
            <div class="alert alert-danger">
                <ul class="list-group">
                   @foreach($errors->all() as $error)

                    {{ $error }}
                   @endforeach
                </ul>
            </div>
          
          @endif
           <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                
                <div class="form-group"> 
                    <label for="name"></label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>

                <div class="form-group">
                    
                     <button class="btn btn-success"> add category</button>  
                </div>

            </form>
        </div>
</div>





@endsection