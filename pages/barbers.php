<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Borbélyok </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes borbélyt</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div id="barbers"></div>

        <script>
            window.onload = function() {
                get_barbers('barbers');
            };
        </script>
    </body>
</html>