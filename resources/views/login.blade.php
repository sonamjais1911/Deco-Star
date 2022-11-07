@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <!-- <div class="col-sm-4 col-sm-offset-4> -->
        <div style="width:40%; margin:25px auto;">
        <h2 style="text-align:center;">Login Page</h2>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
        
@endsection