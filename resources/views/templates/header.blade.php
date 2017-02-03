<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">
      <img height="30" width="30" src="{{ URL::asset('img/rich.png') }}">
      </a>
      <a class="navbar-brand" href="/">
        Limpp
      </a>
      <ul class="nav navbar-nav">
      <li class=""><a href="/">Home</a></li>
      <li><a href="{{ route('transac.index' )}}">Transaksi</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catatan
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('notes.index' )}}">Data</a></li>
          <li><a href="{{ route('c_note.index' )}}">Jenis Catatan</a></li>
        </ul>
      </li>
      <li><a href="{{ route('category.index' )}}">Kategori</a></li>
      <li><a href="{{ route('tb.index' )}}">Tabungan</a></li>
    </ul>
    </div>
  </div>
</nav>