
<?php include __DIR__."/slider/slider3.php"; ?>

<div class="container u-space-3" data-json="whatisroller">
      <?php if(config_item("nextfork")){ ?>
            <div class="notesfork"><button class="u-gradient-half-danger-v5 btn btn-lg  btn-capsule px-4 btn-lg" style="color: #FFF;"><?php echo config_item("nextfork");?></button></div>
        <?php } ?>
      <div class="row justify-content-between align-items-center">
        

        <div class="col-lg-6 position-relative append-img" data-backgroundurl>
          <!-- Image Gallery -->
          <div class="row mx-gutters-2" json-item>
            <div class="col-5 align-self-end px-2 mb-3" json-item-data>
              <!-- Fancybox -->
              <a class="js-fancybox u-media-viewer" href="javascript:;">
                <img class="img-fluid rounded" item-backgroundurl src="<?php echo store_url("uploads/img1.jpg");?>" alt="Image Description">

                <span class="u-media-viewer__container">
                  <span class="u-media-viewer__icon">
                    <span class="ti-plus u-media-viewer__icon-inner"></span>
                  </span>
                </span>
              </a>
              <!-- End Fancybox -->
            </div>

            <div class="col-7 px-2 mb-3" json-item-data>
              <!-- Fancybox -->
              <a class="js-fancybox u-media-viewer" href="javascript:;">
                <img class="img-fluid rounded" item-backgroundurl src="<?php echo store_url("uploads/img3.jpg");?>" alt="Image Description">

                <span class="u-media-viewer__container">
                  <span class="u-media-viewer__icon">
                    <span class="ti-plus u-media-viewer__icon-inner"></span>
                  </span>
                </span>
              </a>
              <!-- End Fancybox -->
            </div>

            <div class="col-5 offset-1 px-2 mb-3" json-item-data>
              <!-- Fancybox -->
              <a class="js-fancybox u-media-viewer" href="javascript:;">
                <img class="img-fluid rounded" item-backgroundurl src="<?php echo store_url("uploads/img2.jpg");?>" alt="Image Description">

                <span class="u-media-viewer__container">
                  <span class="u-media-viewer__icon">
                    <span class="ti-plus u-media-viewer__icon-inner"></span>
                  </span>
                </span>
              </a>
              <!-- End Fancybox -->
            </div>

            <div class="col-5 px-2 mb-3" json-item-data>
              <!-- Fancybox -->
              <a class="js-fancybox u-media-viewer" href="javascript:;">
                <img class="img-fluid rounded" item-backgrounurl src="<?php echo store_url("uploads/img4.jpg");?>" alt="Image Description">

                <span class="u-media-viewer__container">
                  <span class="u-media-viewer__icon">
                    <span class="ti-plus u-media-viewer__icon-inner"></span>
                  </span>
                </span>
              </a>
              <!-- End Fancybox -->
            </div>
          </div>
          <!-- End Image Gallery -->

          <!-- SVG Background Shape -->
          <figure class="w-100 u-content-centered-y z-index-minus-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1109.8 797.1" style="enable-background:new 0 0 1109.8 797.1;" xml:space="preserve">
              <path class="u-fill-primary" opacity=".05" d="M105.1,267.1C35.5,331.5-3.5,423,0.3,517.7c5.8,145.3,110.7,314.2,588,273.1c753-64.7,481.3-358.3,440.4-398.3
                c-4-3.9-7.9-7.9-11.7-12L761.9,104.8C639.4-27.6,432.5-35.6,299.9,87L105.1,267.1z"></path>
            </svg>
          </figure>
          <!-- End SVG Background Shape -->
        </div>

        <div class="col-lg-5 mb-7 mb-lg-0" style="z-index:99999;">
          <div class="pr-md-4">
            <!-- Title -->
            <div class="mb-7">
              <span class="u-label u-label--sm u-label--success mb-2" data-pin>Cái gì là Roller Coind</span>
              <h2 class="text-primary" data-title>Roller coin <span class="font-weight-bold">là gì</span></h2>
             
              <div data-description>
                <p sroll-data data-in="bounceInRight">Roller coin được phát triển trên Roller Platform. Cung cấp cho người dùng tất cả các ứng dụng chạy trên smart contract</p>
                <p class="row-arrow-put">
                <p sroll-data data-in="bounceInLeft"><i class="ti-arrow-right"></i> Tên : Roller Network<p>
                <p sroll-data data-in="bounceInRight"><i class="ti-arrow-right"></i> Viết tắt: ROL<p>
                <p sroll-data data-in="bounceInLeft"><i class="ti-arrow-right"></i> Loại : Proof-of-Work<p>
                <p sroll-data data-in="bounceInRight"><i class="ti-arrow-right"></i> Thuật toán : Ethash<p>
                <p sroll-data data-in="bounceInLeft"><i class="ti-arrow-right"></i> Thời gian tối đa 1 block : 15 secs<p>
                <p sroll-data data-in="bounceInRight"><i class="ti-arrow-right"></i> Số coin 1 block : 10 ROL<p>
                <p sroll-data data-in="bounceInLeft"><i class="ti-arrow-right"></i> Tổng số coin phát hành : 100.000.000 ROL<p>
                <p sroll-data data-in="bounceInRight"><i class="ti-arrow-right"></i> Không sử dụng tạo coin cho develop<p>
                <p sroll-data data-in="bounceInLeft"><i class="ti-arrow-right"></i> Không vận hành bán ICO<p>
                <p sroll-data data-in="bounceInRight"><i class="ti-arrow-right"></i> Nguyên lý dựa trên nguyên tắt cộng đồng sử dụng<p>
                </p>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </div>






<div data-json="downloadwallet" class="u-gradient-half-primary-v1">
      <div class="container u-space-3">
        <div class="row">
          <div class="col-lg-5">
            <!-- Title -->
            <div class="pr-md-4 mb-7">
              <span class="u-icon u-icon-white u-icon--lg text-primary rounded-circle mb-4">
                <span class="ti-mobile u-icon__inner"></span>
              </span>
              <h2 class="text-white font-weight-bold" data-title>Wallet <span class="text-warning">roller platform</span></h2>
              <p class="u-text-light" data-description>Phần mềm quản lý ROL và Smart Contract trên các hệ điều hành</p>
            </div>
            <!-- End Title -->

            <h3 class="h6 text-white">Download for:</h3>

            <!-- Download Buttons -->
            <div class="row mx-gutters-2">
              <div class="col-sm-6 col-md-4 col-lg-5 mb-3">
                <button type="button" class="btn btn-block btn-warning u-btn-warning transition-3d-hover">
                  <span class="fab fa-apple mr-2"></span>
                  iOS
                </button>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-5 mb-3">
                <button type="button" class="btn btn-block text-primary u-btn-white transition-3d-hover">
                  <span class="fab fa-windows mr-2"></span>
                  Windows
                </button>
              </div>
            </div>
            <!-- End Download Buttons -->

            <!-- Download Buttons -->
            <div class="row mx-gutters-2">
              <div class="col-sm-6 col-md-4 col-lg-5 mb-3">
                <button type="button" class="btn btn-block text-primary u-btn-white transition-3d-hover">
                  <span class="fab fa-android mr-2"></span>
                  Android
                </button>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-5 mb-3">
                <button type="button" class="btn btn-block text-primary u-btn-white transition-3d-hover">
                  <span class="fab fa-apple mr-2"></span>
                  Mac
                </button>
              </div>
            </div>
            <!-- End Download Buttons -->
          </div>
        </div>

        <!-- Mockup Devices v4 -->
        <div class="u-devices-v4">
          <div class="d-none d-lg-flex flex-lg-wrap u-devices-v4__content">
            <!-- SVG Horizontal Tablet Mockup -->
            <div class="align-self-end u-devices-v4__tablet-ver mb-4">
              <figure class="u-devices-v4__tablet-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 892 603" style="enable-background:new 0 0 892 603;" xml:space="preserve">
                  <path id="BG_ColorID1" class="u-fill-white" d="M840.2,603H51.8C23.3,603,0,579.7,0,551.2V51.8C0,23.3,23.3,0,51.8,0h788.5C868.7,0,892,23.3,892,51.8v499.5C892,579.7,868.7,603,840.2,603z"></path>
                  <circle id="tabletVerFrameTouchID1" class="u-fill-gray-75" cx="45.5" cy="302.5" r="25.5"></circle>
                  <circle id="tabletVerFrameCameraID1" class="u-fill-gray-75" cx="846.1" cy="301.8" r="6.2"></circle>
                  <g>
                    <defs>
                      <rect id="tabletHorFrameID1" x="184" y="-53" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 753 -148)" width="533" height="711"></rect>
                    </defs>
                    <clipPath id="tabletHorFrameID2">
                      <use xlink:href="#tabletHorFrameID1" style="overflow:visible;"></use>
                    </clipPath>
                    <g style="clip-path:url(#tabletHorFrameID2);">
                      <!-- Apply your (533px width to 711px height) image here -->
                      <image style="overflow:visible;" width="711" height="533" xlink:href="<?php echo store_url("uploads/btcwallet-tablet2.jpg");?>" transform="matrix(1 0 0 1 94.5 35)"></image>
                    </g>
                    <use class="u-fill-none u-stroke-light-blue-125" xlink:href="#tabletHorFrameID1" stroke-miterlimit="10" style="overflow: visible;"></use>
                  </g>
                </svg>
              </figure>
            </div>
            <!-- End SVG Horizontal Tablet Mockup -->

            <!-- SVG Vertical Tablet Mockup -->
            <div class="u-devices-v4__tablet mb-4">
              <figure class="u-devices-v4__tablet-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 603 892" style="enable-background:new 0 0 603 892;" xml:space="preserve">
                  <path id="BG_ColorID2" class="u-fill-white" d="M603,51.8v788.5c0,28.5-23.3,51.8-51.8,51.8H51.8C23.3,892,0,868.7,0,840.2L0,51.8
                    C0,23.3,23.3,0,51.8,0l499.5,0C579.7,0,603,23.3,603,51.8z"></path>
                  <circle id="tabletFrameTouchID1" class="u-fill-gray-75" cx="302.5" cy="846.5" r="25.5"></circle>
                  <circle id="tabletFrameCameraID1" class="u-fill-gray-75" cx="301.8" cy="45.9" r="6.2"></circle>
                  <g>
                    <defs>
                      <rect id="tabletFrameID1" x="36" y="86" width="533" height="711"></rect>
                    </defs>
                    <clipPath id="tabletFrameID2">
                      <use xlink:href="#tabletFrameID1" style="overflow:visible;"></use>
                    </clipPath>
                    <g style="clip-path:url(#tabletFrameID2);">
                      <!-- Apply your (533px width to 711px height) image here -->
                      <image style="overflow:visible;" width="533" height="711" xlink:href="<?php echo store_url("uploads/btcwallet-tablet.jpg");?>" transform="matrix(1 0 0 1 36 86)"></image>
                    </g>
                    <use class="u-fill-none u-stroke-light-blue-125" xlink:href="#tabletFrameID1" stroke-miterlimit="10" style="overflow: visible;"></use>
                  </g>
                </svg>
              </figure>
            </div>
            <!-- End SVG Vertical Tablet Mockup -->

            <!-- SVG Laptop Mockup -->
            <div class="u-devices-v4__laptop">
              <figure>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 999.1 576.5" style="enable-background:new 0 0 999.1 576.5;" xml:space="preserve">
                  <path class="u-fill-white" d="M881.3,576.5H117.5c-14.4,0-26.2-11.8-26.2-26.2V26.2C91.3,11.8,103.1,0,117.5,0h763.9
                    c14.4,0,26.2,11.8,26.2,26.2v524.2C907.5,564.7,895.7,576.5,881.3,576.5z"></path>
                  <circle fill="#f7f7f7" cx="498" cy="23.3" r="3"></circle>
                  <path class="u-fill-white" d="M996.3,560.7H2.9c-1.5,0-2.8-1.3-2.8-2.8l0,0c0-1.5,1.3-2.8,2.8-2.8h993.4c1.5,0,2.8,1.3,2.8,2.8l0,0
                    C999.1,559.4,997.9,560.7,996.3,560.7z"></path>
                  <path fill="#efefef" d="M499.6,562.5L0,560.7c0,0,24.1,11.3,117.8,15.8H498h3.1h380.2c93.7-4.5,117.8-15.8,117.8-15.8L499.6,562.5z"></path>
                  <linearGradient id="laptopFrameID1" gradientUnits="userSpaceOnUse" x1="403.8206" y1="558.6469" x2="594.97" y2="558.6469">
                    <stop offset="5.908129e-07" style="stop-color:#F0F1F2"></stop>
                    <stop offset="5.235744e-02" style="stop-color:#F6F7F8"></stop>
                    <stop offset="0.1708" style="stop-color:#FDFDFD"></stop>
                    <stop offset="0.5" style="stop-color:#FFFFFF"></stop>
                    <stop offset="0.8292" style="stop-color:#FDFDFD"></stop>
                    <stop offset="0.9476" style="stop-color:#F6F7F8"></stop>
                    <stop offset="1" style="stop-color:#F0F1F2"></stop>
                  </linearGradient>
                  <path fill="url(#laptopFrameID1)" d="M591.4,562.2H407.4c-1.9,0-3.5-1.6-3.5-3.5v-3.5H595v3.5C595,560.6,593.4,562.2,591.4,562.2z"></path>
                  <g>
                    <defs>
                      <rect id="laptopFrameID2" x="121.7" y="37.5" width="752.5" height="469.7"></rect>
                    </defs>
                    <clipPath id="laptopFrameID3">
                      <use xlink:href="#laptopFrameID2" style="overflow:visible;"></use>
                    </clipPath>
                    <g transform="matrix(1 0 0 1 7.629395e-06 0)" style="clip-path:url(#laptopFrameID3);">
                      <!-- Apply your (1618px width to 1010px height) image here -->
                      <image style="overflow:visible;" width="1618" height="1010" xlink:href="<?php echo store_url("uploads/btcwallet-computer.jpg");?>" transform="matrix(0.4651 0 0 0.4651 122.2123 37.4679)"></image>
                    </g>
                    <use class="u-fill-none u-stroke-light-blue-125" xlink:href="#laptopFrameID2" stroke-miterlimit="10" style="overflow: visible;"></use>
                  </g>
                </svg>
              </figure>
            </div>
            <!-- SVG Laptop Mockup -->

            <!-- SVG Phone Mockup -->
            <div class="align-self-start u-devices-v4__phone">
              <figure class="u-devices-v4__phone-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 317.5 665" style="enable-background:new 0 0 317.5 665;" xml:space="preserve">
                  <path class="u-fill-white" d="M263,666H54c-29.7,0-54-24.3-54-54V55C0,25.3,24.3,1,54,1h209c29.7,0,54,24.3,54,54v557
                    C317,641.7,292.7,666,263,666z"></path>
                  <circle class="u-fill-gray-75" cx="159.5" cy="619.5" r="25.5"></circle>
                  <path class="u-fill-gray-75" fill-rule="evenodd" clip-rule="evenodd" d="M180,52h-42c-2.2,0-4-1.8-4-4v0c0-2.2,1.8-4,4-4h42c2.2,0,4,1.8,4,4v0C184,50.2,182.2,52,180,52z"></path>
                  <g>
                    <defs>
                      <rect id="phoneFrameID1" x="19.4" y="81.3" width="280" height="500"></rect>
                    </defs>
                    <clipPath id="phoneFrameID2">
                      <use xlink:href="#phoneFrameID1" style="overflow:visible;"></use>
                    </clipPath>
                    <g style="clip-path:url(#phoneFrameID2);">
                      <!-- Apply your (282px width to 500px height) image here -->
                      <image style="overflow:visible;" width="282" height="500" xlink:href="<?php echo store_url("uploads/btcwallet-mobile.jpg");?>" transform="matrix(1 0 0 1 18 81)"></image>
                    </g>
                    <use class="u-fill-none u-stroke-light-blue-125" xlink:href="#phoneFrameID1" stroke-miterlimit="10" style="overflow: visible;"></use>
                  </g>
                </svg>
              </figure>
            </div>
            <!-- End SVG Phone Mockup -->
          </div>
          <!-- End Mockup Devices v4 -->
        </div>
      </div>
    </div>






<div data-json="timeline" style="z-index: 99999; background-color: #FFF; position: relative;">
 <div class="container u-space-1">
      
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        <span class="u-label u-label--sm u-label--success mb-2">Benefits</span>
        <h2 class="text-primary" data-title>Why
          <span class="font-weight-bold">join us?</span>
        </h2>
        <p data-description>The passion and commitment to that mission lives through everything we do.</p>
      </div>
      <br>
      <div class="row timelineStyle" json-item>
        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">01.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>Vận hành hệ thống (100%)</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p item-description>Hệ thống đi vào vận hành từ ngày 12/07/2018.</p>

            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">02.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>Public Network (20%)</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <p item-description>Chúng tôi sẽ mở hệ thống khai thác ROL từ sau block 50.000.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">03.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>Phát triển wallet (30%)</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p item-description>Phát triển wallet trên window/ linux/ Macos / Androi/ IOS.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7 mb-sm-0">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">04.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>Ứng dụng Masternode (40%)</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p item-description>Cho phép miner khai thác ROL qua Masternode.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7 mb-sm-0">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">05.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>List sàn giao dịch (0%)</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p item-description>Chúng tôi sẽ tiến hành list lên sàn giao dịch đưa ROL vào thương mại.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7 mb-sm-0">
          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
              <span class="u-icon__inner font-weight-bold">06.</span>
            </span>
            </div>
            <div class="media-body" json-item-data>
              <h3 class="h6" item-title>Phát triển Smart Contract</h3>
              <div class="progress" style="height: 2px;">
                <div class="progress-bar" item-progress role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p item-description>Phát triển các ứng dụng trên smart contract chỉ 1 click chuột.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->


        </div>

      </div>

        
    </div>

</div>
<!--// End Time Line -->    

<hr>




   




    <div class="position-relative">
      <div class="container u-space-3">
        <div class="row align-items-center">


          <div class="col-lg-7 position-relative">
            <!-- Video Block -->
            <div id="video" class="u-video-player">
              <!-- Cover Image -->
              <img class="img-fluid u-video-player__preview" src="<?php echo store_url("uploads/img5.jpg");?>" alt="Image">
              <!-- End Cover Image -->

              <!-- Play Button -->
              <a class="js-classes-toggle u-video-player__btn u-video-player__centered" href="javascript:;" data-target="#video" data-classes="u-video-player__played">
                <span class="u-video-player__icon u-video-player__icon--lg text-primary">
                  <span class="ti-control-play u-video-player__icon-inner"></span>
                </span>
              </a>
              <!-- End Play Button -->

              <!-- Video Iframe -->
              <div class="embed-responsive embed-responsive-16by9">
                <iframe id="vimeoVideo" class="embed-responsive-item" data-src="https://player.vimeo.com/video/97243285?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0">
                </iframe>
              </div>
              <!-- End Video Iframe -->
            </div>
            <!-- End Video Block -->

            <!-- SVG Background Shape -->
            <figure class="w-100 u-content-centered z-index-minus-1">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1109.8 797.1" style="enable-background:new 0 0 1109.8 797.1;" xml:space="preserve">
                <path class="u-fill-primary" opacity=".1" d="M105.1,267.1C35.5,331.5-3.5,423,0.3,517.7c5.8,145.3,110.7,314.2,588,273.1c753-64.7,481.3-358.3,440.4-398.3
                  c-4-3.9-7.9-7.9-11.7-12L761.9,104.8C639.4-27.6,432.5-35.6,299.9,87L105.1,267.1z"></path>
              </svg>
            </figure>
            <!-- End SVG Background Shape -->
          </div>



          <div class="col-lg-5 mb-9 mb-lg-0">
            <!-- Title -->
            <div class="pr-lg-4 mb-7">
              <span class="u-label u-label--sm u-label--success mb-2">Outsource</span>
              <h2 class="text-primary">Đối tác
                <span class="font-weight-bold">phát triển ứng dụng</span>
              </h2>
              <p>Chúng tôi luôn hoan nghênh mọi đóng góp và phát triển dự án để đạt mục tiêu là một dự án của cộng đồng.</p>
            </div>
            <!-- End Title -->

            <div class="row">
              <div class="col-sm-6">
                <!-- List -->
                <ul class="list-unstyled mb-0">
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-danger--air u-icon--sm rounded-circle">
                        <span class="ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        HTML 5 Design
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
                        <span class="ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        Geth
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-success--air u-icon--sm rounded-circle">
                        <span class="fab ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        Smart Contract
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List -->
              </div>

              <div class="col-sm-6">
                <!-- List -->
                <ul class="list-unstyled mb-0">
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-danger--air u-icon--sm rounded-circle">
                        <span class="fab ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        IoT Service
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
                        <span class="ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        Games
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="media">
                      <div class="d-flex mr-3">
                      <span class="u-icon u-icon-success--air u-icon--sm rounded-circle">
                        <span class="fab ti-plus u-icon__inner"></span>
                      </span>
                      </div>
                      <div class="media-body">
                        Solidarity
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List -->
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>






<div data-json="exchange" class="position-relative">
  <figure class="position-absolute-bottom-0">
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100">
        <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
        <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
        <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z"></path>
        <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
      </svg>
    </figure>

<div class="u-gradient-half-primary-v3">
      <div class="container u-space-1-top">
        <div class="row align-items-start">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Title -->
            <div class="pr-md-4 mb-4">
              <span class="u-label u-label--sm u-label--success mb-2" data-pin>Exchange</span>
              <h2 class="text-primary" data-title>Tính thanh <span class="font-weight-bold">khoản</span></h2>
              <p data-description>Danh sách sàn giao dịch chấp nhận giao dịch ROL đang vận hành trên thị trường.</p>
            </div>
            <!-- End Title -->

            <a class="btn btn-primary u-btn-primary u-btn-wide u-btn-pill transition-3d-hover mr-1 mb-2" href="#" target="_blank">Stock Exchange</a>
            <a class="btn u-btn-primary--air u-btn-wide u-btn-pill transition-3d-hover ml-1 mb-2" href="#">Cryptopia</a>


            <a class="btn btn-primary u-btn-primary u-btn-wide u-btn-pill transition-3d-hover mr-1 mb-2" href="#" target="_blank">Bittrex</a>
            <a class="btn u-btn-primary--air u-btn-wide u-btn-pill transition-3d-hover ml-1 mb-2" href="#">HitBTC</a>

          </div>

          <div class="col-lg-7 mt-auto">
            <!-- SVG Icon -->
            <img src="<?php echo store_url("uploads/illustration.svg");?>" alt="SVG Illustration">
            <!-- End SVG Icon -->
          </div>
        </div>
      </div>
    </div>

</div>




<div data-json="supportgroup" id="featuresSection" class="container text-center u-space-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 mx-auto mb-9">
        <span class="u-label u-label--sm u-label--success mb-2">Support</span>
        <h2 class="text-primary" data-title>Hỗ trợ <span class="font-weight-bold">người dùng</span></h2>
        <p data-description>Hãy cho chúng tôi biết vấn đề bạn đang gặp phải.</p>
      </div>
      <!-- End Title -->

      <div class="row" json-item>
        <div class="col-md-4 mb-7 mb-md-0" json-item-data>
          <!-- Process -->
          <div class="position-relative">
            <div class="u-indicator-dots min-height-155 mb-2">
              <!-- Icon -->
              <span class="text-success u-icon u-icon--xl mt-7">
                <span class="fab ti-folder u-icon__inner u-icon__inner-bottom-minus"></span>
              </span>
              <!-- End Icon -->

              <!-- SVG Shape -->
              <figure class="w-100 position-absolute-top-0 z-index-minus-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180px" height="161px" x="0px" y="0px" viewBox="0 0 180 161.2" style="enable-background:new 0 0 180 161.2;" xml:space="preserve">
                  <path class="u-fill-none u-stroke-success" opacity=".1" stroke-width="2" d="M35.5,160.4C14.5,144.1,1,118.6,1,90C1,40.8,40.8,1,90,1s89,39.8,89,89c0,28.1-13,53.1-33.3,69.4"></path>
                  <g>
                    <path class="u-fill-white" d="M5.8,64.1c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S7.5,64.1,5.8,64.1z"></path>
                    <path class="u-fill-success" d="M5.8,59.2c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S4.7,59.2,5.8,59.2 M5.8,57.2c-2.2,0-4,1.8-4,4
                      c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4C9.8,58.9,8,57.2,5.8,57.2L5.8,57.2z"></path>
                  </g>
                  <circle class="u-fill-white" opacity=".1" cx="90.4" cy="89.6" r="28.6"></circle>
                  <path class="u-fill-success" opacity=".1" d="M90.4,76c7.5,0,13.6,6.1,13.6,13.6s-6.1,13.6-13.6,13.6s-13.6-6.1-13.6-13.6S82.9,76,90.4,76 M90.4,46
                      c-24.1,0-43.6,19.5-43.6,43.6s19.5,43.6,43.6,43.6S134,113.7,134,89.6S114.4,46,90.4,46L90.4,46z"></path>
                </svg>
              </figure>
              <!-- End SVG Shape -->
            </div>
          </div>

          <h3 class="h5" item-title>Khai thác ROL</h3>
          <p class="mb-md-0" item-description>Các hướng dẫn sử dụng khai thác ROL hiệu quả nhất cho người dùng.</p><br>
          <a href="#" item-link class="btn btn-outline-info btn-capsule px-4">Xem thêm</a>
          <!-- End Process -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0" json-item-data>
          <!-- Process -->
          <div class="position-relative">
            <div class="u-indicator-dots min-height-155 mb-2">
              <!-- Icon -->
              <span class="text-primary u-icon u-icon--xl mt-7">
                <span class="fas ti-eye u-icon__inner u-icon__inner-bottom-minus"></span>
              </span>
              <!-- End Icon -->

              <!-- SVG Shape -->
              <figure class="w-100 position-absolute-top-0 z-index-minus-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180px" height="161px" x="0px" y="0px" viewBox="0 0 180 161.2" style="enable-background:new 0 0 180 161.2;" xml:space="preserve">
                  <path class="u-fill-none u-stroke-primary" opacity=".1" stroke-width="2" d="M35.5,160.4C14.5,144.1,1,118.6,1,90C1,40.8,40.8,1,90,1s89,39.8,89,89c0,28.1-13,53.1-33.3,69.4"></path>
                  <g>
                    <path class="u-fill-white" d="M163.8,43.1c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S165.5,43.1,163.8,43.1z"></path>
                    <path class="u-fill-primary" d="M163.8,38.2c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S162.7,38.2,163.8,38.2 M163.8,36.2c-2.2,0-4,1.8-4,4
                      c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4C167.8,37.9,166,36.2,163.8,36.2L163.8,36.2z"></path>
                  </g>
                  <circle class="u-fill-white" opacity=".1" cx="90.4" cy="89.6" r="28.6"></circle>
                  <path class="u-fill-primary" opacity=".1" d="M90.4,76c7.5,0,13.6,6.1,13.6,13.6s-6.1,13.6-13.6,13.6s-13.6-6.1-13.6-13.6S82.9,76,90.4,76 M90.4,46
                    c-24.1,0-43.6,19.5-43.6,43.6s19.5,43.6,43.6,43.6S134,113.7,134,89.6S114.4,46,90.4,46L90.4,46z"></path>
                </svg>
              </figure>
              <!-- End SVG Shape -->
            </div>
          </div>

          <h3 class="h5" item-title>Cài đặt Masternode</h3>
          <p class="mb-md-0" item-description>Hướng dẫn cài đặt và vận hành masternode trên Roller Platform.</p><br>
          <a href="#"  item-link class="btn btn-outline-primary btn-capsule px-4">Xem thêm</a>
          <!-- End Process -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0" json-item-data>
          <!-- Process -->
          <div class="min-height-155 mb-2">
            <!-- Icon -->
            <span class="text-danger u-icon u-icon--xl mt-7">
              <span class="fab ti-wallet u-icon__inner u-icon__inner-bottom-minus"></span>
            </span>
            <!-- End Icon -->

            <!-- SVG Shape -->
            <figure class="w-100 position-absolute-top-0 z-index-minus-1">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180px" height="161px" x="0px" y="0px" viewBox="0 0 180 161.2" style="enable-background:new 0 0 180 161.2;" xml:space="preserve">
                <path class="u-fill-none u-stroke-danger" opacity=".1" stroke-width="2" d="M35.5,160.4C14.5,144.1,1,118.6,1,90C1,40.8,40.8,1,90,1s89,39.8,89,89c0,28.1-13,53.1-33.3,69.4"></path>
                <g>
                  <path class="u-fill-white" d="M167.8,136.1c-1.7,0-3-1.3-3-3c0-1.7,1.3-3,3-3s3,1.3,3,3C170.8,134.8,169.5,136.1,167.8,136.1z"></path>
                  <path class="u-fill-danger" d="M167.8,131.2c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S166.7,131.2,167.8,131.2 M167.8,129.2c-2.2,0-4,1.8-4,4
                    c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4C171.8,130.9,170,129.2,167.8,129.2L167.8,129.2z"></path>
                </g>
                <circle class="u-fill-white" opacity=".1" cx="90.4" cy="89.6" r="28.6"></circle>
                <path class="u-fill-danger" opacity=".1" d="M90.4,76c7.5,0,13.6,6.1,13.6,13.6s-6.1,13.6-13.6,13.6s-13.6-6.1-13.6-13.6S82.9,76,90.4,76 M90.4,46
                  c-24.1,0-43.6,19.5-43.6,43.6s19.5,43.6,43.6,43.6S134,113.7,134,89.6S114.4,46,90.4,46L90.4,46z"></path>
              </svg>
            </figure>
            <!-- End SVG Shape -->
          </div>

          <h3 class="h5" item-title>Xây dựng ICO</h3>
          <p class="mb-md-0" item-description>Hướng dẫn xây dựng, định hướng, phát triển ICO, Token, Game trên smart contract.</p><br>
          <a href="#" item-link class="btn btn-outline-danger btn-capsule px-4">Xem thêm</a>
          <!-- End Process -->
        </div>
      </div>
    </div>





<div data-json="developgroup" class="bg-light">
 <div class="container u-space-1">
      
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        <span class="u-label u-label--sm u-label--success mb-2">Develop Groups</span>
        <h2 class="text-primary" data-title>Thành viên
          <span class="font-weight-bold">phát triển ROL</span>
        </h2>
        <p data-description>Các thành viên tiêu biểu phát triển ROL</p>
      </div>
      <br>
      <div class="row" json-item>
         <?php for ($i=1; $i <= 4; $i++) { ?>
          <div class="col-sm-6 col-lg-3 mb-7">
            <!-- Icon Blocks -->
            <div class="shadown-sm" json-item-data>
                <img item-backgroundurl src="<?php echo store_url("uploads/ceo.jpg");?>" class="img-fluid w-100 rounded">
                <div class="position-relative bg-white text-center rounded shadow-sm z-index-2 mt-offset-6 p-4 mx-3">
                  <h3 item-title class="h6 mb-1">Vo Van Khoa</h3>
                  <div item-description>
                  <p class="font-size-14 mb-0">CEO</p>
                  <a class="btn btn-outline-primary btn-sm"><i class="ti-facebook"></i></a>
                  <a class="btn btn-outline-primary btn-sm"><i class="ti-plus"></i></a>
                  </div>
                </div>
               
            </div>
            <!-- End Icon Blocks -->
          </div>
        <?php } ?>
       

      </div>

        
    </div>

</div>
<!--// End support -->    




<div data-json="groupsay" class="groupsay">
 <div class="container u-space-1">
      
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        <span class="u-label u-label--sm u-label--primary mb-2">Faceback</span>
        <h2 class="text-primary" data-title>Cộng đồng
          <span class="font-weight-bold">nói về ROL</span>
        </h2>
        <p data-description>Góp ý từ cồng đồng về Roller Platform</p>
      </div>
      <br>
      <div class="row" json-item>
        
         
        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media" style="min-height: 120px;" json-item-data>
              <div class="content card-body">
                <b item-title>VO VAN KHOA</b><br>
                <div class="limit-line-7">
                <p item-description>
                  The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
                  The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
                </p>
                </div>
              </div>
              <div class="avatar">
               <img item-backgroundurl src="<?php echo store_url("uploads/avatar.jpg");?>" width="100%;">
             </div>
          </div>
          
          <!-- End Icon Blocks -->
        </div>
        
        


        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media heightline" style="min-height: 120px;" json-item-data>
              <div class="avatar u-gradient-half-primary-v1">
                  <figure class="position-absolute-bottom-0 z-index-2">
                      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100" style="margin-bottom: -8px;" xml:space="preserve">
                        <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
                        <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
                        <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                    H42.401L43.415,98.342z"></path>
                        <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
                      </svg>
                    </figure>
                  <div class="text">
                    
                    <img item-backgroundurl src="<?php echo store_url("uploads/avatar.jpg");?>" width="100%; z-index:9999;"><br>
                    <b item-title>VO VAN KHOA</b>
                  </div>
                   

              </div>
              <div class="content card-body" item-description>
                
                
                The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
                The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
              </div>
              
          </div>
          
          <!-- End Icon Blocks -->
        </div>


        <div class="col-sm-6 col-lg-4 mb-7">
          <!-- Icon Blocks -->
          <div class="media" style="min-height: 120px;" json-item-data>
              <div class="content card-body">
                <b item-title>VO VAN KHOA</b><br>
                 <p item-description class="limit-line-7">The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
                The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you!<br>
              </p>
              </div>
              <div class="avatar">
               <img item-backgroundurl src="<?php echo store_url("uploads/avatar.jpg");?>" width="100%;">
             </div>
          </div>
          
          <!-- End Icon Blocks -->
        </div>

      </div>

        
    </div>

</div>
<!--// End support -->    





<div class="container">
      <figure class="w-lg-80 mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800.4 242.2" style="enable-background:new 0 0 800.4 242.2;" xml:space="preserve">
          <g>
            <g id="XMLID_409_5">
              <g id="XMLID_427_5">
                <path id="XMLID_430_5" class="u-fill-white" d="M108.3,214.5l-33.7-10.6c-0.6-0.2-0.9-0.8-0.7-1.3l10.6-33.7c0.2-0.6,0.8-0.9,1.3-0.7
                  l33.7,10.6c0.6,0.2,0.9,0.8,0.7,1.3l-10.6,33.7C109.5,214.4,108.9,214.7,108.3,214.5z"></path>

                  <rect id="XMLID_429_5" x="83.1" y="176.9" transform="matrix(0.9537 0.3006 -0.3006 0.9537 61.6395 -20.3945)" class="u-fill-primary-lighter" width="28" height="26.4"></rect>
                <path id="XMLID_428_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M81,180l3.2-10c0.4-1.2,1.7-1.9,2.9-1.5l31.4,9.9c1.2,0.4,1.9,1.7,1.5,2.9l-6.7,21.3"></path>
              </g>
              <g id="XMLID_420_5">
                <path id="XMLID_426_5" class="u-fill-white" d="M71.5,197.8L35.1,206c-0.8,0.2-1.7-0.3-1.9-1.2l-5.6-24.7c-0.2-0.8,0.3-1.7,1.2-1.9
                  l36.5-8.2c0.8-0.2,1.7,0.3,1.9,1.2l5.6,24.7C72.9,196.7,72.4,197.6,71.5,197.8z"></path>
                <path id="XMLID_425_5" class="u-fill-primary-lighter" d="M66.8,169.6l-15.9,17.6c-0.4,0.5-1.1,0.6-1.6,0.4l-21.9-9.1L66.8,169.6z"></path>
                <path id="XMLID_424_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M27.7,178.7l21.5,8.9c0.6,0.2,1.2,0.1,1.6-0.4l15.4-17"></path>
                <path id="XMLID_423_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M32.8,202.9l-5.1-22.6c-0.2-0.9,0.4-1.9,1.3-2.1l3.7-0.8"></path>
                <path id="XMLID_422_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M42.4,175.1l22.7-5.1c0.9-0.2,1.9,0.4,2.1,1.3l1.9,8.6"></path>
                <line id="XMLID_421_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="35.8" y1="176.6" x2="40.1" y2="175.7"></line>
              </g>
              <path id="XMLID_419_5" class="u-fill-white" d="M110.5,206.6h-0.4c-1.6-5.5-6.6-9.4-12.6-9.4c-2.6,0-5,0.8-7.1,2.1
                c-1.3-8.6-8.7-15.2-17.7-15.2c-8,0-14.9,5.3-17.1,12.6c-1-0.3-2.1-0.4-3.2-0.4c-6.1,0-11.2,4.5-12.1,10.4h-2
                c-5.1,0-9.2,4.1-9.2,9.2v0.7c0,5.1,4.1,9.2,9.2,9.2h72.1c5.1,0,9.2-4.1,9.2-9.2v-0.7C119.7,210.8,115.5,206.6,110.5,206.6z"></path>
              <path id="XMLID_418_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M119.7,216.5v-0.7c0-5.1-4.1-9.2-9.2-9.2h-0.4c-1.6-5.5-6.6-9.4-12.6-9.4
                c-2.6,0-5,0.8-7.1,2.1c-1.3-8.6-8.7-15.2-17.7-15.2c-8,0-14.9,5.3-17.1,12.6c-1-0.3-2.1-0.4-3.2-0.4c-6.1,0-11.2,4.5-12.1,10.4h-2
                c-5.1,0-9.2,4.1-9.2,9.2v0.7"></path>
              <path id="XMLID_417_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M84.5,197.8c-2.7-4.1-7.3-6.8-12.5-6.8c-2.8,0-5.4,0.8-7.6,2.1"></path>
              <path id="XMLID_416_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M52.7,196.2c3.5,0,6.4,2.9,6.4,6.4"></path>
              <g id="XMLID_410_5">
                <path id="XMLID_415_5" class="u-fill-white" d="M73.1,161.4c0.2,1.4-1.2,2.7-3.1,3.1c-2,0.3-3.7-0.5-4-1.8c-0.2-1.4,1.2-2.7,3.1-3.1
                  C71.1,159.2,72.9,160,73.1,161.4z"></path>
                <path id="XMLID_414_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M73.1,161.4c0.2,1.4-1.2,2.7-3.1,3.1c-2,0.3-3.7-0.5-4-1.8c-0.2-1.4,1.2-2.7,3.1-3.1
                  C71.1,159.2,72.9,160,73.1,161.4z"></path>
                <path id="XMLID_413_5" class="u-fill-white" d="M83.2,161.4c0.2,1.4-1.2,2.7-3.1,3.1c-2,0.3-3.7-0.5-4-1.8c-0.2-1.4,1.2-2.7,3.1-3.1
                  C81.2,159.2,83,160,83.2,161.4z"></path>
                <path id="XMLID_412_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M83.2,161.4c0.2,1.4-1.2,2.7-3.1,3.1c-2,0.3-3.7-0.5-4-1.8c-0.2-1.4,1.2-2.7,3.1-3.1
                  C81.2,159.2,83,160,83.2,161.4z"></path>
                <polyline id="XMLID_411_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" points="73.2,161.7 73.2,149 83.2,149 83.2,161.7       "></polyline>
              </g>
            </g>
            <g id="XMLID_236_5">
              <path id="XMLID_252_5" class="u-fill-white" d="M256.1,241.4l-0.2-44c0-3.3-3-6-6.8-6h-63l0.2,50.1L256.1,241.4z"></path>
              <path id="XMLID_251_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M199,191.4h50c3.7,0,6.8,3,6.8,6.8l0.2,41.2"></path>
              <path id="XMLID_249_5" class="u-fill-primary-lighter" d="M249,241.4h7v-51.9c0-2.7-2.4-4.9-5.4-4.9H249V241.4z"></path>
              <path id="XMLID_248_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M256.1,241.4V190c0-3-2.4-5.4-5.4-5.4H249v56.8"></path>
              <path id="XMLID_240_5" class="u-fill-primary-lighter" opacity=".3" d="M231.7,205.5c4.9,4.9,4.9,12.8,0,17.6c-4.9,4.9-12.8,4.9-17.6,0c-4.9-4.9-4.9-12.8,0-17.6
                C218.9,200.6,226.8,200.6,231.7,205.5z"></path>
              <g id="XMLID_237_5">
                <g id="XMLID_265_5">
                  <circle id="XMLID_266_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" stroke-dasharray="1.9827,1.9827" cx="216.9" cy="220.3" r="12.5"></circle>
                </g>
              </g>
            </g>
            <g id="XMLID_200_5">
              <path id="XMLID_535_5" class="u-fill-primary-lighter" opacity=".3" d="M244.6,117.5h-0.4c-1.9-6.4-7.8-11.1-14.8-11.1c-3.1,0-5.9,0.9-8.3,2.5
                c-1.6-10.1-10.3-17.9-20.9-17.9c-9.5,0-17.5,6.3-20.2,14.9c-1.2-0.3-2.5-0.5-3.8-0.5c-7.2,0-13.2,5.3-14.3,12.2h-2.4
                c-6,0-10.8,4.9-10.8,10.8v0.8c0,6,4.9,10.8,10.8,10.8h85.1c6,0,10.8-4.9,10.8-10.8v-0.8C255.5,122.4,250.6,117.5,244.6,117.5z"></path>
              <path id="XMLID_534_5" class="u-fill-white" d="M234.7,120.2h-0.4c-1.6-5.7-6.9-9.8-13.1-9.8c-2.7,0-5.2,0.8-7.3,2.2
                c-1.4-8.9-9.1-15.8-18.4-15.8c-8.4,0-15.5,5.5-17.8,13.1c-1.1-0.3-2.2-0.5-3.3-0.5c-6.4,0-11.7,4.7-12.6,10.8h-2.1
                c-5.3,0-9.6,4.3-9.6,9.6v0.7c0,5.3,4.3,9.6,9.6,9.6h75.1c5.3,0,9.6-4.3,9.6-9.6v-0.7C244.2,124.5,239.9,120.2,234.7,120.2z"></path>
              <path id="XMLID_533_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M213.9,107.1c-3.1-4.8-8.6-8-14.8-8c-3.3,0-6.3,0.9-9,2.5"></path>
              <path id="XMLID_218_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M159.5,117.5c-6,0-10.8,4.9-10.8,10.8v0.8c0,6,4.9,10.8,10.8,10.8h39.2"></path>
              <path id="XMLID_216_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M231.7,140h13c6,0,10.8-4.9,10.8-10.8v-0.8c0-6-4.9-10.8-10.8-10.8h-0.4
                c-1.9-6.4-7.8-11.1-14.8-11.1c-3.1,0-5.9,0.9-8.3,2.5c-1.6-10.1-10.3-17.9-20.9-17.9c-6.5,0-12.3,2.9-16.2,7.5
                c-0.9,1-1.6,2.1-2.3,3.3c-0.7,1.3-1.3,2.6-1.7,4c-1.2-0.3-2.5-0.5-3.8-0.5c-3.9,0-7.4,1.5-10,4"></path>
              <path id="XMLID_531_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M176.5,105.2c4.2,0,7.5,3.4,7.5,7.5"></path>
            </g>
            <g id="XMLID_184_5">
              <line id="XMLID_186_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="268.3" y1="132" x2="274.8" y2="132"></line>
              <line id="XMLID_185_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="271.6" y1="135.2" x2="271.6" y2="128.7"></line>
            </g>
            <g id="XMLID_179_5">
              <line id="XMLID_183_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="52.5" y1="125" x2="59" y2="125"></line>
              <line id="XMLID_180_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="55.7" y1="128.3" x2="55.7" y2="121.8"></line>
            </g>
            <g id="XMLID_174_5">
              <line id="XMLID_176_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="208.2" y1="82.6" x2="212.8" y2="78"></line>
              <line id="XMLID_175_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="212.8" y1="82.6" x2="208.2" y2="78"></line>
            </g>
            <g id="XMLID_220_5">
              <line id="XMLID_222_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="25.5" y1="161.8" x2="30.1" y2="157.2"></line>
              <line id="XMLID_221_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="30.1" y1="161.8" x2="25.5" y2="157.2"></line>
            </g>
            <line id="XMLID_169_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="99.3" y1="88.6" x2="147.9" y2="88.6"></line>
            <line id="XMLID_201_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="125.8" y1="80.3" x2="202.9" y2="80.3"></line>
            <line id="XMLID_41_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="160.1" y1="88.6" x2="151.7" y2="88.6"></line>
            <line id="XMLID_162_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="240.2" y1="156.6" x2="266.6" y2="156.6"></line>
            <line id="XMLID_161_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="274.3" y1="156.6" x2="268.9" y2="156.6"></line>
            <line id="XMLID_204_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="12.1" y1="125" x2="38.5" y2="125"></line>
            <line id="XMLID_202_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="46.2" y1="125" x2="40.8" y2="125"></line>
            <path id="XMLID_160_5" class="u-fill-primary" d="M58.2,90.9c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
              C57.4,89.3,58.2,90,58.2,90.9z"></path>
            <path id="XMLID_211_5" class="u-fill-primary" d="M99.1,139.8c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2
              C98.2,137.8,99.1,138.7,99.1,139.8z"></path>
            <path id="XMLID_212_5" class="u-fill-primary" d="M259.3,95.1c0,1.1-0.9,2-2,2c-1.1,0-2-0.9-2-2s0.9-2,2-2C258.4,93.1,259.3,94,259.3,95.1z"></path>
            <path id="XMLID_226_5" class="u-fill-primary" opacity=".3" d="M118.7,177.3l-17-5.4v53.7h8.7c5.1,0,9.2-4.1,9.2-9.2h1.1v-0.7c0-5.1-3.7-9.3-8.6-10.2l1-3.1
              l1.1,0.3l6.7-21.3C121.6,179.8,120.5,177.9,118.7,177.3z"></path>
            <g id="XMLID_156_5">
              <path id="XMLID_250_5" class="u-fill-primary-lighter" d="M170.1,241.4h-59.3c-2.7,0-4.9-2.2-4.9-4.9V118.4c0-2.7,2.2-4.9,4.9-4.9h59.3
                c2.7,0,4.9,2.2,4.9,4.9v118.1C175.1,239.2,172.9,241.4,170.1,241.4z"></path>
              <line id="XMLID_158_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="116.3" y1="113.5" x2="120.7" y2="113.5"></line>
              <path id="XMLID_199_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M175.1,180.4v55.1c0,3.2-2.6,5.9-5.9,5.9h-57.4c-3.2,0-5.9-2.6-5.9-5.9V119.4
                c0-3.2,2.6-5.9,5.9-5.9h1.7"></path>
              <path id="XMLID_193_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M122.8,113.5h46.4c3.2,0,5.9,2.6,5.9,5.9v4.1"></path>
              <line id="XMLID_247_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="130.3" y1="122" x2="150.7" y2="122"></line>
              <path id="XMLID_246_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M144.9,233.4c0,2.5-2,4.4-4.4,4.4c-2.5,0-4.4-2-4.4-4.4c0-2.5,2-4.4,4.4-4.4
                C143,229,144.9,231,144.9,233.4z"></path>
              <rect id="XMLID_245_5" x="109.6" y="126.1" class="u-fill-white" width="60.9" height="100.3"></rect>
              <path id="XMLID_244_5" class="u-fill-primary-lighter" d="M127.1,219.9h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C127.5,219.7,127.3,219.9,127.1,219.9z"></path>
              <path id="XMLID_242_5" class="u-fill-primary-lighter" opacity=".3" d="M162.5,219.9h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C162.9,219.7,162.7,219.9,162.5,219.9z"></path>
              <path id="XMLID_215_5" class="u-fill-primary" d="M127.5,202.8h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C127.9,202.6,127.7,202.8,127.5,202.8z"></path>
              <path id="XMLID_214_5" class="u-fill-primary-lighter" d="M145.2,202.8h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C145.6,202.6,145.4,202.8,145.2,202.8z"></path>
              <path id="XMLID_203_5" class="u-fill-primary" d="M162.9,202.8H152c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C163.2,202.6,163.1,202.8,162.9,202.8z"></path>
              <path id="XMLID_217_5" class="u-fill-primary-lighter" d="M145.5,185.6h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C145.9,185.5,145.7,185.6,145.5,185.6z"></path>
              <path id="XMLID_233_5" class="u-fill-primary" d="M127.5,168.6h-10.9c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C127.9,168.4,127.7,168.6,127.5,168.6z"></path>
              <path id="XMLID_235_5" class="u-fill-primary-lighter" d="M144.8,151.5H134c-0.2,0-0.4-0.2-0.4-0.4v-10.9c0-0.2,0.2-0.4,0.4-0.4h10.9
                c0.2,0,0.4,0.2,0.4,0.4v10.9C145.2,151.3,145,151.5,144.8,151.5z"></path>
            </g>
            <path id="XMLID_227_5" class="u-fill-primary" opacity=".3" d="M164.5,134.3c-8.9,8.9-10.6,23-4.1,33.8l-7.3,15c-0.3,0.6-0.2,1.4,0.3,1.8
              c0.3,0.3,0.7,0.5,1.1,0.5c0.2,0,0.5-0.1,0.7-0.2l14.9-7.5c1.6,0.9,3.2,1.6,4.9,2.2v-52.3C171.1,129,167.5,131.2,164.5,134.3z"></path>
            <g id="XMLID_157_5">
              <path id="XMLID_219_5" class="u-fill-white" d="M203.5,170.3c10.3-10.3,10.3-27.1,0-37.5c-10.3-10.3-27.1-10.3-37.5,0
                c-8.9,8.9-10.1,22.7-3.7,32.9l-7.5,15.6c-0.2,0.4,0.2,0.8,0.6,0.6l15.5-7.8C181.2,180.4,194.7,179.1,203.5,170.3z"></path>
              <path id="XMLID_192_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M206.3,136.1c-0.8-1.2-1.8-2.3-2.8-3.3c-10.3-10.3-27.1-10.3-37.5,0
                c-8.9,8.9-10.1,22.7-3.7,32.9l-7.5,15.6c-0.2,0.4,0.2,0.8,0.6,0.6l15.5-7.8c10.2,6.2,23.7,5,32.5-3.9c1.2-1.2,2.3-2.5,3.2-3.9"></path>
              <line id="XMLID_163_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="166.2" y1="140" x2="174" y2="140"></line>
              <line id="XMLID_159_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="215.3" y1="140" x2="175.9" y2="140"></line>
              <line id="XMLID_166_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="184.8" y1="145.4" x2="170.9" y2="145.4"></line>
              <line id="XMLID_170_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="177.8" y1="150.8" x2="167.8" y2="150.8"></line>
              <line id="XMLID_171_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="180.7" y1="150.8" x2="217.6" y2="150.8"></line>
              <line id="XMLID_172_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="169.1" y1="156.6" x2="189.2" y2="156.6"></line>
              <line id="XMLID_190_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="169.1" y1="162.7" x2="177.8" y2="162.7"></line>
              <line id="XMLID_191_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="226.7" y1="162.7" x2="180.7" y2="162.7"></line>
              <line id="XMLID_173_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="202.5" y1="156.6" x2="191.5" y2="156.6"></line>
              <line id="XMLID_167_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="194.1" y1="145.4" x2="187.1" y2="145.4"></line>
              <line id="XMLID_164_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="217.6" y1="140" x2="226.7" y2="140"></line>
            </g>
            <g id="XMLID_231_5">
              <path id="XMLID_259_5" class="u-fill-light-blue-100" d="M112.6,239.5v-17.6c0-0.8-0.6-1.4-1.4-1.4h-90c-0.8,0-1.4,0.6-1.4,1.4v17.6
                c0,0.8,0.6,1.4,1.4,1.4h90C112,240.9,112.6,240.2,112.6,239.5z"></path>
              <path id="XMLID_258_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M112.6,239.5v-17.6c0-0.8-0.6-1.4-1.4-1.4h-90c-0.8,0-1.4,0.6-1.4,1.4v17.6
                c0,0.8,0.6,1.4,1.4,1.4h90C112,240.9,112.6,240.2,112.6,239.5z"></path>
              <line id="XMLID_257_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="30.2" y1="220.5" x2="30.2" y2="232.9"></line>
              <line id="XMLID_256_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="39" y1="220.5" x2="39" y2="226.7"></line>
              <line id="XMLID_255_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="47.8" y1="220.5" x2="47.8" y2="226.7"></line>
              <line id="XMLID_254_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="56.5" y1="220.5" x2="56.5" y2="226.7"></line>
              <line id="XMLID_241_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="65.3" y1="220.5" x2="65.3" y2="232.9"></line>
              <line id="XMLID_239_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="74.1" y1="220.5" x2="74.1" y2="226.7"></line>
              <line id="XMLID_238_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="82.9" y1="220.5" x2="82.9" y2="226.7"></line>
              <line id="XMLID_234_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="91.6" y1="220.5" x2="91.6" y2="226.7"></line>
              <line id="XMLID_232_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="100.4" y1="220.5" x2="100.4" y2="232.9"></line>
            </g>
            <g id="XMLID_243_5">
              <path id="XMLID_274_5" class="u-fill-primary-lighter" d="M263.5,164.9c0,0,6.7,6.4,6.7,12.1c0,5.6-6.7,12.1-6.7,12.1s-6.7-6.4-6.7-12.1
                C256.7,171.4,263.5,164.9,263.5,164.9z"></path>
              <path id="XMLID_273_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M263.5,164.9c0,0,6.7,6.4,6.7,12.1c0,5.6-6.7,12.1-6.7,12.1s-6.7-6.4-6.7-12.1
                C256.7,171.4,263.5,164.9,263.5,164.9z"></path>
              <line id="XMLID_272_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="263.5" y1="240.9" x2="263.5" y2="164.9"></line>
              <line id="XMLID_269_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="263.5" y1="176.1" x2="258.3" y2="170.7"></line>
              <line id="XMLID_268_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="263.3" y1="183.4" x2="256.7" y2="176.1"></line>
              <line id="XMLID_260_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="263.3" y1="176.1" x2="268.4" y2="170.7"></line>
              <line id="XMLID_253_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="263.4" y1="183.4" x2="270" y2="176.1"></line>
            </g>
          </g>
          <g>
            <g id="XMLID_382_5">
              <path id="XMLID_432_5" class="u-fill-primary-lighter" d="M556.6,187.6h-68.5c-0.8,0-1.4,0.6-1.4,1.4v52.1h68.5c1.6,0,2.9-1.3,2.9-2.9v-49.2
                C558.1,188.3,557.5,187.6,556.6,187.6z"></path>
              <path id="XMLID_431_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M531.6,187.6h-42.1c-1.5,0-2.8,1.2-2.8,2.8v50.8h65.8c3.1,0,5.6-2.5,5.6-5.6v-45.1
                c0-1.6-1.3-2.9-2.9-2.9h-4.4"></path>
              <g id="XMLID_48_5">
                <path id="XMLID_52_5" class="u-fill-white" d="M532.6,167.6l14.2,14.2v49.7c0,2.2-1.8,4.1-4.1,4.1h-42.5c-2.2,0-4.1-1.8-4.1-4.1v-59.8
                  c0-2.2,1.8-4.1,4.1-4.1H532.6z"></path>
                <polygon id="XMLID_51_5" class="u-fill-primary-lighter" points="532.6,181.8 532.6,167.6 546.8,181.8       "></polygon>
                <path id="XMLID_50_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M546.8,181.8H534c-0.8,0-1.4-0.6-1.4-1.4v-12.8"></path>
                <path id="XMLID_49_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M496.2,190.8v-19.2c0-2.2,1.8-4.1,4.1-4.1h32.3l14.2,14.2v49.7c0,2.2-1.8,4.1-4.1,4.1h-42.5"></path>
              </g>
              <g id="XMLID_405_5">
                <path id="XMLID_47_5" class="u-fill-primary-lighter" opacity=".3" d="M540.8,163.4l14.2,14.2v49.7c0,2.2-1.8,4.1-4.1,4.1h-42.5c-2.2,0-4.1-1.8-4.1-4.1v-59.8
                  c0-2.2,1.8-4.1,4.1-4.1H540.8z"></path>
                <polygon id="XMLID_46_5" class="u-fill-primary-lighter" points="540.8,177.6 540.8,163.4 555.1,177.6       "></polygon>
                <path id="XMLID_45_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M555.1,177.6h-12.8c-0.8,0-1.4-0.6-1.4-1.4v-12.8"></path>
                <line id="XMLID_44_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="548.2" y1="184.6" x2="512" y2="184.6"></line>
                <line id="XMLID_43_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="548.2" y1="192.7" x2="512" y2="192.7"></line>
                <line id="XMLID_40_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="548.2" y1="200.7" x2="512" y2="200.7"></line>
                <line id="XMLID_39_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="548.2" y1="208.8" x2="512" y2="208.8"></line>
                <path id="XMLID_407_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M504.5,196.2v-28.7c0-2.2,1.8-4.1,4.1-4.1h32.3l14.2,14.2v49.7c0,2.2-1.8,4.1-4.1,4.1h-1.9"></path>
              </g>
              <g id="XMLID_386_5">
                <path id="XMLID_401_5" class="u-fill-white" d="M549.1,169.6l14.2,14.2v49.6c0,2.2-1.8,4.1-4.1,4.1h-42.5c-2.2,0-4.1-1.8-4.1-4.1v-59.8
                  c0-2.2,1.8-4.1,4.1-4.1H549.1z"></path>
                <polygon id="XMLID_400_5" class="u-fill-primary-lighter" points="549.1,183.9 549.1,169.6 563.3,183.9      "></polygon>
                <path id="XMLID_393_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M563.3,183.9h-12.8c-0.8,0-1.4-0.6-1.4-1.4v-12.8"></path>
                <line id="XMLID_37_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="556.5" y1="190.8" x2="520.3" y2="190.8"></line>
                <line id="XMLID_390_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="556.5" y1="198.9" x2="520.3" y2="198.9"></line>
                <line id="XMLID_389_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="556.5" y1="206.9" x2="520.3" y2="206.9"></line>
                <line id="XMLID_388_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="556.5" y1="215" x2="520.3" y2="215"></line>
                <path id="XMLID_387_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M512.7,196.2v-22.5c0-2.2,1.8-4.1,4.1-4.1h32.3l14.2,14.2v49.6c0,2.2-1.8,4.1-4.1,4.1H552"></path>
              </g>
              <path id="XMLID_385_5" class="u-fill-white" d="M552.4,241.2h-68.1c-1.6,0-3-1.3-3-3v-42.3c0-1.4,1.1-2.5,2.5-2.5h11.6
                c0.8,0,1.6,0.4,2.1,1.2l3,4.8h43.3c1.6,0,2.8,1.3,2.8,2.8v33.2C546.7,238.1,548.6,241.2,552.4,241.2z"></path>
              <path id="XMLID_36_5" class="u-fill-primary-lighter" d="M546.7,235.5v-4.8h-65.4v7.6c0,1.6,1.3,3,3,3h68.1C548.6,241.2,546.7,238.1,546.7,235.5z"></path>
              <path id="XMLID_433_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M481.3,240.9v-45c0-1.4,1.1-2.5,2.5-2.5h11.6c0.8,0,1.6,0.4,2.1,1.2l3,4.8h43.3
                c1.6,0,2.8,1.3,2.8,2.8v33.2c0,2.7,1.9,5.7,5.7,5.7"></path>
            </g>
            <line id="XMLID_72_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="228.3" y1="109" x2="270.1" y2="109"></line>
            <line id="XMLID_398_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="368.4" y1="7.6" x2="321.2" y2="7.6"></line>
            <line id="XMLID_437_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="550.9" y1="89.9" x2="641.7" y2="89.9"></line>
            <line id="XMLID_71_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="282.2" y1="109" x2="273.7" y2="109"></line>
            <line id="XMLID_436_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="429.7" y1="22.2" x2="471.5" y2="22.2"></line>
            <line id="XMLID_70_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="483.6" y1="22.2" x2="475.1" y2="22.2"></line>
            <path id="XMLID_442_5" class="u-fill-primary" d="M557.6,43.1c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8
              C556.7,41.3,557.6,42.1,557.6,43.1z"></path>
            <g id="XMLID_53_5">
              <path id="XMLID_68_5" class="u-fill-white" d="M504,241.2H303.5c-4.2,0-7.5-3.4-7.5-7.5v-21.8c0-4.2,3.4-7.5,7.5-7.5H504
                c4.2,0,7.5,3.4,7.5,7.5v21.8C511.5,237.8,508.2,241.2,504,241.2z"></path>

                <ellipse id="XMLID_299_5" transform="matrix(0.7341 -0.6791 0.6791 0.7341 -28.8892 278.2329)" class="u-fill-white" cx="340.8" cy="176" rx="28.2" ry="28.2"></ellipse>
              <path id="XMLID_298_5" class="u-fill-white" d="M321.2,180.3c0,6.2-5,11.2-11.2,11.2c-6.2,0-11.2-5-11.2-11.2c0-6.2,5-11.2,11.2-11.2
                C316.2,169.1,321.2,174.1,321.2,180.3z"></path>
              <path id="XMLID_67_5" class="u-fill-white" d="M315.8,193c0,9.1-7.4,16.4-16.4,16.4c-9.1,0-16.4-7.4-16.4-16.4c0-9.1,7.4-16.4,16.4-16.4
                C308.4,176.5,315.8,183.9,315.8,193z"></path>
              <path id="XMLID_66_5" class="u-fill-white" d="M318.2,218.9c0,12.3-10,22.2-22.2,22.2c-12.3,0-22.2-10-22.2-22.2c0-12.3,10-22.2,22.2-22.2
                C308.2,196.7,318.2,206.6,318.2,218.9z"></path>
              <path id="XMLID_278_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M295.9,241.2c-12.3,0-22.2-10-22.2-22.2c0-7.5,3.7-14.2,9.5-18.2"></path>
              <path id="XMLID_65_5" class="u-fill-white" d="M375.3,198.5c0,5.2-4.2,9.3-9.3,9.3c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3
                C371.1,189.2,375.3,193.3,375.3,198.5z"></path>

                <ellipse id="XMLID_64_5" transform="matrix(0.1597 -0.9872 0.9872 0.1597 216.8453 604.3791)" class="u-fill-white" cx="463.4" cy="174.8" rx="25.7" ry="25.7"></ellipse>
              <path id="XMLID_435_5" class="u-fill-white" d="M493.6,189.2c-0.8,9.1-7.4,16.4-16.4,16.4c-9.1,0-16.4-7.4-16.4-16.4s7.4-16.4,16.4-16.4
                C486.2,172.7,494.4,180.1,493.6,189.2z"></path>
              <path id="XMLID_284_5" class="u-fill-white" d="M477.1,200.5c-0.8,9.1-7.4,16.4-16.4,16.4s-16.4-7.4-16.4-16.4c0-9.1,7.4-16.4,16.4-16.4
                S477.9,191.5,477.1,200.5z"></path>
              <path id="XMLID_285_5" class="u-fill-white" d="M364.1,200.7c-1.6,9.1-14,16.4-31.3,16.4c-17.3,0-31.3-7.4-31.3-16.4
                c0-9.1,14-16.4,31.3-16.4C350.1,184.3,365.7,191.7,364.1,200.7z"></path>
              <path id="XMLID_63_5" class="u-fill-white" d="M526.3,193.1c-1.2,13.3-10.8,24-24,24s-24-10.8-24-24s10.8-24,24-24S527.5,179.9,526.3,193.1z
                "></path>
              <path id="XMLID_62_5" class="u-fill-white" d="M519.8,218c-1.2,12.8-10.4,23.2-23.2,23.2c-12.8,0-23.2-10.4-23.2-23.2
                c0-12.8,10.4-23.2,23.2-23.2C509.4,194.8,520.9,205.2,519.8,218z"></path>
              <path id="XMLID_292_5" class="u-fill-white" d="M456.7,191.8c0,8.3-6.8,15.1-15.1,15.1c-8.3,0-15.1-6.8-15.1-15.1c0-8.3,6.8-15.1,15.1-15.1
                C449.9,176.8,456.7,183.5,456.7,191.8z"></path>
              <path id="XMLID_290_5" class="u-fill-white" d="M437.2,205.1c0,4.9-3.9,8.8-8.8,8.8c-4.9,0-8.8-3.9-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8
                C433.3,196.3,437.2,200.2,437.2,205.1z"></path>
              <path id="XMLID_289_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M418.9,205.9c0-4.9,3.9-8.8,8.8-8.8"></path>
              <path id="XMLID_288_5" class="u-fill-white" d="M401.1,210.7c0,5.6-7.9,10.2-17.5,10.2c-9.7,0-17.5-4.6-17.5-10.2c0-5.6,7.9-10.2,17.5-10.2
                C393.2,200.5,401.1,205.1,401.1,210.7z"></path>
              <path id="XMLID_434_5" class="u-fill-white" d="M502.8,169.9c0,6.5-11.1,23.9-11.1,15.9c0-6.5-11.8-5.3-11.8-11.8c0-6.5,5.3-11.8,11.8-11.8
                C498.3,162.2,502.8,163.3,502.8,169.9z"></path>
              <path id="XMLID_61_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M487,163.1c1.4-0.6,3-1,4.7-1c4.8,0,8.9,2.9,10.8,6.9"></path>
              <path id="XMLID_282_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M445.3,193c-4.6-4.6-7.5-11.1-7.5-18.2c0-7.1,2.9-13.5,7.5-18.2c4.6-4.6,11.1-7.5,18.2-7.5
                c7.1,0,13.5,2.9,18.2,7.5c4.6,4.6,7.5,11.1,7.5,18.2"></path>
              <g id="XMLID_281_5">
                <rect id="XMLID_449_5" x="385.3" y="103.2" class="u-fill-white" width="29.9" height="12.6"></rect>
                <rect id="XMLID_710_5" x="385.3" y="103.2" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" width="29.9" height="12.6"></rect>
                <path id="XMLID_516_5" class="u-fill-primary-lighter" d="M354.3,103.4h28.3V41.8l-10.4,14.1c-3,4.1-6.5,7.7-10.2,11.2c-4.9,4.7-7.7,11.2-7.7,18.2
                  V103.4z"></path>
                <polygon id="XMLID_714_5" class="u-fill-primary" opacity=".3" points="373.5,54 373.5,103.4 382.6,103.4 382.6,41.8      "></polygon>
                <path id="XMLID_513_5" class="u-fill-primary-lighter" d="M444.8,104.6h-28.3V43l10.4,14.1c3,4.1,6.5,7.7,10.2,11.2c4.9,4.7,7.7,11.2,7.7,18.2V104.6z
                  "></path>
                <polygon id="XMLID_712_5" class="u-fill-primary" opacity=".3" points="426.4,53.1 426.4,102.4 417.4,102.4 417.4,40.8      "></polygon>
                <path id="XMLID_549_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M354.3,103.4h28.3V41.8l-10.4,14.1c-3,4.1-6.5,7.7-10.2,11.2c-4.9,4.7-7.7,11.2-7.7,18.2
                  V103.4z"></path>
                <path id="XMLID_548_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M444.8,103.4h-28.3V41.8l10.4,14.1c3,4.1,6.5,7.7,10.2,11.2c4.9,4.7,7.7,11.2,7.7,18.2
                  V103.4z"></path>
                <path id="XMLID_511_5" class="u-fill-white" d="M419.3,109.5h-38.9V28.9c0-9.4,4.4-18.3,11.8-24l3.5-2.7c2.5-1.9,5.9-1.9,8.4,0l3.8,2.9
                  c7.2,5.6,11.5,14.2,11.5,23.4V109.5z"></path>
                <path id="XMLID_509_5" class="u-fill-primary" d="M389.9,7.3l4.6-3.6c3.3-2.5,7.9-2.5,11.1,0l5.1,3.9L389.9,7.3z"></path>
                <path id="XMLID_715_5" class="u-fill-primary" opacity=".25" d="M400.7,4.9l3.4-2.6L404,2.2c-2.5-1.9-5.9-1.9-8.4,0l-3.5,2.7c-7.4,5.8-11.8,14.6-11.8,24
                  v80.6h8.6V28.9C388.9,19.5,393.3,10.6,400.7,4.9z"></path>
                <path id="XMLID_465_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M389.9,45.6c0-5.5,4.4-9.9,9.9-9.9c5.5,0,9.9,4.4,9.9,9.9"></path>
                <path id="XMLID_517_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M419.3,109.5h-38.9V28.9c0-9.4,4.4-18.3,11.8-24l3.5-2.7c2.5-1.9,5.9-1.9,8.4,0l3.8,2.9
                  c7.2,5.6,11.5,14.2,11.5,23.4V109.5z"></path>
              </g>
              <path id="XMLID_440_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M441.6,206.9c-8.3,0-15.1-6.8-15.1-15.1c0-7,4.8-12.9,11.2-14.6"></path>
              <path id="XMLID_279_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M312.6,176c0-15.6,12.6-28.2,28.2-28.2S369,160.4,369,176c0,10.5-5.7,19.6-14.2,24.5"></path>
              <path id="XMLID_60_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M304.8,170.4c1.6-0.8,3.4-1.3,5.3-1.3c1.1,0,2.3,0.2,3.3,0.5"></path>
              <path id="XMLID_277_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M366,189.2c5.2,0,9.3,4.2,9.3,9.3c0,5.2-4.2,9.3-9.3,9.3"></path>
              <path id="XMLID_276_5" class="u-fill-white" d="M437.1,220.1h-66.5l19.2-21.7v-80.1h20.6l-0.9,73.1c-0.1,4.4,1.9,8.6,5.4,11.3L437.1,220.1z"></path>
              <path id="XMLID_514_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M410.1,118.4v76.2c0,4.4,3.6,8,8,8h2.1"></path>
              <path id="XMLID_512_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M375.3,200.7h7.3c4,0,7.3-3.3,7.3-7.3v-75"></path>
              <path id="XMLID_275_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M380.8,235.4c0-1.6,0.3-3.1,0.8-4.5c0.6-1.4,1.4-2.7,2.5-3.9c1.1-1.1,2.4-2.1,3.9-2.7
                c1.5-0.7,3.1-1,4.7-1c1.6,0,3.1,0.3,4.5,0.8c1.4,0.6,2.7,1.4,3.9,2.5"></path>
              <path id="XMLID_59_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M321.2,206.6c0-1.6,0.3-3.1,0.8-4.5c0.6-1.4,1.4-2.7,2.5-3.9c1.1-1.1,2.4-2.1,3.9-2.7
                c1.5-0.7,3.1-1,4.7-1c1.6,0,3.1,0.3,4.5,0.8c1.4,0.6,2.7,1.4,3.9,2.5"></path>
              <path id="XMLID_58_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M456.7,184.4c1.4-0.6,2.9-1,4.5-1s3.1,0.2,4.5,0.7c1.5,0.5,2.8,1.4,4,2.5
                c1.2,1.1,2.1,2.5,2.7,3.9c0.6,1.4,1,2.9,1,4.5c0,1.5-0.2,3.1-0.7,4.5"></path>
              <path id="XMLID_57_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M394.3,223.7c0.2-1.5,0.7-3.1,1.6-4.5c0.8-1.4,1.9-2.6,3.2-3.5c1.3-0.9,2.7-1.6,4.1-2
                c1.5-0.4,3-0.5,4.6-0.3"></path>
              <path id="XMLID_286_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M473.5,226.1c0.2-1.5,0.7-3.1,1.6-4.5c0.8-1.4,1.9-2.6,3.2-3.5c1.3-0.9,2.7-1.6,4.1-2
                c1.5-0.4,3-0.5,4.6-0.3"></path>
              <path id="XMLID_271_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M434.7,239.5c-1.5-0.5-2.9-1.3-4.1-2.4c-1.2-1.1-2.2-2.4-2.9-3.8s-1.1-2.9-1.2-4.4
                c-0.1-1.5,0.1-3.1,0.6-4.6"></path>
              <path id="XMLID_56_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M287.7,204.6c-3-3-4.8-7.1-4.8-11.6c0-9.1,7.4-16.4,16.4-16.4c4,0,7.6,1.4,10.4,3.7"></path>
              <path id="XMLID_55_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M496.7,169.8c1.8-0.4,3.7-0.7,5.7-0.7c13.3,0,25.2,10.8,24,24c-0.9,9.6-6.1,17.9-13.9,21.7"></path>
              <path id="XMLID_54_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M519,210.5c0.7,2.3,1,4.9,0.8,7.5c-1.2,12.8-10.4,23.2-23.2,23.2"></path>
            </g>
          </g>
          <g id="XMLID_42_5">
            <g id="XMLID_392_5">
              <line id="XMLID_397_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="792.3" y1="133.5" x2="799.7" y2="133.5"></line>
              <line id="XMLID_396_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="796" y1="137.2" x2="796" y2="129.8"></line>
            </g>
            <g id="XMLID_360_5">
              <line id="XMLID_365_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="721" y1="90.1" x2="726.2" y2="84.9"></line>
              <line id="XMLID_364_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-linecap="round" stroke-miterlimit="10" x1="726.2" y1="90.1" x2="721" y2="84.9"></line>
            </g>
            <line id="XMLID_322_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="740.2" y1="133.5" x2="770.1" y2="133.5"></line>
            <line id="XMLID_321_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="544.4" y1="81.3" x2="490.9" y2="81.3"></line>
            <line id="XMLID_320_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="652.7" y1="87.5" x2="717.7" y2="87.5"></line>
            <line id="XMLID_318_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="778.8" y1="133.5" x2="772.7" y2="133.5"></line>
            <line id="XMLID_297_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="608.1" y1="75.5" x2="638" y2="75.5"></line>
            <line id="XMLID_296_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="646.7" y1="75.5" x2="640.6" y2="75.5"></line>
            <path id="XMLID_287_5" class="u-fill-primary" d="M747.7,166.6c0,1.3-1,2.3-2.3,2.3c-1.3,0-2.3-1-2.3-2.3s1-2.3,2.3-2.3
              C746.6,164.2,747.7,165.3,747.7,166.6z"></path>
            <g id="XMLID_25_5">
              <rect id="XMLID_267_5" x="603.8" y="100.4" class="u-fill-white" width="111.2" height="140.3"></rect>
              <rect id="XMLID_263_5" x="603.8" y="100.4" class="u-fill-primary-lighter" width="111.2" height="22.9"></rect>
              <rect id="XMLID_262_5" x="603.8" y="126.9" class="u-fill-primary-lighter" width="111.2" height="3.9"></rect>
              <polyline id="XMLID_261_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" points="603.8,176.1 603.8,100.4 715.1,100.4 715.1,196.7     "></polyline>
              <path id="XMLID_31_5" class="u-fill-white" d="M619.8,112.7c0,1.8-1.4,3.2-3.2,3.2c-1.8,0-3.2-1.4-3.2-3.2c0-1.8,1.4-3.2,3.2-3.2
                C618.4,109.6,619.8,111,619.8,112.7z"></path>
              <line id="XMLID_30_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="649.8" y1="112.7" x2="696.1" y2="112.7"></line>
              <line id="XMLID_29_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="618.8" y1="139.2" x2="699.5" y2="139.2"></line>
              <line id="XMLID_28_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="618.8" y1="146.4" x2="699.5" y2="146.4"></line>
              <line id="XMLID_27_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="618.8" y1="153.7" x2="699.5" y2="153.7"></line>
              <line id="XMLID_26_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="618.8" y1="160.9" x2="663.5" y2="160.9"></line>
            </g>
            <path id="XMLID_230_5" class="u-fill-primary" opacity=".3" d="M743.5,198.1h-63.7c-2.2,0-4,1.8-4,4V238c0,2.2,1.8,4,4,4h63.7c2.2,0,4-1.8,4-4V202
              C747.4,199.8,745.7,198.1,743.5,198.1z"></path>
            <g id="XMLID_20_5">
              <path id="XMLID_229_5" class="u-fill-white" d="M748,240.6h-65.9c-0.9,0-1.6-0.7-1.6-1.6v-38.2c0-0.9,0.7-1.6,1.6-1.6H748
                c0.9,0,1.6,0.7,1.6,1.6v38.2C749.6,239.9,748.9,240.6,748,240.6z"></path>
              <path id="XMLID_24_5" class="u-fill-white" d="M749.6,199.3l-33.3,19.8c-0.7,0.5-1.7,0.5-2.4,0l-33.3-19.8H749.6z"></path>
              <polygon id="XMLID_23_5" class="u-fill-primary-lighter" points="749.6,199.3 680.5,199.3 692.8,206.6 737.4,206.6     "></polygon>
              <polygon id="XMLID_22_5" class="u-fill-primary-lighter" points="729.2,211.5 733.7,208.8 696.5,208.8 701,211.5     "></polygon>
              <path id="XMLID_223_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M681.1,199.7l32.8,19.4c0.7,0.5,1.7,0.5,2.4,0l32.4-19.2"></path>
              <path id="XMLID_21_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M680.5,229.4V202c0-1.5,1.2-2.7,2.7-2.7h63.7c1.5,0,2.7,1.2,2.7,2.7v10.1"></path>
            </g>
            <g id="XMLID_15_5">
              <path id="XMLID_19_5" class="u-fill-white" d="M775.1,216.4v23.1c0,0.6-0.5,1.1-1.1,1.1h-44.2c-0.6,0-1.1-0.5-1.1-1.1v-23.1
                c0-0.6,0.5-1.1,1.1-1.1H774C774.6,215.3,775.1,215.8,775.1,216.4z"></path>
              <rect id="XMLID_18_5" x="728.7" y="215.2" class="u-fill-primary-lighter" width="46.4" height="9"></rect>
              <rect id="XMLID_17_5" x="728.7" y="225.9" class="u-fill-primary-lighter" width="46.4" height="2"></rect>
              <path id="XMLID_16_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M775.1,216.4v23.1c0,0.6-0.5,1.1-1.1,1.1h-44.2c-0.6,0-1.1-0.5-1.1-1.1v-23.1
                c0-0.6,0.5-1.1,1.1-1.1H774C774.6,215.3,775.1,215.8,775.1,216.4z"></path>
            </g>
            <path id="XMLID_14_5" class="u-fill-primary" opacity=".3" d="M622.7,177.8h-15.8v1.3h-3.8v-1.3h-5.4v1.3h-3.2v-1.3h-3.3c-2.6,0-4.7,2.1-4.7,4.7v54
              c0,2.6,2.1,4.7,4.7,4.7h31.4c2.6,0,4.7-2.1,4.7-4.7v-54C627.4,179.9,625.3,177.8,622.7,177.8z"></path>
            <g id="XMLID_7_5">
              <g id="XMLID_8_5">
                <path id="XMLID_13_5" class="u-fill-white" d="M621.5,240h-34.3c-1.1,0-2-0.9-2-2v-56.9c0-1.1,0.9-2,2-2h34.3c1.1,0,2,0.9,2,2V238
                  C623.5,239.1,622.6,240,621.5,240z"></path>
                <path id="XMLID_12_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M585.3,239.1v-56.6c0-1.9,1.5-3.4,3.4-3.4h3.3"></path>
                <path id="XMLID_209_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M604.3,179.1h15.8c1.9,0,3.4,1.5,3.4,3.4v47.1"></path>
                <line id="XMLID_208_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="595.1" y1="179.1" x2="600.5" y2="179.1"></line>
                <line id="XMLID_207_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="598.7" y1="183.7" x2="610.1" y2="183.7"></line>
                <path id="XMLID_206_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M606.2,235c0,1-0.8,1.8-1.8,1.8s-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8S606.2,234,606.2,235z
                  "></path>
                <rect id="XMLID_11_5" x="589.1" y="187.9" class="u-fill-primary-lighter" opacity=".3" width="30.6" height="43.1"></rect>
                <rect id="XMLID_10_5" x="589.1" y="187.9" class="u-fill-primary-lighter" width="30.6" height="13.6"></rect>
                <rect id="XMLID_9_5" x="589.1" y="204.1" class="u-fill-primary-lighter" width="30.6" height="3"></rect>
              </g>
            </g>
            <g id="XMLID_1_5">
              <path id="XMLID_6_5" class="u-fill-primary-lighter" opacity=".3" d="M706.3,239.8v-6c0-0.5-0.4-0.8-0.8-0.8h-87.1c-0.1,0-0.2,0-0.3,0.1l-6.5,3
                c-0.6,0.3-0.6,1.2,0,1.5l6.5,3c0.1,0.1,0.2,0.1,0.3,0.1h87.1C705.9,240.6,706.3,240.3,706.3,239.8z"></path>
              <rect id="XMLID_5_5" x="621.2" y="232.9" class="u-fill-white" width="76.8" height="7.7"></rect>
              <rect id="XMLID_4_5" x="621.2" y="233" class="u-fill-primary-lighter" width="76.8" height="3.6"></rect>
              <path id="XMLID_3_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" d="M706.3,240.6v-7.7h-88.1l-7.4,3.4c-0.4,0.2-0.4,0.7,0,0.9l7.4,3.4H706.3z"></path>
              <line id="XMLID_2_5" class="u-fill-none u-stroke-primary" stroke-width="1.5" stroke-miterlimit="10" x1="621.2" y1="232.7" x2="621.2" y2="240.6"></line>
            </g>
          </g>
        </svg>
      </figure>
    </div>


<div class="position-relative u-gradient-half-primary-v1 u-space-3-top u-space-4-bottom">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-9 col-lg-7 col-xl-6 offset-xl-2">
            <!-- Title -->
            <div class="text-center mb-4">
              <span class="u-label u-label--sm u-label--white mb-2">Subscribe</span>
              <h2 class="h1 text-white"><span class="font-weight-bold">Cách </span> đơn giản</h2>
              <p class="lead u-text-light">Nhập email để trở thành cộng đồng của chúng tôi. Các thông tin mới nhất từ chúng tôi sẽ chuyển đến bạn ngay lập tức.</p>
            </div>
            <!-- End Title -->

            <!-- Form -->
            <form class="js-validate js-form-message mb-2" novalidate="novalidate">
              <div class="js-focus-state input-group input-group-lg u-form u-form--lg u-form--white-brd">
                <input class="form-control u-form__input" name="email" required="" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success" type="email">
                <div class="input-group-append u-form__append">
                  <button type="submit" class="btn btn-warning u-btn-wide">Gia nhập</button>
                </div>
              </div>
            </form>
            <!-- End Form -->

            <!-- Info -->
            <div class="d-block d-xl-none">
              <p class="small u-text-light mb-0">Be the lucky user to earn <span class="text-white font-weight-bold">$1000</span> bonus now!</p>
            </div>
            <!-- End Info -->
          </div>

          <div class="col-xl-2 d-none d-xl-inline-block mt-auto mb-7">
            <div class="position-relative p-3">
              <p class="small u-text-light mb-0">Be the lucky user to earn <span class="text-white font-weight-bold">$1000</span> bonus now!</p>

              <!-- SVG Shape -->
              <figure class="position-absolute-top-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 254 204.2" style="enable-background:new 0 0 254 204.2;" xml:space="preserve">
                  <path class="u-fill-none u-stroke-white" opacity=".5" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="10" d="M0.5,171V6.5c0-3.3,3.3-6,7.3-6h238.6c3.9,0,7.1,2.6,7.1,5.8v164c0,3.6-3.5,6.5-7.9,6.5H61.4
                    c-3,0-5.6,1.4-6.8,3.7l-22,22.6l-0.2-22.4c-1.1-2.3-3.8-3.9-6.8-3.9H7.6C3.7,176.8,0.5,174.2,0.5,171z"></path>
                </svg>
              </figure>
              <!-- End SVG Shape -->
            </div>
          </div>
        </div>
      </div>

      <!-- SVG Phone Mockup -->
      <div class="d-none d-lg-block u-devices-v2__phone u-devices-v2__phone--left-position">
        <figure class="w-75 u-devices-v2__phone-svg">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 317.5 665" style="enable-background:new 0 0 317.5 665;" xml:space="preserve">
            <path class="u-fill-white" d="M263,666H54c-29.7,0-54-24.3-54-54V55C0,25.3,24.3,1,54,1h209c29.7,0,54,24.3,54,54v557
              C317,641.7,292.7,666,263,666z"></path>
            <circle class="u-fill-gray-75" cx="159.5" cy="619.5" r="25.5"></circle>
            <path class="u-fill-gray-75" fill-rule="evenodd" clip-rule="evenodd" d="M180,52h-42c-2.2,0-4-1.8-4-4v0c0-2.2,1.8-4,4-4h42c2.2,0,4,1.8,4,4v0C184,50.2,182.2,52,180,52z"></path>
            <g>
              <defs>
                <rect id="phoneFrameID1" x="19.4" y="81.3" width="280" height="500"></rect>
              </defs>
              <clipPath id="phoneFrameID2">
                <use xlink:href="#phoneFrameID1" style="overflow:visible;"></use>
              </clipPath>
              <g style="clip-path:url(#phoneFrameID2);">
                <!-- Apply your (282px width to 500px height) image here -->
                <image style="overflow:visible;" width="282" height="500" xlink:href="<?php echo store_url("uploads/mobile.jpg");?>" transform="matrix(1 0 0 1 18 81)"></image>
              </g>
              <use class="u-fill-none u-stroke-light-blue-125" xlink:href="#phoneFrameID1" stroke-miterlimit="10" style="overflow: visible;"></use>
            </g>
          </svg>
        </figure>
      </div>
      <!-- End SVG Phone Mockup -->
    </div>

    <figure class="position-absolute-bottom-0 z-index-2">
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100" style="margin-bottom: -8px;" xml:space="preserve">
        <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
        <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
        <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z"></path>
        <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
      </svg>
    </figure>


