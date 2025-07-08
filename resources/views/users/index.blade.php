@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">User Management</h2>

    <div class="card shadow-sm p-4">
        
        <table class="table table-bordered table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample static rows -->
                <tr class="data-row">
                    <td>1</td>
                    <td>Admin User</td>
                    <td>admin@example.com</td>
                    <td>Admin</td>
                </tr>
                <tr class="data-row">
                    <td>2</td>
                    <td>Editor User</td>
                    <td>editor@example.com</td>
                    <td>Editor</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
