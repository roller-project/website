<div class="d-flex align-items-center position-relative min-height-100vh--lg">
      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-5 text-left">
          	<div style=" top: 0; left: 50px;">
            <?php echo $value->description;?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content -->

      <!-- SVG Background -->
      <div class="col-lg-7 d-none d-lg-block position-absolute-top-right-0 pr-0">
        <figure class="w-100">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1374.7 1083.6" style="enable-background:new 0 0 1374.7 1083.6;" xml:space="preserve">
            <path class="u-fill-primary" opacity=".05" d="M285.2,170.1c-94.5,8.6-181.2,57.4-235.9,134.8C-34.7,423.6-54.5,621.5,349,879.8
              c636.5,407.6,600,9.3,591.9-47.4c-0.8-5.5-1.4-11.1-2-16.6l-34.2-374.1C888.4,262,729.2,129.6,549.4,146L285.2,170.1z"></path>
            <g>
              <defs>
                <path id="heroBlock1" d="M1374.7,0H687.6l-278,279.7c-150,150.9-148.1,395.3,4.4,543.8l0,0C554.1,960,774.9,968.7,925.4,843.6
                  l449.3-373.4V0z"></path>
              </defs>
              <clipPath id="heroBlock2">
                <use xlink:href="#heroBlock1" style="overflow:visible;"></use>
              </clipPath>
              <g transform="matrix(1 0 0 1 0 0)" style="clip-path:url(#heroBlock2);">
                <!-- Apply your (750px width to 750px height) image here -->
                <image style="overflow:visible;" width="750" height="750" xlink:href="<?php echo @$value->json->backgroundurl;?>" transform="matrix(1.4462 0 0 1.4448 290.09 0)"></image>
              </g>
            </g>
          </svg>
        </figure>
      </div>
      <!-- End SVG Background -->
    </div>
  <style type="text/css">
 .min-height-100vh--lg {
    min-height: 100vh;
}
  	.w-100 {
    width: 100% !important;
}
figure {
    margin: 0 0 1rem;
        margin-bottom: 1rem;
}
.position-relative {
    position: relative !important;
}
.u-space-0--lg {
    padding-top: 0;
    padding-bottom: 0;
}
.position-absolute-top-right-0{
	position: absolute;
	top:0;
	right: 0;
  </style>}
