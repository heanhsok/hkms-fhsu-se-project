@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @role('admin')
                        <h3>You are Admin User</h3>
                    @endrole

                    
                    @role('standard')
                        <h3>You are Standard User</h3>
                    @endrole

                    @role('premiem')
                        <h3>You are Premiem User</h3>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
