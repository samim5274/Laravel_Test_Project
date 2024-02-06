@extends('layout.custom')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hi, I am SAMIM-HosseN.</h1><br>
            <form method="post" action="form-submit">
                @csrf
                <div class="form-group">
                    <label>Usename</label>
                    <input type="text" name="username" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection