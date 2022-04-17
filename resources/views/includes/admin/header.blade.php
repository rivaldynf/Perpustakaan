<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ $title }} </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('includes.admin.script')
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="" class="logo">
      <span class="logo-mini"><b>P</b>C</span>
      <span class="logo-lg">Perpustakaan</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            
            <a href="">
              Welcome ,<i class="fa fa-edit"> </i> {{ auth()->user()->name }} </a>
          </li>
          
          {{-- <form action="/logout" method="post">
            @csrf
            <button type="submit" class="">
                Logout
            </button>
          </form> --}}

          {{-- <li>
            <a href="/logout">Sign out</a>
          </li> --}}


        </ul>
      </div>
    </nav>
  </header>

