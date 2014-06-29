


		<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.php"> Bienvenido</a></li>
			
		</ol>
	</div>
	</div>

		

	<div id="g_render"  class="left">
		<?php if (isset($charts)) echo $charts; ?>
		<?php if (isset($json)): ?>
			<h3>Json string output: associative array with global options and 'local options' (for each graph)</h3>
			<pre><?php echo print_r($json); ?></pre>
		<?php endif; if (isset($array)): ?>
			<h3>Array output: associative array with global options and 'local options' (for each graph)</h3>
			<pre><?php echo print_r($array); ?></pre>
		<?php endif; ?>
	</div>
	<br>
	<div id="menu" class="left">
		<ol>
			<li><?php echo anchor($home, 'Grafica Lineal')?></li>
			<li><?php echo anchor($home.'categories', 'Grafica de Barras')?></li>
		<!--	<li><?php echo anchor($home.'template', '')?></li> -->
			<li><?php echo anchor($home.'active_record', 'multiples chart and Database result')?></li>
			<li><?php echo anchor($home.'pie', 'Grafica de Pastel')?></li>
			<li><?php echo anchor($home.'data_get', 'outputing json or array')?></li>
		</ol>
	</div>


<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#el2").select2();
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>

		<!--End Content-->

