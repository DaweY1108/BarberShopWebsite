<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
</head>
<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 35rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-header">
                            <h2 class="text-center">Foglalj időpontot</h2>
                        </div>
                        <div class="card-body"> 
                            <form action="process_booking.php" method="POST">
                                <div class="form-group">
                                    <label for="barber">Válassz egy borbélyt:</label>
                                    <select name="barber" id="barber" class="form-control">
                                        <option value="barber1">Barber 1</option>
                                        <option value="barber2">Barber 2</option>
                                        <option value="barber3">Barber 3</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="date">Válassz egy dátumot:</label>
                                    <input type="datetime-local" name="date" id="date" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Név:</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Telefonszám:</label>
                                    <input type="tel" name="phone" id="phone" class="form-control">
                                </div>   
                                <input type="submit" value="Foglalok" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
