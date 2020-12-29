@extends('admin.layouts.master')

@section('page')
Users
@endsection

@section('content')
<div class="row">
    @include('admin.layouts.message')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Users</h4>
            <p class="category">List of all registered users</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Status</th>
                    <th>Registered at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                <tr>
                    
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->isBan)
                            <span class="label label-danger">Ban</span>
                        @else
                            <span class="label label-success">Un Ban</span>
                        @endif</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    
                    <td>@if($user->isBan)
                    
                            {{ link_to_route('user.unban',' Click to UnBan',$user->id,['class'=>'btn btn-success btn-sm'])}}
                        @else
                            {{ link_to_route('user.ban','Click to Ban',$user->id,['class'=>'btn btn-danger btn-sm'])}}
                        @endif
                        {{link_to_route('users.show','Details',$user->id,['class'=>'btn btn-sm btn-primary','title'=>'User Order Details'])}}
                    </td>
                </tr>
                    @endforeach
                

                </tbody>
            </table>

        </div>
    </div>
</div>
</div>

@endsection