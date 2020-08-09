<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Sign up form | Wajepa week 3 task</title>
  </head>
  <body class="">
    <div class="container">
      <h1 class="white-text text-center py-4">Create a new account</h1>
      
        <form class="needs-validation" novalidate action="dashboard.php" method="POST" 
        onsubmit="return CheckPassword()">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="fname">Firstname</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
                <div class="invalid-feedback">Please enter a valid name</div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="lname">Lastname</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
                <div class="invalid-feedback">Please enter a valid name</div>
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                  <div class="invalid-feedback">Please enter a valid email</div>
                </div>
  
                <div class="col-md-6 mb-3">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" required>
                  <div class="invalid-feedback">Please enter a valid date</div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="fcolor">Favorite color</label>
                  <input type="color" class="form-control" id="fcolor" name="fcolor" required>
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
                        <div class="invalid-feedback">Please checked your gender</div>
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
                    <div class="invalid-feedback">Please select your department</div>
                </div>
                
              <div class="col-md-6 mb-3">
                    <label for="passwd">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                  <div class="invalid-feedback" id="hint"><strong>Create a password that contains at least:</strong></div>
                  <div class="invalid-feedback" id="chk_length"><b>X </b> 15 characters</div>
                  <div class="invalid-feedback" id="chk_capital"><b>X </b> upper case letters (A-Z)</div>
                  <div class="invalid-feedback" id="chk_small"><b>X </b> lower case letters (a-z)</div>
                  <div class="invalid-feedback" id="chk_number"><b>X </b> numbers (0-9)</div>
                  <div class="invalid-feedback" id="chk_symbol"><b>X </b> symbols such as '? $ ? % ^ & * etc'</div>
              
              </div>
            </div>
            
            <button class="btn btn-primary text-center mb-4" type="submit" name="save" onclick="CheckPassword()" id="btn_create">Sign up</button>

          </form>
    </div>
    <script src="script.js"></script>
</body>
</html>