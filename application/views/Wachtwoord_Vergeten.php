<!-- Author: Gregory Malomgre -->
<div id="wrap">
    <div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<br>
		<div class="box box-center">
		    <h2>Wachtwoord vergeten?</h2>
                    <br>
		    <?= form_open(site_url($controller . '/')) ?>
		    <?php if (isset($message)) { ?>
    		    <!-- foutmeldingen: -->
    		    <div class="alert alert-danger"><?= $message ?></div>
    		    <!-- einde foutmelding. -->
		    <?php } ?>
		    <!-- 1ste veld (1): -->
		    <div class="form-group">
			<p><b>Voer uw e-mail adres in:</b></p>
			<?= form_input(array('name' => 'email', 'type' => 'email', 'class' => 'form-control', 'required' => 'required', 'maxlength' => $max_Length)) ?>
		    </div>

		    <!-- begin captcha -->
		    <?php if (TRUE) { ?>
    		    <div class="row" style="text-align: center">
    			<div class="col-sm-12">
    			    <div class="form-group">
				    <?= $captcha['image'] ?>
    				<br>
    				<input type="text" autocomplete="off" name="captcha" placeholder="Captcha validatie"/>
    			    </div>
    			</div>
    		    </div>
		    <?php } ?>
		    <!-- einde captcha -->

		    <div class="form-group">
			<?= form_submit(array('name' => 'actie', 'value' => 'Verander', 'class' => 'btn btn-success center-block')) ?>
		    </div>
		    <?= form_close() ?>
		    <br>
		    <p><a href="<?php echo base_url() . "login" ?>" role="button" class="btn btn-default"><b> &#60;-- Terug naar Login </b></a></p>
		</div>
		<br>
		<br>
		<br>
	    </div>
	</div>
    </div>
</div>