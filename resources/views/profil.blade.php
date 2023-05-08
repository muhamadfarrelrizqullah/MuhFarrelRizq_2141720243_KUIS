@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profil Admin</h1>
@stop

@section('content')
    <p>&emsp;Selamat datang diwebsite Tugas Quiz saya. Kenalin namaku <strong>{{$nama}}</strong> dari Sidoarjo. Saya sekarang adalah mahasiswa Politeknik Negeri Malang dan bagian dari kelas 2E jurusan Teknik Informatika. Anda bisa menghubungi saya dengan mengeklik <a href="https://www.linkedin.com/in/muhamad-farrel-rizqullah-972037221/">link ini</a>.</p>
    
    <div class="card card-info direct-chat direct-chat-info">
  <div class="card-header">
    <h3 class="card-title">Direct Chat</h3>
    <div class="card-tools">
      <span data-toggle="tooltip" title="3 New Messages" class="badge badge-light">3</span>
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
        <i class="fas fa-comments"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <!-- Conversations are loaded here -->
    <div class="direct-chat-messages">
      <!-- Message. Default to the left -->
      <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-left">Costumer Xyz</span>
          <span class="direct-chat-timestamp float-right">04 Mei 2:00 pm</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="https://cq-esports.com/storage/uploads/players/1141050/1.jpg" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          Assalamualaikum admin, mau tanya untuk toko barangnya mulai open tanggal berapa?
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
      <!-- Message to the right -->
      <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-right">Muhamad Farrel</span>
          <span class="direct-chat-timestamp float-left">04 Mei 2:05 pm</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="https://akademik.polinema.ac.id/upload_dir/foto_ktm_valid/2021/2141720243-v3mmc.jpeg" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          Waalaikumsalam, Open mulai tanggal 5 mei kak
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
      <!-- Message. Default to the left -->
      <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-left">Costumer Xyz</span>
          <span class="direct-chat-timestamp float-right">04 Mei 5:37 pm</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="https://cq-esports.com/storage/uploads/players/1141050/1.jpg" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          Apakah ada event promo min, di grand opening toko barang kali ini
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
      <!-- Message to the right -->
      <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-right">Muhamad Farrel</span>
          <span class="direct-chat-timestamp float-left">04 Mei 6:10 pm</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="https://akademik.polinema.ac.id/upload_dir/foto_ktm_valid/2021/2141720243-v3mmc.jpeg" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          Tentunya, stay tune terus ya kak
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
    </div>
    <!--/.direct-chat-messages-->
    <!-- Contacts are loaded here -->
    <div class="direct-chat-contacts">
      <ul class="contacts-list">
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user1-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                Count Dracula
                <small class="contacts-list-date float-right">2/28/2015</small>
              </span>
              <span class="contacts-list-msg">How have you been? I was...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user7-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                Sarah Doe
                <small class="contacts-list-date float-right">2/23/2015</small>
              </span>
              <span class="contacts-list-msg">I will be waiting for...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user3-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                Nadia Jolie
                <small class="contacts-list-date float-right">2/20/2015</small>
              </span>
              <span class="contacts-list-msg">I'll call you back at...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user5-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                Nora S. Vans
                <small class="contacts-list-date float-right">2/10/2015</small>
              </span>
              <span class="contacts-list-msg">Where is your new...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user6-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                John K.
                <small class="contacts-list-date float-right">1/27/2015</small>
              </span>
              <span class="contacts-list-msg">Can I take a look at...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
        <li>
          <a href="#">
            <img class="contacts-list-img" src="/docs/3.2/assets/img/user8-128x128.jpg">
            <div class="contacts-list-info">
              <span class="contacts-list-name">
                Kenneth M.
                <small class="contacts-list-date float-right">1/4/2015</small>
              </span>
              <span class="contacts-list-msg">Never mind I found...</span>
            </div>
            <!-- /.contacts-list-info -->
          </a>
        </li>
        <!-- End Contact Item -->
      </ul>
      <!-- /.contacts-list -->
    </div>
    <!-- /.direct-chat-pane -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <form action="#" method="post">
      <div class="input-group">
        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
        <span class="input-group-append">
          <button type="button" class="btn btn-primary">Send</button>
        </span>
      </div>
    </form>
  </div>
  <!-- /.card-footer-->
</div>
@stop

@section('footer')
    <p class="text-center">2141720243 || Muhamad Farrel</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop