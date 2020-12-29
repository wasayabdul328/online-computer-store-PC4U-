@extends('front.layouts.master')
@section('Page')
THANK YOU
@endsection

@section('content')
<div>
    <div class="container">
        <div class="row">
            
        <h3>Thanks {{auth()->user()->name}}  for Shopping Here</h3>
        </div>
    </div>

</div>


@endsection
