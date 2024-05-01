<!DOCTYPE html>
<html>
    <body>
        <div data-aos="zoom-in">
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Szolgáltatások </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes szolgáltatást árakkal együtt</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class="container">
            <div id="services" class="card-deck mb-3 text-center">
        </div>
        <script>
            window.onload = function() {
                get_services('services');
            };
        </script>
    </body>
</html>