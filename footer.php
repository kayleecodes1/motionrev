<footer class="row">
	<div class="container">

		<div class="col-lg-12">
			&copy; Copyright 2013 Motion Revolution. All rights reserved.
		</div>

	</div>
</footer>

<div id="modal-signup" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		<h2>Sign up in 30 seconds!</h2>
    	</div>
    	<div class="modal-body">
			<form id="form-signup">
				<label for="name">My name is:<span class="required">*</span></label>
				<input type="text" id="name" name="name" />
				<label for="email">My email address is:<span class="required">*</span></label>
				<input type="text" id="email" name="email" />
				<label>I want to help with:<span class="required">*</span></label>
				<span class="sublabel">(check all that apply)</span>
				<div>
					<input type="checkbox" name="tasks[]" value="" /> Fundraising
					<input type="checkbox" name="tasks[]" value="" /> Spreading the word
					<input type="checkbox" name="tasks[]" value="" /> Creating promo material (videos, flyers, etc.)
					<input type="checkbox" name="tasks[]" value="" /> Construction/renovations
					<input type="checkbox" name="tasks[]" value="" /> Program development
					<input type="checkbox" name="tasks[]" value="" /> Teaching a class
					<input type="checkbox" name="tasks[]" value="" /> Other: <input type="text" name="tasks[]" />
				</div>
				<label for="hours">Hours I can commit each week:<span class="required">*</span></label>
				<input type="text" id="hours" name="hours" />
				<label for="comments">Questions and comments:</label>
				<textarea id="comments" name="comments"></textarea>
				<input type="submit" value="Submit" />
			</form>
		</div>

    </div>
  </div>
</div>

<div id="modal-contact-confirm" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		<h2>Thanks for getting in touch!</h2>
    	</div>
    	<div class="modal-body">
			<p>Lorem ipsum...</p>
		</div>

    </div>
  </div>
</div>

<script type="text/javascript" src="/library/js/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/library/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="/library/js/main.js"></script>

</body>
</html>