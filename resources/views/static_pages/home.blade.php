@extends('layouts.default')
@section('content')
       <div class="jumbotron">
           <h1>Hello Laravel</h1>
           <p class="lead">
               <a href="#">更新中</a>
           </p>
          <p>
              <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
          </p>
       </div>
    @stop