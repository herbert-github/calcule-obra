</div>
	</div>

<footer>
	<div class="container">Todos os direitos reservados</div>
</footer>
</div>

</div>




<script>
	$(function() {
  $('.toggle-nav').click(function() {
    $('body').toggleClass('show-nav');
     return false;
  });
  
});


// Toggle with hitting of ESC
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
   $('body').toggleClass('show-nav');
  }
});
</script>
</body>
</html>