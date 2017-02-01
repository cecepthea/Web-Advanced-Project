<!-- 
Author = Wasla Habib		Reviewer = Glenn Martens

BRONNEN: 
https://www.youtube.com/watch?v=FmKm1gCgUoM
http://www.sourcecodester.com/php/7290/user-registration-and-login-system-codeigniter.html
https://www.youtube.com/watch?v=T39lkofTq2M 
https://ellislab.com/codeigniter/user-guide/helpers/form_helper.html 
!-->

<div id="wrap">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<br>
			<div class="box box-center">
   	    		<h2>Login</h2>
   	    		<br>
				<?php
				echo form_open('login/login_validatie');
				echo validation_errors('<div class="alert alert-danger">', '</div>');
				if (isset($message)){ ?><div class="alert alert-danger"><?= $message ?></div><?php }?>
       
       			<!-- BEGIN Email Veld: !-->
       			<div class="form-group">   
					<?php echo form_label('Email:', 'email'); ?>
   				   	<?php
    				$data = array(
    			       		  'name'        => 'email',
							  'type'		=> 'email',
    		       		      'class'       => 'form-control',
    		       			  'placeholder' => 'Email',
				    	      'required'    => 'required',
    		            	  'maxlength'   => '50',
    				);
					echo form_input($data);
					?>
   				</div> 	
       			<!-- EINDE Email Veld: !-->
        
        
				<!-- BEGIN Wachtwoord Veld: !-->
 	      		<div class="form-group">    
					<?php echo form_label('Wachtwoord:', 'wachtwoord'); ?>
  		  			<?php
   			 			$data = array(
    			    		      'name'        => 'wachtwoord',
    			    		      'class'       => 'form-control',
    	    				      'placeholder' => 'Wachtwoord',
								  'required'    => 'required',
    	    				      'maxlength'   => '40',
    				);
					echo form_password($data);
					?>
				</div>
       			<!-- EINDE Wachtwoord Veld: !-->

       			<div class="row" style="text-align: center">
					<div class="col-sm-12">
						<div class="form-group">
							<?php echo $cap['image']; ?>
							<br>
								<input type="text" autocomplete="off" name="captcha" placeholder="Enter above text"/>
						</div>
					</div>
				</div>

				<!-- BEGIN Button Veld: !-->
				<div class="form-group">
					<?php
					$options = array(
						'class' => 'btn btn-success center-block',
					);
					echo form_submit('mysubmit', 'Log in', $options);
					?>
				</div>
				<!-- EINDE Button Veld: !-->
				
				<br>
				<p><a href="<?php echo base_url().'registreer'?>" role="button" class="btn btn-default"><b>Heb je nog geen account? Registreer hier!</b></a></p>
				<p><a href="<?php echo base_url().'WachtwoordVergeten'?>" role="button" class="btn btn-default"><b>Ben je je wachtwoord vergeten? Klik dan hier</b></a></p>
				<?php echo form_close(); ?>
       		</div>
            <br><br><br>
		</div>
	</div>
</div>