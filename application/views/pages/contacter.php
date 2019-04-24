<?php echo form_open('contacter'); ?>

</br>
<div class="container" style="text-align: center;">
	<h1>Contact Me</h1>
	</br>
	<div class="">
		<input class="text-input-contacter" type="text" name="name" value=""
			size="50" placeholder="Name" />
		<?php echo form_error('name'); ?>
		<input class="text-input-contacter" type="text" name="email" value=""
			size="50" placeholder="Email" />
		<?php echo form_error('email'); ?>
		</br> </br>
		<textarea class="text-input-contacter" type="text" name="message"
			value="" rows="5" cols="51" placeholder="Message"></textarea>
		<?php echo form_error('message'); ?>
		</br>
		<p>
			<?php echo $success;?>
		</p>
		</br> <div style="position: relative;"><input  class="btn btn-primary" type="submit" value="Send" /></div>


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

