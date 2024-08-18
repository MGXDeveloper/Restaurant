@extends('Admin.layouts.head')

@extends('WebSite.layouts.head')
@extends('WebSite.layouts.JavaScript')

@extends('tools.head')
@extends('tools.js')

@extends('Admin.layouts.form_tools')

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

@extends('Admin.layouts.sidebar_nav_js')


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

@section('button')

    <button class="btn btn-primary" onclick="openModalAdd()" >Add To Team</button>

    <div class="modal-backdrop" id="modalBackdrop"></div>
    <div class="modal" id="modalAdd">
        <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">

                <div class="card card-2">
                    <div></div>
                    <div class="card-body">
                        <h2 class="title">Add to Team</h2>
                        <form action="{{route('Add_Team')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Name" name="name">
                            </div>

                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Facebook" name="facebook">
                            </div>
                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Instagram" name="instagram">
                            </div>
                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Twitter" name="twitter">
                            </div>

                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="file"  name="Image">
                            </div>

                            <div class="p-t-30">
                                <button class="btn btn--radius btn--green" type="submit">Add</button>

                            </div>
                        </form>
                        <button class="btn btn--radius btn--green" onclick="closeModalAdd()" >Close</button>
                    </div>
                </div>

        </div>
    </div>

@endsection

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
@section('content')

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">

                    @foreach ($teams as $team )

                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="storage/{{$team->image}}" alt="">
                                </div>
                                <h5 class="mb-0">{{$team->name}}</h5>
                                <small>Designation</small>
                                <div class="d-flex justify-content-center mt-3">

                                    <!--//////////////////////////////////////////////////////////////////////////////-->
                                    <!-- زر Edit بروابط مخصصة -->
                                    <a class="btn btn-square btn-info mx-1" href="{{ route('Team.edit', $team->id ) }}"><i class="fas fa-edit"></i></a>
                                    <div class="modal-backdrop" id="modalBackdrop"></div>
                                    <div class="modal" id="modalEdit">
                                        <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">

                                                <div class="card card-2">
                                                    <div class="card-heading"></div>
                                                    <div class="card-body">
                                                        <h2 class="title" style="margin-right: 95%" >Edit</h2>
                                                        <form action="{{route('Team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PATCH')

                                                            <div class="input-group" style="width: 30%">
                                                                <input class="input--style-2" type="text" placeholder="Name"  name="name" value="{{$team->name}}">
                                                            </div>

                                                            <div class="input-group" style="width: 30%">
                                                                <input class="input--style-2" type="text" placeholder="Facebook" name="facebook" value="{{$team->facebook}}">
                                                            </div>
                                                            <div class="input-group" style="width: 30%">
                                                                <input class="input--style-2" type="text" placeholder="Instagram" name="instagram" value="{{$team->instagram}}">
                                                            </div>
                                                            <div class="input-group" style="width: 30%">
                                                                <input class="input--style-2" type="text" placeholder="Twitter" name="twitter" value="{{$team->twitter}}">
                                                            </div>

                                                            <div class="input-group" style="width: 30%">
                                                                <input class="input--style-2" type="file"  name="Image" value="{{asset("storage/$team->image")}}">
                                                            </div>

                                                            <div class="p-t-30">
                                                                <button class="btn btn--radius btn--green" type="submit" style="margin-right: 100%" >Update</button>

                                                            </div>
                                                        </form>
                                                        <button class="btn btn--radius btn--green" onclick="closeModalEdit()" style="margin-right: 100%" >Close</button>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>


                                    <!--//////////////////////////////////////////////////////////////////////////////-->

                                    <a class="btn btn-square btn-primary mx-1" href="{{$team->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="{{$team->instagram}}"><i class="fab fa-instagram"></i></a>




                                    <!-- زر Delete بروابط مخصصة -->
                                    <form action="{{ route('Team.destroy', $team->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-square btn-danger mx-1"><i class="fas fa-trash"></i></button>
                                    </form>

                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>

@endsection

