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
                                <a class="nav-item nav-link" href="connections">Connections</a>
                                <a class="nav-item nav-link" href="sharingbuttons">Sharing Buttons</a>
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
                        <thead>
                            <th>Publicize Post</th>
                            <th></th>
                            <th></th>
                        </thead>
                          <tbody>
                            <tr>
                                <td><button type="button" class="btn btn-sm social twitter" style="margin-bottom: 4px">
                                    <i class="fa fa-twitter"></i>
                                </button>Twitter</td>
                                <td></td>
                                <td><button><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Connect</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm social facebook" style="margin-bottom: 4px">
                                    <i class="fa fa-facebook"></i>
                                </button>Facebook</td>
                                <td></td>
                                <td><button><a type="button" class="btn btn-sm social facebook" href="https://www.facebook.com/adeliaadb" target="_blank" id="u_0_1_w3" alt="" width="12" height="12"><span class="_49vh _2pi7">Facebook</span></div></button></div></a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm social tumblr" style="margin-bottom: 4px">
                                    <i class="fa fa-tumblr"></i>
                                </button>Tumblr</td>
                                <td></td>
                                <td><button><a type="button" class="btn btn-sm social tumblr" href="https://www.tumblr.com/blog/blewzinky" target="_blank" id="u_0_1_w3" alt="" width="12" height="12"><span class="_49vh _2pi7">Tumblr</span></div></button></div></a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm social linkedin" style="margin-bottom: 4px">
                                    <i class="fa fa-linkedin"></i>
                                </button>Linkedln</td>
                                <td></td>
                                <td><button><script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/Share" data-url="https://www.linkedin.com"></script></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm social instagram" style="margin-bottom: 4px">
                                    <i class="fa fa-instagram"></i>
                                </button>Instagram</td>
                                <td></td>
                                <td><button><a type="button" class="btn btn-sm social instagram" href="https://www.instagram.com/adelia.db/" target="_blank" id="u_0_1_w3" alt="" width="12" height="12"><span class="_49vh _2pi7">Instagram</span></div></button></div></a></button></td></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm">
                                   <a href="https://www.flaticon.com/free-icon/google-photos_2111441" class="view link-icon-detail" title="Google photos" data-id="2111441" data-src="?term=google photos&amp;page=1&amp;position=11">
                                    <img src="https://image.flaticon.com/icons/png/128/2111/2111441.png" data-src="https://image.flaticon.com/icons/png/128/2111/2111441.png" alt="Google photos free icon" title="Google photos free icon" class="lzy lazyload--done" srcset="https://image.flaticon.com/icons/png/128/2111/2111441.png 4x" width="25" height="25">
                                </a>
                                </button>Google Photos</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

@endsection