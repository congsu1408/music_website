<?php require page('includes/header')?>

<!--	<div class="m-2">Contact us here on this number</div>-->
<!--create a contact form here-->
<link rel="stylesheet" href="<?=ROOT?>/assets/css/main.css">
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <form action="<?=ROOT?>/contact" method="post" class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>US</span>
                        </div>
                        <div class="app-contact">CONTACT INFO : +84 962897842</div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="NAME" name="name" value="<?=set_value('name')?>">
                                <?php if(!empty($errors['name'])):?>
                                    <small class="error"><?=$errors['name']?></small>
                                <?php endif;?>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="EMAIL" name="email" value="<?=set_value('email')?>">
                                <?php if(!empty($errors['email'])):?>
                                    <small class="error"><?=$errors['email']?></small>
                                <?php endif;?>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="PHONE" name="phone" value="<?=set_value('phone')?>">
                                <?php if(!empty($errors['phone'])):?>
                                    <small class="error"><?=$errors['phone']?></small>
                                <?php endif;?>
                            </div>
                            <div class="app-form-group message">
                                <input class="app-form-control" placeholder="MESSAGE" name="message" value="<?=set_value('message')?>">
                                <?php if(!empty($errors['message'])):?>
                                    <small class="error"><?=$errors['message']?></small>
                                <?php endif;?>
                            </div>
                            <div class="app-form-group buttons">
                                <button class="app-form-button">CANCEL</button>
                                <button class="app-form-button">SEND</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<?php require page('includes/footer')?>