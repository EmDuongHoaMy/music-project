<style>
  .bg-pink{
    background-color: rgb(176, 17, 70);
  }
</style>
{{-- header navbar --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-pink" style="height: 60px">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: 25px;font-family: Georgia, 'Times New Roman', Times, serif" href="{{ route('home') }}">PAGE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('author') }}">Author</a></li>
            <li><a class="dropdown-item" href="{{ route('category') }}">Category</a></li>
            <li><a class="dropdown-item" href="{{ route('acticle') }}">Article</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actor
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('iu') }}">IU</a></li>
            <li><a class="dropdown-item" href="{{ route('sohee') }}">Han SoHee</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://www.facebook.com/duongxo37">Something else here</a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('item') }}">Preview</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">User</a>
        </li>

      {{-- <button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
        Note
      </button> --}}

      {{-- <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Contact
      </button>  --}}
      

        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
      </ul>

      <form class="d-flex" role="form" action="{{ route('auth.logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary block full-width m-b mt-2">Logout</button>
      </form>

    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tac Gia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Email : xonghean@gmail.com</p>
        <p>SDT   : 0358993337</p>
        <a class="nav-link btn btn-light" href="https://www.facebook.com/duongxo37">Em Duong Hoa My</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{-- Offcanvas --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Note</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
  </div>
</div>

{{-- <script type="text/javascript">
  window.onload = () => {
    // Tự động mở modal
    const myModal = new bootstrap.Modal('#exampleModal');
    myModal.show();
    // Tự động mở offcanvas
    // const myOffcanvas = new bootstrap.Offcanvas('#offcanvas');
    // myOffcanvas.show();
  }
</script> --}}