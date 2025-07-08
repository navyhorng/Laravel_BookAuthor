@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Settings</h2>

    <div class="card shadow-sm p-4">
        <form>
            <div class="form-group mb-3">
                <label for="site_name">Site Name</label>
                <input type="text" class="form-control" id="site_name" value="NLR Book Management">
            </div>

            <div class="form-group mb-3">
                <label for="admin_email">Admin Email</label>
                <input type="email" class="form-control" id="admin_email" value="admin@example.com">
            </div>

            <div class="form-group mb-3">
                <label for="maintenance_mode">Maintenance Mode</label>
                <select class="form-control" id="maintenance_mode">
                    <option value="off">Off</option>
                    <option value="on">On</option>
                </select>
            </div>

            <button type="submit" class="btn" id="button-submit">Save Settings</button>
        </form>
    </div>
</div>
@endsection
