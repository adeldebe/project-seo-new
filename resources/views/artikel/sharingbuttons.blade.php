@extends('home')

@section('judul')
  <div>
    Social Media
  </div>
@endsection
  
@section('main')
<div class="col-lg-11">
    <nav class="navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="socmed">Connections</a>
                <a class="nav-item nav-link" href="socmed">Sharing Buttons</a>
            </div>
        </div>
    </nav>
</div>
    <div class="content mt-1">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                          <tbody>
                            <p>Allow readers to easily share your posts with others by adding sharing buttons throughout your site.<br></p>
                                <button type="button" class="btn btn-primary" href=""><div class="fa-hover col-lg-3 col-md-6"><a href="#pencil"><i class="fa fa-pencil"></i> Edit label text</a></div></button>
                                <br>
                                <br><button type="button" class="btn btn-secondary btn-lg btn-block">Preview</button>
                                <br>
                                <br><p>SHARE THIS :</p>
                            
                                <button type="button" class="btn btn-sm social facebook" style="margin-bottom: 4px">
                                    <i class="fa fa-facebook"></i>
                                    <span>Facebook</span>
                                </button>

                                <button type="button" class="btn btn-sm social twitter" style="margin-bottom: 4px">
                                    <i class="fa fa-twitter"></i>
                                    <span>Twitter</span>
                                </button>
                                <br>
                            
                                <br>
                                <button type="button" class="btn btn-primary" href=""><div class="fa-hover col-lg-3 col-md-6"><a href="#pencil"><i class="fa fa-pencil"></i> Edit sharing buttons&ensp;</a></div></button>
                            
                                <button type="button" class="btn btn-primary" href=""><div class="fa-hover col-lg-3 col-md-6"><a href="#plus"><i class="fa fa-plus"></i>&ensp;Add "More" button</a></div></button>
                                <br>
                                <br><form action="" method="get">
                                    <p>Button Style</p>
                                    <p><input type="radio" name="" value="Icon & Text" checked="checked"> Icon & Text</p>
                                    <p><input type="radio" name="" value="Icon Only"> Icon Only</p>
                                    <p><input type="radio" name="" value="Text Only"> Text Only</p>
                                    <p><input type="radio" name="" value="Official Buttons"> Official Buttons</p>
                                    <button type="button" class="btn btn-danger">Save Changes</button>
                                </form>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

@endsection