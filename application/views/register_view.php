<div class='formwrapper'>
	
	<h1 id='newsheading'>
		Register here! <br />
	</h1>
	
	<?=form_open('register/insert/')?>
	    <?=form_fieldset('Register Form')?>
	
	        <div class="textfield">
	            <?=form_label('username', 'user_name')?>
	            <?=form_input('user_name')?>
	        </div>
	        
	        <div class="textfield">
	            <?=form_label('e-mail', 'user_mail')?>
	            <?=form_input('user_mail')?>
	        </div>
	
	        <div class="textfield">
	            <?=form_label('password', 'user_pass')?>
	            <?=form_password('user_pass')?>
	        </div>
	        
	        <div class="textfield">
	            <?=form_label('repeat password', 'user_pass_2')?>
	            <?=form_password('user_pass_2')?>
	        </div>
	
	        <div class="buttons">
	            <?=form_submit('create', 'Create Account')?>
	        </div>
	
		 <?=form_fieldset_close()?>
	<?=form_close();?>
		
</div>