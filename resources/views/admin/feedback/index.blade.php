@extends('admin.layouts.master')

@section('page')
Feedback and suggestions
@endsection

@section('content')
<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Users Feedbacks</h4>
            <p class="category">List of users feedbacks and suggestions</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Subject</th>
                    <th>Category</th>
                    <th>Phone #</th>
                    <th>Comments</th>
                    <th>Timming</th>
                </tr>
                
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->company_name}}</td>
                        <td>{{$comment->subject}}</td>
                        <td>{{$comment->category}}</td>
                        <td>{{$comment->phone_no}}</td>
                        <td>{{$comment->comments}}</td>
                        <td>{{$comment->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
                
@endsection