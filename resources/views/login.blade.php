@extends('_partials/auth')
@section('konten')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <div class="block col-md-6 offset-md-3">
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <!-- Remove This Before You Start -->
                            <h1>Login</h1>
                            <hr>
                            @if(\Session::has('alert'))
                                <div class="alert alert-danger">
                                    <div>{{Session::get('alert')}}</div>
                                </div>
                            @endif
                            @if(\Session::has('alert-success'))
                                <div class="alert alert-success">
                                    <div>{{Session::get('alert-success')}}</div>
                                </div>
                            @endif
                            <form action="{{ url('/loginPost') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">NIM/Email:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"></input>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-sign-in-alt mr-1"></i> Login
                                        </button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                    </div>          
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection