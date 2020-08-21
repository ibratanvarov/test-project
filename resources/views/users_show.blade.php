@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.users_show_personal_info_col')
            </div>
            @if($bankInfo)
                @include('includes.users_show_bank_info_col')
            @endif
        </div>
    </div>
@endsection
