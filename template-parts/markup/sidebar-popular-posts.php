<section id="" class="">
	<h2 class="widget-title">Popular Posts</h2>		

	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comments</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
		<?php get_template_part('template-parts/markup/sidebar-popular-posts-only');?>	  	
	  </div>
	  <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
		<?php get_template_part('template-parts/markup/sidebar-recent-posts-only');?>	  	
	  </div>
	  <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
	  	<div class="widget">
	  		No Comments found.
	  	</div>
	  </div>
	</div>

</section>