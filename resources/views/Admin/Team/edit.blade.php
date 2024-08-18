@extends('Admin.layouts.head')
@extends('Admin.layouts.sidebar_nav_js')


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .title {
        margin-right: 95%;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input--style-2 {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .image-preview {
        max-width: 200px;
        margin-top: 10px;
    }

    .btn {
        padding: 10px 20px;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>

@section('content')





    <div class="container">
        <h2 class="title">Edit</h2>
        <form action="{{ route('Team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <div class="input-group">
                <label for="name">Name:</label>
                <input class="input--style-2" type="text" id="name" name="name" value="{{ $team->name }}">
            </div>

            <div class="input-group">
                <label for="facebook">Facebook:</label>
                <input class="input--style-2" type="text" id="facebook" name="facebook" value="{{ $team->facebook }}">
            </div>
            <div class="input-group">
                <label for="instagram">Instagram:</label>
                <input class="input--style-2" type="text" id="instagram" name="instagram" value="{{ $team->instagram }}">
            </div>
            <div class="input-group">
                <label for="twitter">Twitter:</label>
                <input class="input--style-2" type="text" id="twitter" name="twitter" value="{{ $team->twitter }}">
            </div>

            <div class="input-group">
                <label for="image">Image:</label>
                <input class="input--style-2" type="file" id="image" name="Image">
            </div>

            <!-- Display the current image if available -->
            @if($team->image)
            <div class="image-preview">
                <img src="{{ asset("storage/$team->image") }}" alt="Current Image" style="max-width: 100%;">
            </div>
            @endif
            
            <div class="p-t-30">
                <button class="btn btn--radius btn--green" type="submit">Update</button>
            </div>
        </form>
    </div>




@endsection