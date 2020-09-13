@extends('layouts.default')

@section('title', 'Weibo 主页')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status-form">
          @include('shared._status_form')
        </section>

        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user-info">
          @include('shared._user_info', ['user'=> Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user'=> Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p class="lead">
        你现在看到的是
        <a href="javascript:;">Laravel 入门教程的实例主页</a>
      </p>
      <p>
        一切，将从这里开始
      </p>
      <p>
        <a href="{{ route('signup') }}" class="btn btn-success btn-lg">现在注册</a>
      </p>
    </div>
  @endif
@stop
