<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>SEO</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
   
    <div class="container">
	    <section class="cta-section theme-bg-light py-3">
		    <div class="container text-center">
			    <form class="signup-form form-inline justify-content-center pt-8" action="{{ route('cari') }}" method="get">
                    <div class="form-group">
                        <input type="text" id="cari" name="cari" class="form-control mr-md-1" placeholder="Pencarian">
                    </div>
                    <button type="submit" class="fa fa-search"></button>	
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">

		    	@foreach($data as $new)
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ $new->gambar }}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ route('isi', ['slug' => $new->slug ]) }}"> {{ $new->judul }}</a></h3>
						    <div class="meta mb-1"><span class="date">Published {{ $new->created_at->diffForHumans() }}</span>
						    <span class="time"> {{ $new->category->name_kategori }}</span>
						    </div>
						    <div class="intro"> {!!substr ($new->isi_artikel,0,200) !!}</div>
						    <a class="more-link" href="{{ route('isi', ['slug' => $new->slug ]) }}">Read more &rarr;</a>
						 
                        	<hr color="#DCDCDC" />
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    @endforeach
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
</footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

