<div class="card card-body">
    <div class="list-group">
        <a href="{{route('vendor.dashboard')}}" class="list-group-item  {{ (\Request::route()->getname() == "vendor.dashboard") ? 'active' : '' }}">Dashboard</a>
        <a href="{{route('vendor.profile', ['id' => Session::get('vendor_id')])}}" class="list-group-item {{ (\Request::route()->getname() == "vendor.profile") ? 'active' : '' }}">Profile</a>
        <a href="{{ route('vendor-product.index') }}" class="list-group-item {{ (\Request::route()->getname() == "vendor-product.index") ? 'active' : '' }}">Product Manager</a>
        <a href="" class="list-group-item">Order Manager</a>
        <a href="" class="list-group-item">Account</a>
        <a href="" class="list-group-item">Change Password</a>
        <a href="{{route('vendor.logout')}}" class="list-group-item">Logout</a>
    </div>
</div>
