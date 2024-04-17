@extends('admin.master')
@section('title', 'Manage Profile')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Profile Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Vendor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-body">
                <h2>Vendor Profile</h2>
                <hr/>
                <p class="text-center text-success">{{ session('message') }}</p>
                <form action="{{ route('vendor.profile.update', ['id' => $vendor->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12 mb-3">
                            <label>Full Name <span class="required">*</span></label>
                            <input required="Your Name" class="form-control" name="name" value="{{ $vendor->name }}" type="text">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>Mobile Number<span class="required">*</span></label>
                            <input required="Your mobile" class="form-control" name="mobile" value="{{ $vendor->mobile }}" type="number">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>Email Address <span class="required">*</span></label>
                            <input required="Your Email" class="form-control" name="email" value="{{ $vendor->email }}" type="email">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>Address <span class="required">*</span></label>
                            <textarea class="form-control" name="address" id="" cols="15" rows="5">{{ $vendor->address }}</textarea>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>Profile Picture <span class="required">*</span></label>
                            <input class="form-control" name="image" type="file">
                            @if(isset($vendor->image))
                                <img src="{{ asset($vendor->image) }}" alt="" height="120" width="130" class="mt-2"/>
                            @endif
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            {{--<label>Date of Birth <span class="required">*</span></label>
                            <input class="form-control" name="date_of_birth" value="{{ $vendor->date_of_birth }}" type="date">--}}
                            <label for="fc-datepicker">Date of Birth</label>
                            <div class="input-group">
                                <div class="input-group-text bg-primary-transparent text-primary">
                                    <i class="fe fe-calendar text-20"></i>
                                </div>
                                <input class="form-control fc-datepicker" name="date_of_birth" value="{{ $vendor->date_of_birth }}" id="fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                            </div>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>Blood Group <span class="required">*</span></label>
                            <select name="blood_group" class="form-control select2 form-select w-100" data-placeholder="Choose your blood group">
                                <option label="Choose one"></option>
                                <option value="A+" @selected($vendor->blood_group == "A+")>A+</option>
                                <option value="A-" @selected($vendor->blood_group == "A-")>A-</option>
                                <option value="B+" @selected($vendor->blood_group == "B+")>B+</option>
                                <option value="B-" @selected($vendor->blood_group == "B-")>B-</option>
                                <option value="O+" @selected($vendor->blood_group == "O+")>O+</option>
                                <option value="O-" @selected($vendor->blood_group == "O-")>O-</option>
                                <option value="AB+" @selected($vendor->blood_group == "AB+")>AB+</option>
                                <option value="AB-" @selected($vendor->blood_group == "AB-")>AB-</option>
                            </select>

                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>National Identity Number <span class="required">*</span></label>
                            <input  class="form-control" name="nid" value="{{ $vendor->nid }}" type="number">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label>District <span class="required">*</span></label>
                            <select name="district" class="form-control select2-show-search form-select w-100" data-placeholder="Choose your district">
                                <option label="Choose one"></option>
                                <option value="Bagerhat" @selected($vendor->district == "Bagerhat")>Bagerhat</option>
                                <option value="Bandarban" @selected($vendor->district == "Bandarban")>Bandarban</option>
                                <option value="Barguna" @selected($vendor->district == "Barguna")>Barguna</option>
                                <option value="Barisal" @selected($vendor->district == "Barisal")>Barisal</option>
                                <option value="Bhola" @selected($vendor->district == "Bhola")>Bhola</option>
                                <option value="Bogra" @selected($vendor->district == "Bogra")>Bogra</option>
                                <option value="Brahmanbaria" @selected($vendor->district == "Brahmanbaria")>Brahmanbaria</option>
                                <option value="Chandpur" @selected($vendor->district == "Chandpur")>Chandpur</option>
                                <option value="Chittagong" @selected($vendor->district == "Chittagong")>Chittagong</option>
                                <option value="Chuadanga" @selected($vendor->district == "Chuadanga")>Chuadanga</option>
                                <option value="Comilla" @selected($vendor->district == "Comilla")>Comilla</option>
                                <option value="Cox's Bazar" @selected($vendor->district == "Cox's Bazar")>Cox's Bazar</option>
                                <option value="Dhaka" @selected($vendor->district == "Dhaka")>Dhaka</option>
                                <option value="Dinajpur" @selected($vendor->district == "Dinajpur")>Dinajpur</option>
                                <option value="Faridpur" @selected($vendor->district == "Faridpur")>Faridpur</option>
                                <option value="Feni" @selected($vendor->district == "Feni")>Feni</option>
                                <option value="Gaibandha" @selected($vendor->district == "Gaibandha")>Gaibandha</option>
                                <option value="Gazipur" @selected($vendor->district == "Gazipur")>Gazipur</option>
                                <option value="Gopalganj" @selected($vendor->district == "Gopalganj")>Gopalganj</option>
                                <option value="Habiganj" @selected($vendor->district == "Habiganj")>Habiganj</option>
                                <option value="Jaipurhat" @selected($vendor->district == "Jaipurhat")>Jaipurhat</option>
                                <option value="Jamalpur" @selected($vendor->district == "Jamalpur")>Jamalpur</option>
                                <option value="Jessore" @selected($vendor->district == "Jessore")>Jessore</option>
                                <option value="Jhalokati" @selected($vendor->district == "Jhalokati")>Jhalokati</option>
                                <option value="Jhenaidah" @selected($vendor->district == "Jhenaidah")>Jhenaidah</option>
                                <option value="Khagrachari" @selected($vendor->district == "Khagrachari")>Khagrachari</option>
                                <option value="Khulna" @selected($vendor->district == "Khulna")>Khulna</option>
                                <option value="Kishoreganj" @selected($vendor->district == "Kishoreganj")>Kishoreganj</option>
                                <option value="Kurigram" @selected($vendor->district == "Kurigram")>Kurigram</option>
                                <option value="Kushtia" @selected($vendor->district == "Kushtia")>Kushtia</option>
                                <option value="Lakshmipur" @selected($vendor->district == "Lakshmipur")>Lakshmipur</option>
                                <option value="Lalmonirhat" @selected($vendor->district == "Lalmonirhat")>Lalmonirhat</option>
                                <option value="Madaripur" @selected($vendor->district == "Madaripur")>Madaripur</option>
                                <option value="Magura" @selected($vendor->district == "Magura")>Magura</option>
                                <option value="Manikganj" @selected($vendor->district == "Manikganj")>Manikganj</option>
                                <option value="Maulvibazar">Maulvibazar</option>
                                <option value="Meherpur" @selected($vendor->district == "Meherpur")>Meherpur</option>
                                <option value="Munshiganj" @selected($vendor->district == "Munshiganj")>Munshiganj</option>
                                <option value="Mymensingh" @selected($vendor->district == "Mymensingh")>Mymensingh</option>
                                <option value="Naogaon" @selected($vendor->district == "Naogaon")>Naogaon</option>
                                <option value="Narail" @selected($vendor->district == "Narail")>Narail</option>
                                <option value="Narayanganj" @selected($vendor->district == "Narayanganj")>Narayanganj</option>
                                <option value="Narsingdi" @selected($vendor->district == "Narsingdi")>Narsingdi</option>
                                <option value="Natore" @selected($vendor->district == "Natore")>Natore</option>
                                <option value="Nawabganj" @selected($vendor->district == "Nawabganj")>Nawabganj</option>
                                <option value="Netrokona" @selected($vendor->district == "Netrokona")>Netrokona</option>
                                <option value="Nilphamari" @selected($vendor->district == "Nilphamari")>Nilphamari</option>
                                <option value="Noakhali" @selected($vendor->district == "Noakhali")>Noakhali</option>
                                <option value="Pabna" @selected($vendor->district == "Pabna")>Pabna</option>
                                <option value="Panchagarh" @selected($vendor->district == "Panchagarh")>Panchagarh</option>
                                <option value="Patuakhali" @selected($vendor->district == "Patuakhali")>Patuakhali</option>
                                <option value="Pirojpur" @selected($vendor->district == "Pirojpur")>Pirojpur</option>
                                <option value="Rajbari" @selected($vendor->district == "Rajbari")>Rajbari</option>
                                <option value="Rajshahi" @selected($vendor->district == "Rajbari")>Rajshahi</option>
                                <option value="Rangamati" @selected($vendor->district == "Rangamati")>Rangamati</option>
                                <option value="Rangpur" @selected($vendor->district == "Rangpur")>Rangpur</option>
                                <option value="Satkhira" @selected($vendor->district == "Satkhira")>Satkhira</option>
                                <option value="Shariatpur" @selected($vendor->district == "Shariatpur")>Shariatpur</option>
                                <option value="Sherpur" @selected($vendor->district == "Sherpur")>Sherpur</option>
                                <option value="Sirajganj" @selected($vendor->district == "Sirajganj")>Sirajganj</option>
                                <option value="Sunamganj" @selected($vendor->district == "Sunamganj")>Sunamganj</option>
                                <option value="Sylhet" @selected($vendor->district == "Sylhet")>Sylhet</option>
                                <option value="Tangail" @selected($vendor->district == "Tangail")>Tangail</option>
                                <option value="Thakurgaon" @selected($vendor->district == "Thakurgaon")>Thakurgaon</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update Profile Info</button>
                        </div>
                    </div>
                </form>
        </div>
@endsection
