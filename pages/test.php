
 
<div class="container" style="margin:100px">
        <div class="input-group date"> 
            <input class="form-control" 
                   type="text" id="datepicker" /> 
            <span class="input-group-addon"> 
                <i class="glyphicon glyphicon-calendar"></i> 
            </span> 
        </div> 
    </div>
 
<script>
   $(function () {
        moment.locale('hu');
        $('#datepicker').datetimepicker({
            format: "Y-m-d h:m",
            step: 30,
            locale: 'hu',
        });
    });
</script>