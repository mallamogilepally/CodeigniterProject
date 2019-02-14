
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

    


</head>
<body>

          
               <div class="form-group">
                  <label class="control-label">Appointment Time</label>
                  <div class='input-group date datepicker' id='datetimepicker1'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
        
        

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
  $(function () {
    $('#datetimepicker1').datetimepicker({
   format: 'DD/MM/YYYY HH:mm a'
});
 });
</script>
</html>