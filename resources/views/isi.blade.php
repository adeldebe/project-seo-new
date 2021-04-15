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
	<script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme-1.css') }}">
    

</head> 

<body>
    
    <div class="container">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2">{{ $article->judul }}</h2>

				    <div class="meta mb-3"><span class="date">Published {{ $article->created_at->diffForHumans() }}</span>
				    <span class="time"> {{ $article->category->name_kategori }}</span>
				    <br><br><img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset($article->gambar) }}" alt="image">
					</div>
			    </header>
			    
			    <div class="blog-post-body">
			    	{{ $article->isi_artikel}}
			    </div>
				    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				<!--Reply-->
<div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Leave a comments</div>
    <div class="card-body">

        <!-- Default form reply -->
        <form action="{{ url("/insertData") }}" method="post">
        @csrf

            <!-- Comment -->
            <div class="form-group">
                <label for="comment">Your comment</label>
                <textarea name="comment" class="form-control" id="comment" rows="5"></textarea>
            </div>

            <!-- Name -->
            <label for="name">Your name</label>
            <input type="text" id="name" class="form-control" name="name">

            <br>

            <!-- Email -->
            <label for="email">Your e-mail</label>
            <input type="email" id="email" class="form-control" name="email">


            <div class="text mt-4">
                <button type="submit" class="btn btn-info btn-md" >Post</button>
            </div>
        </form>
        <!-- Default form reply -->
    </div>
</div></div>
<!--/.Reply-->

<!--/.single comment-->
@foreach ($komen as $kmn)
<div class="media mb-4">
	<img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('style/images/admin.png') }}" alt="image" width="100px">
	<div class="media-body">
		<h5 class="title mb-1"> {{ $kmn->name }}</h5>
		<div class="meta mb-3"><span class="date">Published {{ $kmn->created_at->diffForHumans() }}</span>
				    <span class="time">{{ $kmn->email }}</span>
		</div>
		<div>{{ $kmn->comment }}</div>
	</div>
</div>
@endforeach
				
		    </div><!--//container-->
	    </article>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->    
       
    <!-- Javascript -->          
    <script src="{{ asset('assets/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script> 
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
    
    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/blog.js') }}"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ asset('assets/js/demo/style-switcher.js') }}"></script>     
    

</body>
</html> 

