<section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading dark">
            <h2 class="primary-heading">{{$contact->title}}</h2>
            <h3 class="secondary-heading">{{$contact->title_sub}}</h3>
          </div>
          <p>{{$contact->content}}</p>
          {{-- <p> <a class='blantershow-chat-button' href='javascript:void' title='{{ __('title.chat_now') }}'><i class='fab fa-whatsapp'></i>{{ __('title.chat') }}</a></p> --}}
          <p> <a href='http://loops.empon.id/empon-empon-premium' title='{{ __('title.chat_now') }}'><i class='fab fa-whatsapp'></i>{{ __('title.chat') }}</a></p>
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
  <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
      <div class="row">
        <style>
          .loops-group {display: block; margin-bottom: 20px;}
          .loops-group label { font-weight: bold; }
          .loops-group input { display: block; width: 100%; height: 36px; border: 1px solid #ccc; border-radius: 3px; }
          .loops-group textarea {display: block; width: 100%; border: 1px solid #ccc; border-radius: 3px;}
          .loops-group input.loops-submit { background: #81bd4b; color: #fff; }
          .loops-footer {font-size: 11px; color: #ccc; font-style: italic;}
      </style>
      <form id="form-order" class="loops-forms" action="https://staging.loops.id/save-order/empon-empon-premium-2empon-bubuk-premium" method="POST">
                                                                      <div class="loops-group">
                  <label for="name">Nama<span class="red">*</span></label>
                  <input type="text" id="name" name="name" value="" required placeholder="Tulis nama Anda">
              </div>
                                                                      <div class="loops-group">
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" value="" placeholder="Tulis email Anda">
              </div>
                                                                      <div class="loops-group">
                  <label for="phone">Hp<span class="red">*</span></label>
                  <input type="number" id="phone" name="phone" value="" required placeholder="Sebutkan nomor HP aktif Anda: contoh 081234567890">
              </div>
                                                                      <div class="loops-group">
                  <label for="address">Alamat<span class="red">*</span></label>
                  <textarea name="address" id="address" cols="30" rows="5" required placeholder="Tulis alamat lengkap untuk pengiriman, (Kecamatan, Kota/Kabupaten, Provinsi, dan Kode Pos bila ada)"></textarea>
              </div>
                                                                      <div class="loops-group">
                  <label for="note">Note<span class="red">*</span></label>
                  <textarea name="note" id="note" cols="30" rows="5" required placeholder="Catatan bisa berupa spesifikasi barang yang dipesan, alternatif pilihan jika barang habis, dll."></textarea>
              </div>
                                                                      <input type="hidden" name="product" value="Empon-empon">
                                      <div class="loops-group">
              <input type="submit" value="Beli Sekarang" class="loops-submit">
          </div>
          <input type="hidden" name="redirect" value="">
          <input type="hidden" name="_loops_nonce" value="">
          <p class="loops-footer">Powered by <a href="https://loops.id/?utm_source=form-embed&utm_content=71069">Loops.id</a>.</p>
      </form>
                              
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