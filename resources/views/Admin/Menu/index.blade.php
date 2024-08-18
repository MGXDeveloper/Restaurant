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

    .modal.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(-50%) scale(1);
    }
</style>

@endsection

@section('js')

<script>
    function openModalAdd() {
        document.getElementById('modalBackdrop').style.display = 'block';
        document.getElementById('modalAdd').style.display = 'block';
        setTimeout(function () {
            document.getElementById('modalBackdrop').classList.add('show');
            document.getElementById('modalAdd').classList.add('show');
        }, 10); // تأخير بسيط للانتقال السلس بين الحالات في الانميشن
    }

    function closeModalAdd() {
        document.getElementById('modalBackdrop').classList.remove('show');
        document.getElementById('modalAdd').classList.remove('show');
        setTimeout(function () {
            document.getElementById('modalBackdrop').style.display = 'none';
            document.getElementById('modalAdd').style.display = 'none';
        }, 300); // تأخير للانتقال السلس بين الحالات في الانميشن
    }



    function openModalEdit() {
        document.getElementById('modalBackdrop').style.display = 'block';
        document.getElementById('modalEdit').style.display = 'block';
        setTimeout(function () {
            document.getElementById('modalBackdrop').classList.add('show');
            document.getElementById('modalEdit').classList.add('show');
        }, 10); // تأخير بسيط للانتقال السلس بين الحالات في الانميشن
    }

    function closeModalEdit() {
        document.getElementById('modalBackdrop').classList.remove('show');
        document.getElementById('modalEdit').classList.remove('show');
        setTimeout(function () {
            document.getElementById('modalBackdrop').style.display = 'none';
            document.getElementById('modalEdit').style.display = 'none';
        }, 300); // تأخير للانتقال السلس بين الحالات في الانميشن
    }


</script>
    
@endsection


@extends('Admin.layouts.sidebar_nav_js')


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

@section('button')

    <button class="btn btn-primary" onclick="openModalAdd()" >Add To Menu</button>

    <div class="modal-backdrop" id="modalBackdrop"></div>
    <div class="modal" id="modalAdd">
        <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">
            
                <div class="card card-2">
                    <div class="card-heading"></div>
                    <div class="card-body">
                        <h2 class="title">Add to Menu</h2>
                        <form  method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Title" name="title">
                            </div>

                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Description" name="description">
                            </div>
                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="text" placeholder="Type" name="type">
                            </div>
                            <div class="input-group" style="width: 30%">
                                <input class="input--style-2" type="number" placeholder="Cost" name="cost" style="margin-right: 51%">
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

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-------------------tab-1---------------------------------------------------------------->

                        <div id="tab-1" class="tab-pane fade show p-0 active">

                            <div class="row g-4">

                                @foreach ($menus as $menu)

                                    @if($menu->type=="Breakfast")

                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span>{{$menu->title}}</span>
                                                        <span class="text-primary">${{$menu->cost}}</span>
                                                    </h5>
                                                    <small class="fst-italic">{{$menu->description}}</small>
                                                    

                                                    <!--//////////////////////////////////////////////////////////////////////////////-->
                                                        <!-- زر Edit بروابط مخصصة -->
                                                    <!-- أزرار التحرير والحذف -->
                                                    <div class="d-flex mt-2">
                                                        <!-- زر Edit -->
                                                        <a href="#" class="btn btn-info mx-1" onclick="openModalEdit()" >
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        
                                                        <div class="modal-backdrop" id="modalBackdrop"></div>
                                                        <div class="modal" id="modalEdit">
                                                            <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">
                                                                
                                                                    <div class="card card-2">
                                                                        <div class="card-heading"></div>
                                                                        <div class="card-body">
                                                                            <h2 class="title" style="margin-right: 95%" >Edit</h2>
                                                                            <form action="{{route('Menu.update', $menu->id)}}"  method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Title"  name="title" value="{{$menu->title}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Description" name="description" value="{{$menu->description}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Type" name="type" value="{{$menu->type}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="number" placeholder="Cost" name="cost" value="{{$menu->cost}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="file"  name="Image" value="{{asset("storage/$menu->image")}}" >
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








                                                        <!-- زر Delete -->
                                                        <form action="{{ route('Menu.destroy', $menu->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger mx-1">
                                                                <i class="fas fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                @endforeach
                                
                                
                            </div>
                            
                        </div>

                        <!-------------------tab-2---------------------------------------------------------------->

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                
                                @foreach ($menus as $menu)

                                    @if($menu->type=="Launch")

                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span>{{$menu->title}}</span>
                                                        <span class="text-primary">${{$menu->cost}}</span>
                                                    </h5>
                                                    <small class="fst-italic">{{$menu->description}}</small>
                                                    

                                                    <!--//////////////////////////////////////////////////////////////////////////////-->
                                                        <!-- زر Edit بروابط مخصصة -->
                                                    <!-- أزرار التحرير والحذف -->
                                                    <div class="d-flex mt-2">
                                                        <!-- زر Edit -->
                                                        <a href="#" class="btn btn-info mx-1" onclick="openModalEdit()" >
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        
                                                        <div class="modal-backdrop" id="modalBackdrop"></div>
                                                        <div class="modal" id="modalEdit">
                                                            <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">
                                                                
                                                                    <div class="card card-2">
                                                                        <div class="card-heading"></div>
                                                                        <div class="card-body">
                                                                            <h2 class="title" style="margin-right: 95%" >Edit</h2>
                                                                            <form action="{{route('Menu.update', $menu->id)}}"  method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Title"  name="title" value="{{$menu->title}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Description" name="description" value="{{$menu->description}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Type" name="type" value="{{$menu->type}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="number" placeholder="Cost" name="cost" value="{{$menu->cost}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="file"  name="Image" value="{{asset("storage/$menu->image")}}" >
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








                                                        <!-- زر Delete -->
                                                        <form action="{{ route('Menu.destroy', $menu->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger mx-1">
                                                                <i class="fas fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                @endforeach
                                
                            </div>
                        </div>

                        <!-------------------tab-3---------------------------------------------------------------->

                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                
                                @foreach ($menus as $menu)

                                    @if($menu->type=="Dinner")
                                        
                                    
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span>{{$menu->title}}</span>
                                                        <span class="text-primary">${{$menu->cost}}</span>
                                                    </h5>
                                                    <small class="fst-italic">{{$menu->description}}</small>
                                                    

                                                    <!--//////////////////////////////////////////////////////////////////////////////-->
                                                        <!-- زر Edit بروابط مخصصة -->
                                                    <!-- أزرار التحرير والحذف -->
                                                    <div class="d-flex mt-2">
                                                        <!-- زر Edit -->
                                                        <a href="#" class="btn btn-info mx-1" onclick="openModalEdit()" >
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        
                                                        <div class="modal-backdrop" id="modalBackdrop"></div>
                                                        <div class="modal" id="modalEdit">
                                                            <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo">
                                                                
                                                                    <div class="card card-2">
                                                                        <div class="card-heading"></div>
                                                                        <div class="card-body">
                                                                            <h2 class="title" style="margin-right: 95%" >Edit</h2>
                                                                            <form action="{{route('Menu.update', $menu->id)}}"  method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Title"  name="title" value="{{$menu->title}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Description" name="description" value="{{$menu->description}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="text" placeholder="Type" name="type" value="{{$menu->type}}">
                                                                                </div>
                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="number" placeholder="Cost" name="cost" value="{{$menu->cost}}">
                                                                                </div>

                                                                                <div class="input-group" style="width: 30%">
                                                                                    <input class="input--style-2" type="file"  name="Image" value="{{asset("storage/$menu->image")}}" >
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








                                                        <!-- زر Delete -->
                                                        <form action="{{ route('Menu.destroy', $menu->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger mx-1">
                                                                <i class="fas fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    @endif    
                                @endforeach
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
@endsection

