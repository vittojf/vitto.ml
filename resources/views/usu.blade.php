@extends('plantilla')

@section('form')
<a href="{{ route('game') }}" class="btn btn-secondary w-10 mr-1">Registrar</a>
@endsection

@section('section')

<div class="jumbotron jumbotron-fluid mx-auto rounded jc  mt-4 ">
<h1 class="text-white text-center">Login</h1>
    <div class="container d-flex justify-content-center align-items-center ">

        
        <div class="card w1 ">

            <div class="card-body">
                <form>
                    <div class="col-sm-12 my-1">
                        <label for="user">User</label>
                        <input type="text" class="form-control" id="user">
                    </div>
                  
                    <div class="col-sm-12 my-1">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="text-center ">
                        <button type="submit" class="btn btn-primary w-75 mt-3 ">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

@endsection
