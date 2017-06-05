@extends('Auth.app')
@section('title', 'Register')

@section('content')
  <div class="row" style="margin-top: 100px;">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="nomargin">Register</h4>
        </div>
        <div class="panel-body login">
          <div class="col-sm-10 col-sm-offset-1">
            <form action="">
              <div class="form-group">
                <input class="form-control" type="text" name="nip" placeholder="NIP">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Password">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="re-pass" placeholder="Re-type Password">
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block">Register</button>
              </div>
              <br>
              <a href="/" class="text-center center-block"><i>Login now</i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop