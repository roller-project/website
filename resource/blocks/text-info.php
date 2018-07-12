<div class="container">
      <div class="row justify-content-lg-between align-items-center">
        <div class="col-md-6 col-lg-5 order-md-2 mb-7 mb-md-0">
          <div class="pl-md-4">
            
            <?php echo $value->description;?>
           
          </div>
        </div>

        <div class="col-md-6 order-md-1">
          <!-- SVG Mockup -->
          <figure>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 614.8 747.7" style="enable-background:new 0 0 614.8 747.7;" xml:space="preserve">
              <path class="u-fill-primary" opacity=".05" d="M428.5,138.9C489.6,144.5,545.6,176,581,226c54.3,76.8,67.1,204.7-193.8,371.7c-411.5,263.5-387.9,6-382.7-30.6
                c0.5-3.6,0.9-7.2,1.3-10.7l22.1-241.9c10.6-116.2,113.5-201.8,229.8-191.1L428.5,138.9z"></path>
              <g>
                <defs>
                  <path id="mockup3" d="M446.2,729.7L446.2,729.7C310.4,782.7,156,714.9,103,579.1L18,361.2C-34.9,225.4,32.8,71,168.6,18l0,0
                    c135.8-53,290.2,14.8,343.2,150.6l85,217.9C649.8,522.3,582,676.7,446.2,729.7z"></path>
                </defs>
                <clipPath id="mockup4">
                  <use xlink:href="#mockup3" style="overflow:visible;"></use>
                </clipPath>
                <g style="clip-path:url(#mockup4);">
                  <!-- Apply your (615px width to 750px height) image here -->
                  <image style="overflow:visible;" width="750" height="750" xlink:href="<?php echo @$value->json->backgroundurl;?>" transform="matrix(1 0 0 1 -3.177470e-02 -0.9532)"></image>
                </g>
              </g>
              <g>
                <circle class="u-fill-danger" cx="488.6" cy="693.8" r="16.3"></circle>
                <circle class="u-fill-success" cx="482" cy="632.6" r="10.6"></circle>
                <circle class="u-fill-primary" cx="537.8" cy="655.9" r="21.6"></circle>
                <circle class="u-fill-warning" cx="576" cy="708.1" r="3.9"></circle>
              </g>
            </svg>
          </figure>
          <!-- End SVG Mockup -->
        </div>
      </div>
    </div>