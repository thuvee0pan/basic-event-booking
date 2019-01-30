<?php 
require('./components/nav_bar.php')
?>
  <main class = "container p-5">
  <div class="row mt-5 p-5">
                <div class="col-6 p-3 bg-dark text-light">
                <h1  class="display-4 font-weight-bold" >Register </h1>
                 <form method = "post">
                <div class="form-group">
                    <label for="InputEmail">Email address</label>
                            <input   name = "email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email"/>
                </div>
                <div class="form-group">
                    <label for="InputName">Name</label>
                    <input name="name"  type="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter your name"/>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input name="pass" type="password" class="form-control" id="InputPassword" placeholder="Password"/>
                </div>
              
                <button type="submit" class="btn btn-light w-25">Sign up</button>
                </form>
                </div>

                <div class="col-6  p-3">
                <h1 class="display-4 text-center font-weight-bold">Sign In</h1>
                 <form method = "post">
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input   name ="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email"/>
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Password</label>
                    <input  name = "pass" type="password" class="form-control" id="InputPassword1" placeholder="Password"/>
                </div>
               
                <button type="submit" class="btn btn-primary w-25">Sign in</button>`
                </form>
                </div>
                </div>
  </main>
    <?php 
require('./components/footer.php')
?>