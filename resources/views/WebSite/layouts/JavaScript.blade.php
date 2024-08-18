<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/WebSite/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assets/WebSite/lib/tempusdominus/js/tempusdominus-bootstrap-4.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/WebSite/js/main.js')}}"></script>

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