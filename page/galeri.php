<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1> Photo Gallery</h1>
            </div>
        </div>
    </div>

</section>

<br>
<br>
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col">
          <img src="https://lspdigital.id/images/homepage/5e7634af7c965_1584805039.png" class="gallery-item" alt="Gallery1">
          <b>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</b>
        </div>

        <div class="col">
          <img src="https://lspdigital.id/images/homepage/5f3fee47aa8e8_1598025287.jpeg" class="gallery-item" alt="Gallery2">
          <p>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</p>
        </div>

        <div class="col">
          <img src="https://lspdigital.id/images/homepage/5f45236c7541b_1598366572.jpeg" class="gallery-item" alt="Gallery3">
          <p>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</p>
        </div>

        <div class="col">
          <img src="assets/img/lspgaleri.png" class="gallery-item" alt="Gallery4">
          <p>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</p>
        </div>

        <div class="col">
          <img src="assets/img/lspgaleri.png" class="gallery-item" alt="Gallery5">
          <p>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</p>
        </div>

        <div class="col">
          <img src="assets/img/lspgaleri.png" class="gallery-item" alt="Gallery6">
          <p>Sertifikasi Online Desain Grafis 2021 Admin | 2 August 2021</p>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/1.jpg" class="modal-img" alt="Modal Image">
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    document.addEventListener("click",function (e){
      if(e.target.classList.contains("gallery-item")){
          const src = e.target.getAttribute("src");
          document.querySelector(".modal-img").src = src;
          const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
          myModal.show();
      }
    })
  </script>