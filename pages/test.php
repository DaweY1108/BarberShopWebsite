<!DOCTYPE html>
<html>
 
<head>
    <title>DateTimepicker</title>
 
    <!-- Include Bootstrap CDN -->
    <link href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        rel="stylesheet">
 <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
 
<body>
 
    <!-- Include datetime input to display 
        datetimepicker in container with 
        relative position -->
    <div class="container" style="margin:100px">
        <div style="position: relative">
 
            <!-- Include input field with id so 
                that we can use it in JavaScript 
                to set attributes.-->
            <input class="form-control"
                type="text" id="datetime" />
        </div>
    </div>
 
    <script>
 
        // Below code sets format to the 
        // datetimepicker having id as 
        // datetime
        $('#datetime').datetimepicker({
            format: 'yyyy-MM-dd hh:mm',
            stepping: 30,
        }).on('dp.change', function(e) {
            var dayOfWeek = e.date.day();
            var enabledHours;

            // Check for initialization and log the returned value
            var dateTimePicker = $('#datetime').data("DateTimePicker");
            console.log("DateTimePicker object:", dateTimePicker);

            if (dateTimePicker) {
                if (dayOfWeek === 6 || dayOfWeek === 0) {
                    enabledHours = [10, 11, 12, 13, 14, 15, 16];
                } else {
                    enabledHours = [9, 10, 11, 12, 13, 14, 15, 16, 17];
                }
                dateTimePicker.enabledHours(enabledHours);
            } else {
                console.error("DateTimePicker not initialized!"); // Log error if not initialized
            }
        });
    </script>
</body>
 
</html>