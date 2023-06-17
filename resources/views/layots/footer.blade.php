<footer class="footer">
    <div class="footer-text">
        <p>&copy; {{ date('Y') }} Besjan Bardhollari | CTO and Co-Founder of Laratech</p>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



{{-- togle navbar --}}
<script>
    let menuIcon = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menuIcon.onclick = () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
        navbar.style.transition = 'left 0.25s ease';
        if (navbar.classList.contains('active')) {
            navbar.style.left = '0';
        } else {
            navbar.style.left = '-100%';
        }
    }

   
</script>

</body>

</html
