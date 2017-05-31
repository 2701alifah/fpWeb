<?php
echo validation_errors();
?>
<form action="<?php echo site_url('createMessage')?>" method="POST">
<?php echo form_open_multipart('MyController/createMessage'); ?>
<div class="contact-info jarallax">
        <div class="contact-info-grids">
            <div class="container">
                <div class="agileits-heading team-heading">
                    <h3>Leave a Message</h3>
                </div>
                <div class="contact-form">
                    <?php echo form_open('MyController/createMessage'); ?> 
                        <input type="text" placeholder="Name" name="name" required=""><br/>
                        <input type="email" placeholder="Email" name="email" required=""><br/>
                        <input type="text" placeholder="Telephone" name="telephone" required=""><br/>
                        <input type="text" placeholder="Pesan" name="pesan" required="" style="height: 50px;"><br/>
                        <div>
                        <input type="submit" value="SUBMIT">

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php echo $_SESSION['username'];
?>
<?php echo form_close(); ?>