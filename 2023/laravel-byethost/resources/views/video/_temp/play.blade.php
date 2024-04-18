@extends('video.layout')


@section('main')
  <div id="single-video" class="container-fluid standard-bg">
    <!-- SINGLE VIDEO -->
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
        <aside class="dark-bg">
          <article>
            <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>categories</h2>
            <ul class="sidebar-links">
              <li class="fa fa-chevron-right"><a href="#">Lifestyle</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">World News</a><span>2.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">Funny videos</a><span>650</span></li>
              <li class="fa fa-chevron-right"><a href="#">Hot Stories</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">Music Clips</a><span>7.800</span></li>
              <li class="fa fa-chevron-right"><a href="#">Premier Trailers</a><span>200</span></li>
            </ul>
          </article>
          <div class="clearfix spacer"></div>
          <article>
            <h2 class="icon"><i class="fa fa-hashtag" aria-hidden="true"></i>rankings</h2>
            <ul class="sidebar-links">
              <li class="fa fa-chevron-right"><a href="#">best rated videos</a></li>
              <li class="fa fa-chevron-right"><a href="#">highly viewed</a></li>
              <li class="fa fa-chevron-right"><a href="#">most commented</a></li>
              <li class="fa fa-chevron-right"><a href="#">videos of month</a></li>
              <li class="fa fa-chevron-right"><a href="#">popular all time</a></li>
            </ul>
          </article>
          <div class="clearfix spacer"></div>
          <article>
            <h2 class="icon"><i class="fa fa-tag" aria-hidden="true"></i>tags</h2>
            <ul class="footer-tags">
              <li><a href="#">videos</a></li>
              <li><a href="#">premium</a></li>
              <li><a href="#">hair</a></li>
              <li><a href="#">beauty</a></li>
              <li><a href="#">ranking</a></li>
              <li><a href="#">lifestyle</a></li>
              <li><a href="#">sport</a></li>
              <li><a href="#">money</a></li>
              <li><a href="#">comments</a></li>
            </ul>
          </article>
          <div class="clearfix spacer"></div>
          <article class="reviews">
            <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top review</h2>
            <!-- POST L size -->
            <div class="post post-medium">
              <a class="thumbr post-thumb" href="#">
                <span class="review-number">4.8</span>
                <img src="/public/images/video/thumbs/thumb-review7.jpg" class="review img-responsive" alt="Review">
              </a>
              <div class="infor">
                <h4>
                  <a class="title" href="#">Lazy Betty B*tch</a>
                </h4>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-half"></i>
                </div>
              </div>
            </div>
          </article>
          <div class="clearfix spacer"></div>
          <article>
            <h2 class="icon"><i class="fa fa-plug" aria-hidden="true"></i>subscribe</h2>
            <!-- SUBSCRIBE FIELD -->
            <form name="search-submit" method="post" action="#" id="subscribe-submit">
              <fieldset class="search-fieldset">
                <input id="subscribe" type="text" name="search" size="12" class="search-field"
                  placeholder="Your email address" value="">
                <button class="subscribe-btn" type="submit" title="Subscribe">Subscribe</button>
              </fieldset>
            </form>
          </article>
        </aside>
      </div>
      <!-- SINGLE VIDEO -->
      <div id="single-video-wrapper" class="col-lg-10 col-md-8">
        <div class="row">
          <!-- VIDEO SINGLE POST -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- POST L size -->
            <article class="post-video">
              <!-- VIDEO INFO -->
              <div class="video-info">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9 video-embed-box">
                  {{-- <iframe src="" class="embed-responsive-item">

                  </iframe> --}}
                  <video id="my-player" class="video-js vjs-default-skin embed-responsive-item" controls>
                    <source src="{{ $row->play }}" type="application/x-mpegURL">
                  </video>
                  {{-- <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                    </source>
                    <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                    </source>
                    <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                    </source>
                    <p class="vjs-no-js">
                      To view this video please enable JavaScript, and consider upgrading to a
                      web browser that
                      <a href="https://videojs.com/html5-video-support/" target="_blank">
                        supports HTML5 video
                      </a>
                    </p> --}}
                  </video>
                </div>
                <h2 class="title main-head-title">{{ $row->spider_original_title }}</h2>
                <div class="metabox">
                  <span class="meta-i">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895
                  </span>
                  <span class="meta-i">
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>3.981
                  </span>
                  <span class="meta-i">
                    <i class="fa fa-user"></i><a href="#" class="author" title="John Doe">John Doe</a>
                  </span>
                  <span class="meta-i">
                    <i class="fa fa-clock-o"></i>March 16. 2020
                  </span>
                  <span class="meta-i">
                    <i class="fa fa-eye"></i>1,347,912 views
                  </span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
                <ul class="social">
                  <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                  <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                  <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                  <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                  <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
                </ul>
                <ul class="footer-tags">
                  <li><a href="#">videos</a></li>
                  <li><a href="#">premium</a></li>
                  <li><a href="#">hair</a></li>
                  <li><a href="#">beauty</a></li>
                  <li><a href="#">ranking</a></li>
                  <li><a href="#">lifestyle</a></li>
                  <li><a href="#">sport</a></li>
                  <li><a href="#">money</a></li>
                  <li><a href="#">comments</a></li>
                </ul>
                <div class="share-input">
                  <input type="text" value="" name="share-input">
                  <span class="fa fa-chain sharelinkicon"></span>
                </div>
              </div>
              <div class="clearfix spacer"></div>
              <!-- DETAILS -->
              <div class="video-content">
                <h2 class="title main-head-title">Video Details</h2>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                  into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                  release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                  software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                  into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                  release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                  software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
              </div>
              <div class="clearfix spacer"></div>
              <!-- MAIN ROLL ADVERTISE BOX -->
              <a href="" class="banner-md">
                <img src="/public/images/video/banners/banner-xl.jpg" class="img-responsive"
                  alt="Buy Now Muvee Reviews Bootstrap HTML5 Template"
                  title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
              </a>
            </article>

            <!-- COMMENTS -->
            <section id="comments">
              <h2 class="title">leave comment</h2>
              <div class="widget-area">
                <div class="status-upload">
                  <form>
                    <textarea placeholder="Your comment goes here"></textarea>
                    <div class="comment-box-control">
                      <ul>
                        <li><a title="" data-placement="bottom" data-original-title="Video"><i
                              class="fa fa-video-camera"></i></a></li>
                        <li><a title="" data-placement="bottom" data-original-title="Picture"><i
                              class="fa fa-picture-o"></i></a></li>
                        <li><a title="" data-placement="bottom" data-original-title="Smile"><i
                              class="fa fa-smile-o"></i></a></li>
                      </ul>
                      <button type="submit" class="btn pull-right"><i class="fa fa-share"></i> post comment</button>
                    </div>
                  </form>
                </div><!-- Status Upload  -->
              </div><!-- Widget Area -->


              <div class="row comment-posts">
                <div class="col-sm-1">
                  <div class="thumbnail">
                    <img class="img-responsive user-photo" src="/public/images/video/thumbs/thumb-review.jpg"
                      alt="Comment User Avatar">
                  </div>
                </div>

                <div class="col-sm-11">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
                    </div>
                    <div class="panel-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                      and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                      leap into electronic typesetting
                    </div>
                  </div>
                </div>

                <div class="col-sm-1">
                  <div class="thumbnail">
                    <img class="img-responsive user-photo" src="/public/images/video/thumbs/thumb-review.jpg"
                      alt="Comment User Avatar">
                  </div>
                </div>

                <div class="col-sm-11">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
                    </div>
                    <div class="panel-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                      and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                      leap into electronic typesetting
                    </div>
                  </div>
                </div>
              </div>

            </section>

          </div>
        </div>
        <div class="clearfix spacer"></div>
        <div class="row">
          <!-- RELATED VIDEOS -->
          <div class="col-lg-12 col-md-12 col-sm-12 related-videos">
            <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>related videos</h2>
            <div class="row auto-clear">
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">Video Lightbox Test</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s2.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I graduated from the university of Selfies</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s3.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I don’t always surf the internet, but when I do, Eyebrows</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s4.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">A selfie a day keeps the friends away</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s5.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">A selfie a day keeps the friends away</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
              <article class="col-lg-2 col-md-6 col-sm-4">
                <!-- POST L size -->
                <div class="post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-s6.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">A selfie a day keeps the friends away</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="clearfix spacer"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CHANNELS -->
  <div id="channels-block" class="container-fluid channels-bg">
    <div class="container-fluid ">
      <div class="col-md-12">
        <!-- CHANNELS -->
        <section id="channels">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>channels</h2>
            <div class="carousel-control-box">
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i
                  class="fa fa-chevron-left" aria-hidden="true"></i></a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><i
                  class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="row auto-clear">
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Fancy Channel Name</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Private Golden CH</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">4K Quality Videos</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Japan Couture Video</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Burlesque French Movies</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="item">
                <div class="row auto-clear">
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Fancy Channel Name</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Private Golden CH</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">4K Quality Videos</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Japan Couture Video</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                  <article class="col-lg-2 col-md-4 col-sm-4">
                    <div class="post post-medium">
                      <div class="thumbr">
                        <a class="post-thumb" href="#">
                          <img class="img-responsive" src="/public/images/video/channels/ch-1.jpg" alt="#">
                        </a>
                      </div>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Burlesque French Movies</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera"
                            aria-hidden="true"></i>4000</span>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    var player = videojs('my-player');
  </script>
@endsection