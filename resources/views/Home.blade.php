@extends('app')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>User Login</h4>

                    <div class="card-body">
                        <a href="{{url('/callGithub')}}" class="btn btn-primary text-white btn-block btn-social btn-microsoft">
                            <spna class="fab fa-github"></spna> Sign in with Github
                        </a>

                        <a href="{{url('/callGithub')}}" class="btn bg-dark text-white btn-block btn-social btn-microsoft">
                            <span class="fab fa-github"></span> Sign Up with Github
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
