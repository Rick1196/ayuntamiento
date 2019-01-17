<!-- Bootstrap core JavaScript
================================================== 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>-->
<script src="{{ elixir('js/jquery.js') }}"></script>
<script src="{{ elixir('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<script>
   $(document).ready(function(){
      $('.parallax-window').parallax({
        naturalWidth: 600,
        naturalHeight: 400
      });
    })
</script>
<script>
$(window).ready(function() {
    $(".wrapper").delay(3000).fadeOut("slow");
    $(".bg_load").delay(3000).fadeOut("slow");
    $("main").fadeIn("fast");
    $("#exampleModalCenter").modal("show");
})

</script>