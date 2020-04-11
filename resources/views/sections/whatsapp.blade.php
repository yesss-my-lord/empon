<div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <h3>{{ $contact->chat_header }}</h3>
      <p>{{ $contact->chat_content }}</p>
    </div>
    <div class='get-new hide'>
      <div id='get-label'>
      </div>
      <div id='get-nama'>
      </div>
    </div>
  </div>
  <div class='home-chat'>
    @foreach ($contact->salesman as $salesman)
      <a class='informasi' href='javascript:void' title='Chat Whatsapp' id="chat-{{ Str::lower($salesman->title) }}">
        <div class='info-avatar'>
          <img src="{{ $salesman->image }}"/>
        </div>
        <div class='info-chat'>
          <span class='chat-label'>Sales</span>
          <span class='chat-nama'>{{ $salesman->title }}</span>
        </div>
        <span class='my-number'>{{ $salesman->number }}</span>
      </a>
    @endforeach
    {{-- <div class='blanter-msg'>
      Call us to <b>+62123456789</b> from <i>0:00hs a 24:00hs</i>
    </div> --}}
  </div>
  <div class='start-chat hide'>
    <div class='first-msg'>
      <span>{{ __('title.what_can_i_do') }}</span>
    </div>
    <div class='blanter-msg'>
      <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
      <a href='javascript:void;' id='send-it'>{{ __('link.send') }}</a>
    </div>
  </div>
  <div id='get-number'>
  </div>
  <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='{{ __('title.chat_now') }}'><i class='fab fa-whatsapp'></i>{{ __('title.chat_float') }}</a>

