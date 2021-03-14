<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script>
    // event pada saat link di klik
$('.page-scroll').on('click', function(event){
	
	// ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap elemen ybs
	var elemenTujuan = $(tujuan);

	// pindahkan scroll
	$('html,body').animate({
		scrollTop: elemenTujuan.offset().top -50
	}, 900  , 'swing');

	event.preventDefault();
});

// parallax

// about 
$(window).on('load', function(){
	$('.pkiri').addClass('pmuncul');
	$('.pkanan').addClass('pmuncul');
});


$(window).scroll(function() {
	var wScroll = $(this).scrollTop();
	// jumbotron
	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/2 +'%)'
	});

	$('.jumbotron h2').css({
		'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
	});


	// portfolio
	if ( wScroll > $('.portfolio').offset().top -250){

		$('.portfolio .thumbnail').each(function(i){

			setTimeout(function(){
				$('.portfolio .thumbnail').eq(i).addClass('muncul');

			}, 300 * (i+1));
		});

		// $('.portfolio .thumbnail').addClass('muncul');
	}
});
</script>

<script>$(document).on('ajaxComplete ready', function () {
    $('.modalMd').off('click').on('click', function () {
        $('#modalMdContent').load($(this).attr('value'));
        $('#modalMdTitle').html($(this).attr('title'));
    });
});</script>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">Copyright 2021 | built with <i class="glyphicon glyphicon-heart "></i> by. Mega Putri
          </p>
        </div>
      </div>
    </div>
  </footer>
