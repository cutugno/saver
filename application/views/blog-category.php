<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
	<section class="hgroup">
          <div class="container">
               <h1><?php echo $title; ?></h1>
               <h2>Nullam eget tortor purus, id molestie sapien. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla.</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="<?php echo site_url('blog'); ?>">Blog</a> </li>
                    <li class="active"><?php echo $title; ?></li>
               </ul>
          </div>     
     </section>
     <section>
          <div class="container">
               <div class="row">
                    <div id="leftcol" class="col-sm-8 col-md-8">
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="<?php echo site_url('blog/titolo/1'); ?>">Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus.</a></h3>
                                   <div class="post_sub"><i class="fa-time"></i> March 1, 2013 <a href="single_post.html#post_comments"><i class="fa-comments-alt"></i> 6 comments</a> </div>
                              </div>
                              <div class="post_content">
                                   <figure>
									   <img alt="0" src="<?php echo base_url('images/blog-1.jpg'); ?>">
								   </figure>
                                   <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets. Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets....</p>
                                   <a href="<?php echo site_url('blog/titolo/1'); ?>" class="btn btn-primary">Read More</a> 
                              </div>
                         </article>
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="single_post.html">Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus.</a></h3>
                                   <div class="post_sub"><i class="fa-time"></i> February 3, 2013 <a href="single_post.html#post_comments"><i class="fa-comments-alt"></i> 6 comments</a> </div>
                              </div>
                              <div class="post_content">
                                   <figure>
                                        <iframe class="video_iframe" src="http://player.vimeo.com/video/50924290?title=0&amp;byline=0&amp;portrait=0" height="400"></iframe>
                                   </figure>
                                   <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets. Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets....</p>
                                   <a href="single_post.html" class="btn btn-primary">Read More</a> 
                              </div>
                         </article>
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="single_post.html">Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus.</a></h3>
                                   <div class="post_sub"><i class="fa-time"></i> January 12, 2013 <i class="fa-comments-alt"></i> 0 comments </div>
                              </div>
                              <div class="post_content">
                                   <figure><a href="single_post.html"><img alt="0" src="images/portfolio/a4.jpg"></a></figure>
                                   <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets. Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets....</p>
                                   <a href="single_post.html" class="btn btn-primary">Read More</a> 
                              </div>
                         </article>
                         <div class="pagination_wrapper">
                              <ul class="pagination pagination-centered">
                                   <li class="disabled"><a href="#">«</a></li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a href="#">4</a></li>
                                   <li><a href="#">5</a></li>
                                   <li><a href="#">»</a></li>
                              </ul>
                         </div>
                    </div>
                    <div id="sidebar" class="col-sm-4 col-md-4">
                         <?php echo $widget_categorie; ?>
                         <?php echo $widget_letti; ?>
                    </div>
               </div>
          </div>
     </section>