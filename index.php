<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Sign up form</title>
  </head>
  <body class="">
    <div class="container">
      <h1 class="white-text text-center py-4">Create a new account</h1>
      
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="fname">First name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
  
                <div class="col-md-6 mb-3">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="fcolor">Favorite color</label>
                  <input type="color" class="form-control" id="fcolor" name="fcolor" value="" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Gender</label>
                        <div class="custom-control custom-checkbox">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" value="Female" id="Female" name="gender" onclick="validateGender()" required>
                              <label class="form-check-label checkbox-inline" for="Female">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" value="Male" id="Male" name="gender" onclick="validateGender()" required>
                                <label class="form-check-label checkbox-inline" for="Male">Male</label>
                            </div>
                        </div>
                </div>
                
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="department">Department</label>
                    <select class="custom-select" id="department" name="department" required>
                        <option selected disabled value="">Please select...</option>
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Stuff">Stuff</option>
                    </select>
                </div>
                
              <div class="col-md-6 mb-3">
                    <label for="passwd">Password</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" required>
              </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>

          </form>
          
          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();

          //validate gender
          function validateGender() {
            var checkFemale = document.getElementById("Female");
            var checkMale = document.getElementById("Male");
            if (checkFemale.checked == true){
              checkMale.checked = false;
              checkMale.disabled = true;  
            } else if (checkMale.checked == true) {
              checkFemale.checked = false;
              checkFemale.disabled = true;
            } else {
              checkMale.disabled = false;
              checkFemale.disabled = false;
            }
          }
          validateGender();
          </script>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    -->  
</body>
</html>