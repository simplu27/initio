<footer id="footer">
	This is the footer!
	<div id="copyright">
		Copyright &copy; <?php 
		$start_year = "2015";
		if (date('Y') == $start_year) {
			echo $start_year;
		} else {
			echo $start_year . " - " . date('Y');
		}
		?> All rights reserved.
	</div><!-- copyright -->
</footer>

<script type="text/javascript" src="/_js/jquery.js"></script>
<script type="text/javascript" src="/_js/script.js"></script>

</body>
</html>