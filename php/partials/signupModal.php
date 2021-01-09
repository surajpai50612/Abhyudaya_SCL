<!-- Modal -->
<div class="modal fade my-5" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"  style="background-color:#152fd4;">
                <h5 class="modal-title" id="signupModalLabel"  style="color:white;font-weight:bold;">Signup for HigherGrad account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form style="font-weight:bold;" action="partials/_handleSignup.php" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" id="signupFname" name="signupFname" aria-describedby="emailHelp" placeholder="First Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="signupLname" name="signupLname" aria-describedby="emailHelp" placeholder="Last Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp" placeholder="Email *" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="signupPhno" name="signupPhno" aria-describedby="emailHelp" placeholder="Phone Number *" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="signuppassword" name="signuppassword" placeholder="Password *" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="signupcpassword" name="signupcpassword" placeholder="confirm Password *" required>
                        <small>Enter the same password as above</small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary b1" style="color:white;margin-right:40%;padding:10px 40px;">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>