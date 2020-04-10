<section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading dark">
            <h2 class="primary-heading">{{$contact->title}}</h2>
            <h3 class="secondary-heading">{{$contact->title_sub}}</h3>
          </div>
          <p>{{$contact->content}}</p>
          <p> <a class='blantershow-chat-button' href='javascript:void' title='{{ __('title.chat_now') }}'><i class='fab fa-whatsapp'></i>{{ __('title.chat') }}</a></p>
        </div>
        {{-- <div class="col-md-6 col-md-push-1 probootstrap-animate">
          <form method="post" class="probootstrap-form">
            <div class="form-group">
              <label for="c_name">Your Name</label>
              <div class="form-field">
                <input type="text" id="c_name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="c_email">Your Email</label>
              <div class="form-field">
                <input type="text" id="c_email" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="c_message">Your Message</label>
              <div class="form-field">
                <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="c_submit" id="c_submit" value="Send Message" class="btn btn-primary btn-lg">
            </div>
          </form>
        </div> --}}
      </div>
    </div>
  </section>

  {{-- <section class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Locations</h3>
            <div class="row">
              <div class="col-md-6">
                <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
              </div>
              <div class="col-md-6">
                <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Open Hours</h3>
            <div class="row">
              <div class="col-md-4">
                <p>Monday - Thursday <br> 5:30pm - 10:00pm</p>
              </div>
              <div class="col-md-4">
                <p>Friday - Sunday <br> 5:30pm - 10:00pm</p>
              </div>
              <div class="col-md-4">
                <p>Available for Catering <br> Email or Call Us</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}