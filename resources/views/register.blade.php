@extends('_partials/auth')
@section('konten')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <div class="block">
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <!-- Remove This Before You Start -->
                            <h1>Register</h1>
                            <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ url('/registerPost') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="alamat">Name:</label>
                                    <input type="text"  class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Username:</label>
                                    <input type="text"  class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Password Confirmation:</label>
                                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
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