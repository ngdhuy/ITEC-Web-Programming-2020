<div class="jumbotron">
    <h1 class="display-4">Please Register or Login</h1>
    <div class="row">
        <div class="col-6">
            <form class="form-horizontal" action="./index.php?a=3" method="POST">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Login</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtUS">Username</label>
                        <div class="col-md-8">
                            <input id="txtUS" name="txtUS" type="text" placeholder="Input username"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtPW">Password</label>
                        <div class="col-md-8">
                            <input id="txtPW" name="txtPW" type="password" placeholder="Input password"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="btnLogin"></label>
                        <div class="col-md-4">
                            <button id="btnLogin" name="btnLogin" class="btn btn-primary form-control input-lg">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="col-6">
            <form class="form-horizontal" action="index.php?a=5" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Login</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtUS">Username</label>
                        <div class="col-md-8">
                            <input id="txtUS" name="txtUS" type="text" placeholder="Input username"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtPW">Password</label>
                        <div class="col-md-8">
                            <input id="txtPW" name="txtPW" type="password" placeholder="Input password"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtConPW">Confirm password</label>
                        <div class="col-md-8">
                            <input id="txtConPW" name="txtConPW" type="password" placeholder="input confirm password"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtEmail">Email</label>
                        <div class="col-md-8">
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="Input email"
                                class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="btnRegister"></label>
                        <div class="col-md-4">
                            <button id="btnRegister" name="btnRegister" class="btn btn-primary form-control input-lg">Register</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>