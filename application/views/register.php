<?php include_once('header.php');?>
<?php include_once('navbar.php');?>

<!DOCTYPE html>
<html>
 
    <div class="form">
        <div class="container"> <h2>Registration Form for $ festival</h2></div>
        <div class="input-form">

            <form >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 form-element">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstName"/>
                        </div>
                        <div class="col-sm-6 form-element">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-element">
                            <label for="userEmail">Email</label>
                            <input type="text" class="form-control" name="firstname" id="userEmail"/>
                        </div>
                        <div class="col-sm-6 form-element">
                            <label for="userPhone">Phone</label>
                            <input type="text" class="form-control" name="lastName" id="userPhone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-element">
                            <label for="people">Number of People attending (incl you)</label>
                            <select type="text" class="form-control custom-select" id="numAdults">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-element">
                        <label class="row">Any kids coming with you</label>
                        <div class="row">
                            <!-- checked box -->
                            <div class="col-sm-2 custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="kidsyes" name="kidsRadio" >
                                <label class="custom-control-label" for="kidsyes">Yes</label>
                            </div>
                            <!-- checke box -->
                            <div class="col-sm-2 custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="kidsno" name="kidsRadio">
                                <label class="custom-control-label" for="kidsno">No</label>
                            </div>

                        </div>
                    </div>
                    <div class="row hidden" id="kidSelectionDiv">
                        <div class="col-sm-6 form-element">
                            <label for="people">Number of Kids</label>
                            <select type="text" class="form-control custom-select" id="numKids">
                                <option value="0">0</option> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="hidden" id="enterAdultName">
                        <label for="enterAdultName"  class="row">Please provide others details</label>

                        <div class=" row append-element">
                            <div class="col-sm-6 form-element">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname1" id="firstName"/>
                            </div>
                            <div class="col-sm-6 form-element">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastName1" id="lastName">
                            </div>
                        </div>
                    </div>

                    <div class="pt-10 pb-10 hidden" id="enterKidName">
                        <label for="firstname" class="row">Please Provide Kids Details</label>
                        <div class=" row append-kid-element">
                            <div class="col-sm-5 form-element"> 
                                <label for="firstname">First Name</label> 
                                <input type="text" class="form-control" name="firstname1" id="firstName"/>
                            </div>
                            <div class="col-sm-5 form-element">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastName1" id="lastName">
                            </div>
                            <div class="col-sm-2 form-element">
                                <label for="kidage">Age</label>
                                <select type="text" class="form-control custom-select " id="kidage1">
                                    <option selected>Choose...</option>
                                    <option>2+</option>
                                    <option>5+</option>
                                    <option>7+</option>
                                    <option>10+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4 hidden" id="buttonDiv">
                        <button type="button" class="btn btn-success" id="singup" name="signup">Sing  up</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</html>
<?php include_once('footer.php');?>

