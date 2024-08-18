<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <!--/////////////////////////////////////////////////////////////////////////////-->
   
    <!--/////////////////////////////////////////////////////////////////////////////-->

    

    <!--/////////////////////////////////////////////////////////////////////////////-->
    

    

    <!--/////////////////////////////////////////////////////////////////////////////-->

    <!--/////////////////////////////////////////////////////////////////////////////-->

    
<!DOCTYPE html>
<html lang="en">

@extends('WebSite.layouts.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        


        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            </div>
        </div>

        <!-- Navbar & Hero End -->


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

                                                    <a href="#" class="btn btn-info mx-1" style="margin-top: 2%" onclick="openModalAdd()" >
                                                        <i class="fas fa-comment"></i>
                                                        Comment
                                                    </a>

                                                </div>
                                                
                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
                                                

                                                <div id="modalBackdrop" class="modal-backdrop"></div>

                                                <div id="modalAdd" class="modal">
                                                    <div class="modal-content" style="width: 49%">
                                                        <span class="close" style="margin-right: 95%" onclick="closeModalAdd()">&times;</span>
                                                        
                                                        <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                                            <h5 class="d-flex justify-content-between border-bottom pb-2">

                                                                <span>{{$menu->title}}</span>
                                                                
                                                            </h5>
                                                        </div>

                                                        <form action="{{route('Comment.store')}}"  method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            
                                                            <div class="input-group" style="width: 99%; margin-top: 1%; margin-left: 0.5%">
                                                                <input class="input--style-2" type="text" placeholder="Comment"  name="comment" style="width: 100%;">
                                                            </div>

                                                            <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                                            
                                                            <div class="p-t-30" style="margin-right: 1%; margin-top: 2%; margin-bottom: 2%">
                                                                <button class="btn btn-info mx-1" type="submit" style="width: 100%" >Send</button>
                                                                
                                                            </div>
                                                        </form>
                                                        
                                                        <a href="#" class="btn btn-info mx-1" onclick="closeModalAdd()" style="width: 99%;" >
                                                            Close
                                                        </a>

                                                    </div>
                                                </div>

                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
                                            </div>
                                        </div>

                                    @endif
                                    
                                @endforeach
                                
                            </div>
                            
                        </div>

                        <!-------tab-2-------------------------------------------------------------------------->

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

                                                    <a href="#" class="btn btn-info mx-1" style="margin-top: 2%" onclick="openModalAdd()" >
                                                        <i class="fas fa-comment"></i>
                                                        Comment
                                                    </a>
                                                </div>
                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
                                                

                                                <div id="modalBackdrop" class="modal-backdrop"></div>

                                                <div id="modalAdd" class="modal">
                                                    <div class="modal-content" style="width: 49%">
                                                        <span class="close" style="margin-right: 95%" onclick="closeModalAdd()">&times;</span>
                                                        
                                                        <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                                            <h5 class="d-flex justify-content-between border-bottom pb-2">

                                                                <span>{{$menu->title}}</span>
                                                                
                                                            </h5>
                                                        </div>

                                                        <form action="{{route('Comment.store')}}"  method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            
                                                            <div class="input-group" style="width: 99%; margin-top: 1%; margin-left: 0.5%">
                                                                <input class="input--style-2" type="text" placeholder="Comment"  name="comment" style="width: 100%;">
                                                            </div>

                                                            <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                                            
                                                            <div class="p-t-30" style="margin-right: 1%; margin-top: 2%; margin-bottom: 2%">
                                                                <button class="btn btn-info mx-1" type="submit" style="width: 100%" >Send</button>
                                                                
                                                            </div>
                                                        </form>
                                                        
                                                        <a href="#" class="btn btn-info mx-1" onclick="closeModalAdd()" style="width: 99%;" >
                                                            Close
                                                        </a>

                                                    </div>
                                                </div>

                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
                                            </div>
                                        </div>

                                    @endif
                                    
                                @endforeach

                            </div>
                        </div>

                        <!-------tab-2-------------------------------------------------------------------------->

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

                                                    <a href="#" class="btn btn-info mx-1" style="margin-top: 2%" onclick="openModalAdd()" >
                                                        <i class="fas fa-comment"></i>
                                                        Comment
                                                    </a>

                                                </div>
                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
                                                

                                                <div id="modalBackdrop" class="modal-backdrop"></div>

                                                <div id="modalAdd" class="modal">
                                                    <div class="modal-content" style="width: 49%">
                                                        <span class="close" style="margin-right: 95%" onclick="closeModalAdd()">&times;</span>
                                                        
                                                        <img class="flex-shrink-0 img-fluid rounded" src="storage/{{$menu->image}}" alt="" style="width: 80px;">
                                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                                            <h5 class="d-flex justify-content-between border-bottom pb-2">

                                                                <span>{{$menu->title}}</span>
                                                                
                                                            </h5>
                                                        </div>

                                                        <form action="{{route('Comment.store')}}"  method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            
                                                            <div class="input-group" style="width: 99%; margin-top: 1%; margin-left: 0.5%">
                                                                <input class="input--style-2" type="text" placeholder="Comment"  name="comment" style="width: 100%;">
                                                            </div>

                                                            <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                                            
                                                            <div class="p-t-30" style="margin-right: 1%; margin-top: 2%; margin-bottom: 2%">
                                                                <button class="btn btn-info mx-1" type="submit" style="width: 100%" >Send</button>
                                                                
                                                            </div>
                                                        </form>
                                                        
                                                        <a href="#" class="btn btn-info mx-1" onclick="closeModalAdd()" style="width: 99%;" >
                                                            Close
                                                        </a>

                                                    </div>
                                                </div>

                                                <!--/////////////////////////////////////////////////////////////////////////////-->

                                                <!--/////////////////////////////////////////////////////////////////////////////-->
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
        

        <!-- Footer Start -->
        @include('WebSite.layouts.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <!-- Template Javascript -->
    @extends('WebSite.layouts.JavaScript')
</body>

</html>

</x-app-layout>