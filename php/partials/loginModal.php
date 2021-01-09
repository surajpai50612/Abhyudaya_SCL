<!-- Modal -->
<div class="modal fade my-5" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#152fd4;">
                <h5 class="modal-title" id="loginModalLabel" style="color:white;font-weight:bold;">Login to HigherGrad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/_handleLogin.php" method="post">
                <div class="modal-body" style="font-weight:bold;">
                    <div class="form-group">
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="Email *" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="Password *" required>
                    </div>
                    <div style="font-weight:normal;">
                    <a href="" class="mx-4" data-toggle="modal" data-target="#signupModal">Don't have an account, SignUp ?</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary b1" style="color:white;margin-right:40%;padding:10px 40px;">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>