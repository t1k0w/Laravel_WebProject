@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Name:</strong> {{ $user->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong> {{ $user->email }}
                        </div>
                        <div class="mb-3">
                            <strong>Joined:</strong> {{ $user->created_at->format('F j, Y') }}
                        </div>
                        <!-- You can add more information here -->
                        <div>
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
