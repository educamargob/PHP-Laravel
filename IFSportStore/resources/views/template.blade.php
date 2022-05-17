<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>IFSports</title>
  </head>
  <body>
        <header id="navbar-netshoes" class="p-3 bg-dark text-white">

            <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center text-middle mb-md-0">
                <li><a href="#" class="nav-link px-2 fw-bold text-white">IFSports</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Categorias</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Ofertas</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Área do Cliente</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Pesquisar no site..." aria-label="Search">
                </form>

                <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Entrar</button>
                <button type="button" class="btn btn-warning">Cadastrar</button>
                </div>
            </div>
            </div>        
        </header>
      
        

        @yield('conteudo')
    <!-- Optional Java; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>

</html>