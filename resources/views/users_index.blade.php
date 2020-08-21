@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="color: #0E0EFF">№</th>
                                <th style="color: #0E9A00">Name</th>
                                <th style="color: #0E9A00">Phone</th>
                                <th style="color: #0E9A00">Email</th>
                                <th style="color: #0E9A00">Birthdate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @php /**@var \App\Models\BlogCategory $item */ @endphp
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                       <a href="{{route('users.show',$user->id)}}">{{$user->phone}}</a>
                                    </td>
                                    <td>{{$user->email ?? ''}}</td>
                                    <td>{{$user->birthdate}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        @if($users->total() > $users->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
