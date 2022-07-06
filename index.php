<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barbearia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="agendamentos/agendamentos.php">Agendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="avaliacoes/home_avaliacoes.php">Avaliações</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide carrossel" data-bs-ride="carousel">
        <div class="carousel-inner carrossel">
            <div class="carousel-item active carrossel">
                <img src="img/primeira.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carrossel">
                <img src="img/segunda.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carrossel">
                <img src="img/terceira.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <p>"Barbearia com ótima localização, profissionais de alta qualidade e ambiente confortável para um espaço que você merece !"</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h5>Localização</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Lucio Correa Mendonça , 180 - Fazenda</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Itajaí , Santa Catarina - 88302-520</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h5>Horários de funcionamento</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Segunda a Domingo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>08:00 - 19:00</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h5>Serviços</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Corte de cabelo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Barba</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div> 
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
</body>
</html>