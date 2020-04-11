<section class="probootstrap-section-bg overlay" style="background-image: url({{ $marketplace->image }});"  data-stellar-background-ratio="0.5" data-section="marketplace">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">{{$marketplace->title}}</h2>
            <h3 class="secondary-heading">{{$marketplace->title_sub}}</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
          @foreach ( $marketplace->descriptions as $description)
            <div class="col-md-4 col-sm-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="{{ $description->image }}" alt="{{ $description->image }}"></figure>
                <div class="text">
                    {{-- <span class="date">June 29, 2017</span> --}}
                    <h3><a href="{{ $description->href }}" >{{ $description->title }}</a></h3>
                    <p>{{ $description->content }}</p>
                    <p class=""><a href="{{ $description->href }}" target="blank" id="order-{{ Str::lower($description->title) }}" class="probootstrap-custom-link link-sm">{{ __('link.order_now') }}</a></p>
                </div>
                </div>
            </div>
          @endforeach
        {{-- <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="https://demos.onepagelove.com/html/resto/img/img_square_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="https://demos.onepagelove.com/html/resto/img/img_square_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="https://demos.onepagelove.com/html/resto/img/img_square_4.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>