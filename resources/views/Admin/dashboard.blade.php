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



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .admin-logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #f39c12;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .admin-greeting {
            margin-top: 20px;
            font-size: 28px;
            color: #333;
            text-align: center;
        }

        .admin-button {
            margin-top: 30px;
            padding: 12px 24px;
            border: none;
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .admin-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <div class="admin-logo">R</div>
        <div class="admin-greeting">
            <p>Welcome, Restaurant Admin!</p>
            <p>Manage your restaurant with ease.</p>
        </div>
        
    </div>
</body>

</html>

        
@endsection

