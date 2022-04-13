@extends('app')
@section('content');
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>DashBoard</h4>

                        <div class="card-body">
                           <img class="w-25" style="object-fit: cover;width:110px;height: 180px;border-radius: 5%;" src="{{Session::get('img')}}">

                            <table class="table mt-4 table-bordered">
                                <tr>
                                    <td>User Id</td>
                                    <td>{{Session::get('userId')}}</td>
                                </tr>
                                <tr>
                                    <td>Nick Name</td>
                                    <td>{{Session::get('nickName')}}</td>
                                </tr>
                                <tr>
                                    <td>Full Name</td>
                                    <td>{{Session::get('name')}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{Session::get('email')}}</td>
                                </tr>
                                <tr>
                                    <td>Token</td>
                                    <td>{{Session::get('token')}}</td>
                                </tr>
                            </table>
                            <a href="{{url('/logout')}}" class="btn btn-primary text-white">Log out</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

