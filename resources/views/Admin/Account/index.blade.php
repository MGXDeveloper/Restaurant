@extends('Admin.layouts.head')

@extends('WebSite.layouts.head')
@extends('WebSite.layouts.JavaScript')

@extends('tools.head')
@extends('tools.js')

@extends('Admin.layouts.form_tools')

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

@section('head')
    
<title>صفحة صغيرة مودال محسنة</title>
<style>
    .modal-backdrop {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease;
    }

    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: translateY(-50%) scale(0.5);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    }

    .modal.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(-50%) scale(1);
    }


</style>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .info-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .info-item label {
        font-weight: bold;
        width: 120px;
    }

    .edit-button {
        padding: 5px 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    .edit-button:hover {
        background-color: #0056b3;
    }

</style>

@endsection


@extends('Admin.layouts.sidebar_nav_js')


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
@section('content')

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Accounts</h5>
                    <h1 class="mb-5">Accounts of WebSite</h1>
                </div>


                <div class="container">
                    <h1>Contact Information</h1>
                    <div class="info-item">
                        <label>Phone Number:</label>
                        <span>{{$account->phoneNumber}}</span>
                    </div>
                    <div class="info-item">
                        <label>Email:</label>
                        <span>{{$account->email}}</span>
                    </div>
                    <div class="info-item">
                        <label>YouTube:</label>
                        <span>{{$account->youTube}}</span>
                    </div>
                    <div class="info-item">
                        <label>Facebook:</label>
                        <span>{{$account->facebook}}</span>
                    </div>
                    <div class="info-item">
                        <label>Instagram:</label>
                        <span>{{$account->instagram}}</span>
                    </div>
                    <div class="info-item">
                        <label>Twitter:</label>
                        <span>{{$account->twitter}}</span>
                    </div>
                    <div class="info-item">
                        <label>Location:</label>
                        <span>{{$account->location}}</span>
                    </div>
                    
                </div>

                <!--//////////////////////////////////////////////////////////////////////////////-->
                <!-- زر Edit بروابط مخصصة -->
                
                
                <a class="btn btn-square btn-info mx-1" href="#" onclick="openModalEdit()" style="width: 100%" ><i class="fas fa-edit"></i></a>

                <div id="modalBackdrop" class="modal-backdrop"></div>

                <div id="modalEdit" class="modal">
                    <div class="modal-content" style="width: 49%">
                        <span class="close" style="margin-left: 1%" onclick="closeModalEdit()">&times;</span>
                        
                        <form action="{{route('Account.update', $account->id)}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Phone Number"  name="phoneNumber" value="{{$account->phoneNumber}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Email" name="email" value="{{$account->email}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="YouTube" name="youTube" value="{{$account->youTube}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Facebook" name="facebook" value="{{$account->facebook}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Instagram"  name="instagram" value="{{$account->instagram}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Twitter"  name="twitter" value="{{$account->twitter}}">
                            </div>
                            <div class="input-group" style="width: 90%; margin-top: 1%; margin-left: 5%">
                                <input class="input--style-2" type="text" placeholder="Location"  name="location" value="{{$account->location}}">
                            </div>
                            
                            
                            <div class="p-t-30" style="margin-right: 1%; margin-top: 2%; margin-bottom: 2%">
                                <button class="btn btn-info mx-1" type="submit" style="width: 100%" >Update</button>
                                
                            </div>
                        </form>
                        
                        <a href="#" class="btn btn-info mx-1" onclick="closeModalEdit()" style="width: 99%;" >
                            Close
                        </a>

                    </div>
                </div>

                <!--//////////////////////////////////////////////////////////////////////////////-->

            </div>
        </div>
        
@endsection

