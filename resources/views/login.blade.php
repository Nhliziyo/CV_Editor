
@extends('layouts.loginLayout')

@section('content')
<form action="" method="post" id="login">
    <label for="#login" id="form-title">{{$source}}</label>
    <input name="username" class="input-box" placeholder="username...">
    <input  type="password" name="pwd" class="input-box" placeholder="password...">
    <button type="submit" id="submit-btn" class="btn">login</button>
    <button type="button" class="btn" onclick="window.location.href='http://localhost/register_login_system/registration_form.php'">register</button>
    
</form>
@endsection

