<button class="botaoFlutuante" id="back-to-top">^</button>

<script>
  var btn = $("#back-to-top");
btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});
</script>