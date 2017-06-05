@extends('Auth.app')
@section('title', 'Login')

@section('content')
  <div class="row" style="margin-top: 100px;">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="nomargin">Login</h4>
        </div>
        <div class="panel-body login">
          <div class="col-sm-10 col-sm-offset-1">
            <!-- <form action="{{action('HomeController@monitor')}}" method="POST"> -->
              <div class="form-group">
                <input class="form-control" type="text" name="nip" placeholder="NIP">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Password">
              </div>
              <div class="form-group">
                <a href="Index"><button class="btn btn-primary btn-block">Login</button></a>
              </div>
            <!-- </form> -->
            <br>
            <a href="Register" class="text-center center-block"><i>Didn't have account? Register now</i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop