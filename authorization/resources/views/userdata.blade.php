@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <ul style="list-style-type: none">
                            <li>Id: {{ $user->id }}</li>
                            <li>Name: {{ $user->name }}</li>
                            <li>Email: {{ $user->email }}</li>
                            <li>Created at: {{ $user->created_at }}</li>
                            <li>Updated at: {{ $user->updated_at }}</li>
                        </ul>
                        {{ 'You are logged in!' }}
                        <div id='example-component'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
