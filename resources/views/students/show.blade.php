@extends('students.layout')
@section('content')
  
<div class="card" style="margin:90px;">
  <div class="card-header" style="background-color: aqua; text-align:center"> <h1>Students Page</h1> </div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
    </hr>
  </div>
</div>