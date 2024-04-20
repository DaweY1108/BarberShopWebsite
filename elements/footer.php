<?php
    $footerText = "© ".Date('Y')." - ".$title;
?>

<!DOCTYPE html>
<html style="position: relative; min-height: 100%;">
    <div style="margin-top: 20px">
    <body style="padding-bottom: 10%;">
        <div style="position: absolute; bottom: 0; width: 100%;">
            <div style="margin: 0;">
                <?= $bottomDivider; ?>
            </div>
            <footer class="footer-background" style="width: 100%; height: 60px;">
                <div class="text-light py-3 text-center">
                    <?= $footerText; ?>  
                </div>
            </footer>
        </div>
    </body>
</html>