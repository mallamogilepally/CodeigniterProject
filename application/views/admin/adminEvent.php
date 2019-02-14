<?php include_once('headerLinks.php');?>
<?php include_once('adminNav.php');?>

<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table  table-striped " id= "mydata" style= "width:100%; height:auto">
                        <thead class="thead-dark" style="width:100%; height30%">
                            <tr >
                                <th scope="col">Id</th>
                                <th scope="col">title</th>
                                <th scope="col">Description </th>
                                <th scope="col">Location</th>
                                <th scope="col">EventTime</th>
                                <th scope="col">No. Registered</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="showdata" style="width:100%; height30%">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Event Model Start-->
<div class="container">
    <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New Event</button>  
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        <div class="row">
        <div class="col-md-12">
            <div class="form_main">
                <h4 class="heading"><strong>Add </strong> an Event </h4>
                <div class="addEventForm form-group">
                    <form action="AddEvent.php" method="post" id="addEventfrm" name="addEventfrm"> 
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" required="" value="" name="title" class="txt form-control">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" required="" value="" name="subtitle" class="txt form-control">
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp">
                                    </span>
                                </span>
                            </div>
                            <img id='img-upload'/>
                        </div>
                        <div class="form-group">
                            <label for="discription">Discription</label>
                            <textarea  name="disc" type="text" style="height:150px"class="txt_3 form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <div id="locationField">
                                <input type="text" id="autocomplete" placeholder="Enter the address" onFocus="geolocate()" value="" name="address" class="txt form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <table id="address" class="table table-responsive">
                                <tr>
                                    <td class="label">Street address</td>
                                    <td class="slimField"><input class="field txt form-control" id="street_number"
                                                                 disabled="true"/></td>
                                    <td class="wideField" colspan="2"><input class="field txt form-control" id="route"
                                                                             disabled="true"/></td>
                                </tr>
                                <tr>
                                    <td class="label">City</td>
                                    <td class="wideField" colspan="3"><input class="field txt form-control" id="locality"
                                                                             disabled="true"/></td>
                                </tr>
                                <tr>
                                    <td class="label">State</td>
                                    <td class="slimField"><input class="field txt form-control"
                                                                 id="administrative_area_level_1" disabled="true"/></td>
                                    <td class="label">Zip code</td>
                                    <td class="wideField"><input class="field txt form-control" id="postal_code"
                                                                 disabled="true"/></td>
                                </tr>
                                <tr>
                                    <td class="label">Country</td>
                                    <td class="wideField" colspan="3"><input class="field txt form-control"
                                                                             id="country" disabled="true"/></td>
                                </tr>
                            </table>

                        </div>  
                        <div class=" col-md-12 form-group" >
                            <input type="submit" value="submit" name="submit" class="txt2 btn btn-primary">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><!--End of the Add event model-->
<div class="container">

</div>


<script>
    $(document).ready(function(){
        showAllEvents();
       function showAllEvents(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('admin/adminEvents/showAllEvents')?>',
                async: true,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                            '<td scope="row" >'+data[i].id+'</td>'+
                            '<td>'+data[i].title+'</td>'+
                            '<td>'+data[i].event_desc+'</td>'+
                            '<td>'+data[i].location+'</td>'+
                            '<td>'+data[i].event_date+'</td>'+
                            '<td>'+data[i].num_registered+'</td>'+
                            '<td style="text-align:right;">'+
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-event_title="'+data[i].title+'" data-event_date="'+data[i].event_date+'">Edit</a>'+' '+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                            '</td>' +
                            '</tr>';
                    }
                    $('#showdata').html(html);


                }  
            });
        } 
    });
</script>
<?php include_once('footerLinks.php');?>


