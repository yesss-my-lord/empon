<section class="probootstrap-section-bg overlay" style="background-image: url({{ $ingredients->image }});" data-stellar-background-ratio="0.5" data-section="ingredients">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">{{$ingredients->title}}</h2>
            <h3 class="secondary-heading">{{$ingredients->title_sub}}</h3>
          </div>
        </div>
      </div>
    </div>
</section>
   <!-- probootstrap-bg-white -->
<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="probootstrap-cell-retro">
          <div class="half">
            @php $i=1; @endphp
            @foreach ($ingredients->description_left as $description)
                <div class="probootstrap-cell @if($i % 2 == 0) {{ 'reverse'  }} @endif probootstrap-animate" data-animate-effect="fadeIn">
                    <div class="image" style="background-image: url({{ $description->image }});"></div>
                    <div class="text text-center">
                    <h3>{{ $description->title }}</h3>
                    <p>{{ $description->content }}</p>
                    {{-- <p class="price">$20.99</p> --}}
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach
            

          </div>
          <div class="half">
            @php $i=1; @endphp
            @foreach ($ingredients->description_right as $description)
                <div class="probootstrap-cell @if($i % 2 == 0) {{ 'reverse'  }} @endif probootstrap-animate" data-animate-effect="fadeIn">
                    <div class="image" style="background-image: url({{ $description->image }});"></div>
                    <div class="text text-center">
                    <h3>{{ $description->title }}</h3>
                    <p>{{ $description->content }}</p>
                    {{-- <p class="price">$20.99</p> --}}
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
</section>