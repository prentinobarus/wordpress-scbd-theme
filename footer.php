    <!-- Footer -->
    <div class="container-fluid footer-section">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <p class="text-center text-lg-start">Social Computing & Big Data Laboratory 2022 - Telkom University</p>
            </div>

            <div class="col-lg-3 social-icon text-center">
                <a type="button" class="btn mail-icon" data-bs-toggle="popover" title="Email Address" data-bs-placement="top" data-bs-content="scbdlab@gmail.com">
                    <i class="bi bi-envelope"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/labscbdtelu/" class="btn ig-icon"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="https://github.com/scbd-laboratory" class="btn git-icon"><i class="bi bi-github"></i></a>
                <a target="_blank" href="https://www.facebook.com/labscbdtelkom" class="btn fb-icon"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/labscbdtelkom" class="btn linkedin-icon"><i class="bi bi-linkedin"></i></a>
                <a target="_blank" href="#" class="btn twitter-icon"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </div>
    <!-- Akhir Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

    <?php wp_footer(); ?>
</body>
</html>