<html>
<head>
  <meta charset="UTF-8">
  <title>9Meu projeto lindo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <?php
  include("includes/menu.php"); // incluir um arquivo dentro de outro 
  include("includes/conexao.php") // 
  ?>
  <section class="mb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <difdsv class="carousel-item active">
          <img src="img/banner1.jpg" class="d-block w-100 imgcarrossel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Mundo da tecnologia</h5>
            <p>Me prometeram pizza e não tinha nem café.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner2.jpg" class="d-block w-100 imgcarrossel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quero ganhar mais e trabalhar menos!</h5>
            <p>Sonho impossivel.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner3.jpg" class="d-block w-100 imgcarrossel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ta chegando final do ano e ninguém falou as férias</h5>
            <p>Que xou da xuxa é esse?</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Projetos</h2>
        </div>
        <?php
          $dados = mysqli_query($conexao, "SELECT * FROM produtos;");
          while($produtos = mysqli_fetch_array($dados)):
        ?>



        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="img/<?php print $produtos['imagem']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><?php print $produtos['nome']; ?></p>
              <p>Quantidade: <?php print $produtos['quantidade'];  ?> unidades</p>
              <p>Valor: R$ <?php print $produtos['valor'];  ?></p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Entrar em contato
              </button>
            </div>
          </div>
        </div>
        <?php
          endwhile;
        ?>
      </div>
    </div>
  </section>
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Perguntas Frequentes</h2>
        </div>
        <div class="col-lg-12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Como pedir pizza pro DA
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse fdscollapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Por favor Vini, ouça a voz do povo.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Tais vai descobrir a fofoca?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ninguém sai até descobrirmos a fofoca inteira.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                  plugin adds the appropriate classes that we use to style each element. These classes control the
                  overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                  can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                  plugin adds the appropriate classes that we use to style each element. These classes control the
                  overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                  can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Grêmio</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Inter</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" fdsaria-controls="nav-contact" aria-selected="false">Outros</button>
              <button class="nav-link" id="nav-nenhum-tab" data-bs-toggle="tab" data-bs-target="#nav-nenhum"
                type="button" role="tab" aria-controls="nav-nenhum" aria-selected="false">Nenhum</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Grêmio
              vencedor</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Inter Vencedor
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Ninguém vai
              ganhar nem perder, todo mundo vai perder.</div>
            <div class="tab-pane fade" id="nav-nenhum" role="tabpanel" aria-labelledby="nav-nenhum-tab">Ninguém vai
              sofrer sozinho, todo mundo vai sofrer!</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Vídeos</h2>
        </div>
        <div class="col-lg-3">
          <div class="ratio ratio-16x9"> 
            <iframe src="https://www.youtube.com/embed/Ft_QrPGXWqc?si=pbCR6KJmNbU8dlZp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-3">
          <fdsdiv class="ratio ratio-16x9"> 
            <iframe src="https://www.youtube.com/embed/Ft_QrPGXWqc?si=pbCR6KJmNbU8dlZp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
     
        <div class="col-lg-3">
          <div class="ratio ratio-16x9"> 
            <iframe src="https://www.youtube.com/embed/Ft_QrPGXWqc?si=pbCR6KJmNbU8dlZp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-3">
          <div class="ratio ratio-16x9"> 
            <iframe src="https://www.youtube.com/embed/Ft_QrPGXWqc?si=pbCR6KJmNbU8dlZp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contato</h2>
        </div>
        <div class="col-lg-6">
          <form class="row g-3">
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço</label>
              <input type="text" class="form-control" fdsid="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Estado</label>
              <select id="inputState" class="form-select">
                <option selected>Selecione</option>
                <option>Rio Grande do Sul</option> 
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Estou ciente em compartilhar os dados
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.7581965657637!2d-51.11464192549193!3d-29.66879031395648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951943c18dd3d30f%3A0x7efc11d4738cb3a9!2sIENH%20-%20Unidade%20Funda%C3%A7%C3%A3o%20Evang%C3%A9lica!5e0!3m2!1spt-BR!2sbr!4v1730246873174!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-dark text-light pt-4 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5>A projeto mais lindo</h5>
          <p>Esse é um projeto que deixará todo mundo feliz.</p>
        </div>
        <div class="col-lg-6">
          <h5>Siga-nos</h5>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="col-lg-12 text-center">
          <p>Todos os direitos não reservados</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contato</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digite seu e-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Digite sua mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>