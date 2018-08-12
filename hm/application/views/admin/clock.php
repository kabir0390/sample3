
<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav pull-right">
			<li><a href="https://github.com/weareoutman/clockpicker">Fork me on GitHub</a></li>
		</ul>
		<h3>ClockPicker</h3>
	</div>
</div>

<div class="container">
	

	<div class="form-group">
		<h4>Set options in javascript, instead of <code>data-*</code> :</h4>
		<div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
			<input type="text" class="form-control" value="18:00">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
		</div>
		<pre class="hljs-pre"><code class="html">&lt;div class="input-group clockpicker"&gt;
	&lt;input type="text" class="form-control" value="18:00"&gt;
	&lt;span class="input-group-addon"&gt;
		&lt;span class="glyphicon glyphicon-time"&gt;&lt;/span&gt;
	&lt;/span&gt;
&lt;/div&gt;
&lt;script type="text/javascript"&gt;
$('.clockpicker').clockpicker({
	placement: 'top',
	align: 'left',
	donetext: 'Done'
});
&lt;/script&gt;</code></pre>
	</div>

