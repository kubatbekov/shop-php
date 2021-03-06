<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
         <div class="col-sm-4 col-sm-offset-2 padding-right">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li class="error"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Вход на сайт</h2>
                        <form action="#" method="post" id="login-form">
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                            <input type="submit" name="submit" class="btn btn-primary" value="Вход" />
                        </form>
                    </div><!--/sign up form-->


                    <br/>
                    <br/>
                </div>

    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>