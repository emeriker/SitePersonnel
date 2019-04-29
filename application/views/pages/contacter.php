<?php echo form_open('contacter'); ?>

</br></br></br></br>
<div class="container" style="text-align: center;">
	<h1>Contact Me</h1>
	</br>
	<div class="">
		<input class="text-input-contacter name-email" type="text" name="name" value=""
			size="50" placeholder="Name" />
		<?php echo form_error('name'); ?>
		<input class="text-input-contacter name-email" type="text" name="email" value=""
			size="50" placeholder="Email" />
		<?php echo form_error('email'); ?>
		</br> </br>
		<textarea class="text-input-contacter message" type="text" name="message"
			value="" placeholder="Message"></textarea>
		<?php echo form_error('message'); ?>
		</br>
		<p>
			<?php echo $success;?>
		</p>
		</br> 
		<div style="position: relative;"><input  class="btn btn-primary" type="submit" value="Send" /></div>


		</form>
	</div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

