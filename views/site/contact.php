<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>

                <div class="col-sm-4 col-sm-offset-2 padding-right">

                    <?php if ($result): ?>
                        <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Обратная связь</h2>
                            <h5>Есть вопрос? Напишите нам</h5>
                            <br/>
                            <form action="#" method="post" id="contact-form">
                                <p>Ваша почта</p>
                                <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                                <p>Сообщение</p>
                                <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                                <br/>
                                <input type="submit" name="submit" class="btn btn-primary" value="Отправить" />
                            </form>
                        </div><!--/sign up form-->
                    <?php endif; ?>


                    <br/>
                    <br/>
                </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>