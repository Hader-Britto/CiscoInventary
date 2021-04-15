@extends('layouts.designLogin')
@section('content')

<img class="imgFondo" src="img/FondoBogota.jpg" alt="">
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3 id="txtLetra">Welcome To Cisco</h3>
				<p id="txtLetra">Inventory System Bogota!</p>
			</div>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-mg-b" role="alert">
                                <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
            @endif
            @if(Session::has('flash_message_success'))
            <div class="alert alert-success" role="alert">
                                <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
            @endif
			<div class="content-error">
           
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="logoLogin">
                            <img src="{{ asset('img/CiscoGifLogin.gif')}}" alt="">
                        </div>
                        <form method="POST" action="{{ url('LoginAuth') }}" id="loginForm">@csrf
                            <div class="form-group">
                                <label class="control-label" for="username">User Name</label>
                                <input type="text" placeholder="User Name" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                              
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
                                <p class="help-block small">(unique access account)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
			</div>
     
    @endsection
