
$(document).ready(function () {
    
    $('#kidsyes, #kidsno').click(function () {
            "use strict";
        if (this.id == 'kidsyes') {
            $("#kidSelectionDiv").removeClass("hidden");  
             
        }

        else if(this.id == 'kidsno') {
            $("#kidSelectionDiv").addClass("hidden");
            $("#enterAdultName").removeClass("hidden");
            
            var adults = parseInt( $('#numAdults').val());
            var wrapper = $('#enterAdultName');
            var adults = parseInt($('#numAdults').val());
            for(var i=1; i<adults; i++){
                $(wrapper).append('<div class="row append-element"><div class="col-sm-6 form-element"><label for="firstname">First Name</label><input type="text" class="form-control" name="firstname'+(i+1)+'" id="firstName"/></div><div class="col-sm-6 form-element"><label for="lastName">Last Name</label><input type="text" class="form-control" name="lastName'+(i+1)+'" id="lastName"></div></div>');
            }

            $("#buttonDiv").removeClass("hidden");

        }
    });
    $("#numKids").change(function(){
        var kids =  parseInt( $('#numKids').val());
        var adults = parseInt( $('#numAdults').val());
        var totalAdults = (adults-kids);
        console.log(totalAdults);
        console.log(kids);
        
        
        $("#enterAdultName").removeClass("hidden");
        var wrapper = $('#enterAdultName');
        var wrapperkids = $('#enterKidName');
            for(var i=1; i<totalAdults; i++){
                $(wrapper).append('<div class="row append-element"><div class="col-sm-6 form-element"><label for="firstname">First Name</label><input type="text" class="form-control" name="firstname'+(i+1)+'" id="firstName"/></div><div class="col-sm-6 form-element"><label for="lastName">Last Name</label><input type="text" class="form-control" name="lastName'+(i+1)+'" id="lastName"></div></div>');
            }
        
            $("#enterKidName").removeClass("hidden");    
              for(j=1; j<kids; j++){
            $(wrapperkids).append('<div class="row append-kid-element"><div class="col-sm-5 form-element"><label for="firstname">First Name</label> <input type="text" class="form-control" name="firstname'+(j+1)+'" id="firstName"/></div><div class="col-sm-5 form-element"><label for="lastName">Last Name</label><input type="text" class="form-control" name="lastName'+(j+1)+'" id="lastName"></div><div class="col-sm-2 form-element"><label for="kidage">Age</label><select type="text" class="form-control custom-select " name= "kidage'+(j+1)+'"id="kidage"><option selected>Choose...</option><option>2+</option><option>5+</option><option>7+</option><option>10+</option></select></div></div>');
        }
        
            $("#buttonDiv").removeClass("hidden");

    });


});