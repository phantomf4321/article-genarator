<div class="row justify-content-md-center">
		<div class="col-sm-8">
			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='alert alert-danger text-center'>
							".$_SESSION['error']."
						</div>
					";
					unset($_SESSION['error']);
				}

			?>	
		</div>
			<form action="monitor.php" method="post">
			<h5>Article:</h5>
				<div class="form-group">
					<input type="text" id="title" name="article" class="form-control" placeholder="article">
				</div>
			<h5>Autors:</h5>
				<div class="form-group">
					<input type="text" id="title" name="autors" class="form-control" placeholder="autors">	
				</div>
		    <h5>Keywords:</h5>
				<div class="form-group">
					<input type="text" id="title" name="keyword" class="form-control" placeholder="keywords">	
				</div>
				<div>
				<h5>theme:</h5>
				<div class="select">
				<select id="theme">
					<option value="default">default</option>
					<option value="defaultdark">dark</option>
					<option value="modern">modern</option>
					<option value="office-toolbar">Office Toolbar</option>
					<option value="office">Office</option>
					<option value="square">Square</option>
				</select>	
			</div>
			<h5>Abstract:</h5>
			    <div>
				    <textarea id="abstract" name="abstract" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
	        <h5>Introduction:</h5>
			    <div>
				    <textarea id="introduction" name="introduction" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
	        <h5>Materials and Methods:</h5>
			    <div>
				    <textarea id="method" name="method" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
			<div>
			<h5>Resualts:</h5>
			    <div>
				    <textarea id="resault" name="resault" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
			<div>
			
		    <h5>Discussion and Conclusion:</h5>
			    <div>
				    <textarea id="conclusion" name="conclusion" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
			<div>
	        <h5>References:</h5>
			    <div>
				    <textarea id="reference" name="reference" class="form-control" style="height:300px;width:600px;"></textarea>
			    </div>
			<div>				
			</div>					
			<button type="submit" class="btn btn-primary btn-block">next</button>
		</form>
	    </div>
</div>

<script>
			var textarea = document.getElementById('abstract');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>
		
		<script>
			var textarea = document.getElementById('introduction');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>

	    <script>
			var textarea = document.getElementById('method');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>		

	    <script>
			var textarea = document.getElementById('resault');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>	

	    <script>
			var textarea = document.getElementById('conclusion');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>

	    <script>
			var textarea = document.getElementById('reference');
			sceditor.create(textarea, {});
			
			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = 'minified/themes/' + themeInput.value + '.min.css';
				document.getElementById('theme-style').href = theme;
			};
		</script>	
		
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
	tinymce.init({
	    selector: '#content'
	});
</script>