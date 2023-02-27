
        <!--<span class="badge">{{\Cart::getContent()->count()}}</span> <-->


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     <link rel="stylesheet" href="/css/style.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




    <title>Document</title>
</head>
<body>
    <div class="conteiner" >
        <div class="submenu-conteiner">
            <div class="items-submenu">
                <div class="icons-socials">
                   <img src="/img/instagram (1).png" alt="">
                   <img src="/img/whatsapp.png" alt="">
                </div>
                <div class="contato-items">
                    <div class="number">
                        <img src="/img/icons8-ringer-volume-30.png" alt="">
                        <p>8283928293</p>
                    </div>
                    <div class="email">
                        <img src="/img/icons8-mail.svg" alt="">
                        <p>Gustavothyers@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="conteiner-menu">
                <div class="conteiner-items">
                    <div class="logo">
                        <img src="/img/Logo.jpg" alt="">
                    </div>
                    <div class="menu">
                        <ul>
                           <a href=""><li class="home">Home</li> </a>
                           <a class="item" href="#about">About<li ></li> </a>
                           <a class="item" href="">Categorias<li ></li></a>
                           <a class="item"href="shop.html">Shop<li></li> </a>
                        </ul>
                    </div>
                    <div class="button-conteiner">
                       <a href=""> <div class="carrinho">
                           <video  autoplay loop  src="/img/shopping-cart.mp4"></video>
                        </a> </div>
                       <a href="login.html"><div class="button">
                            <div class="btn-text">Login</div>
                        </div>
                       </a>
                    </div>
                </div>
            </div>
        </header>

        



            <div class="hidden sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <!-- Footer Start -->
            <footer>
                <div class="footer-left">
                  <h3>Logo</h3>
                  <p>Descrição da empresa</p>
                  <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
                <div class="footer-center">
                  <h3>Menu</h3>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                  </ul>
                </div>
                <div class="footer-right">
                  <h3>Contato</h3>
                  <p>Rua Tal, 123</p>
                  <p>Cidade - Estado</p>
                  <p>+55 00 1234-5678</p>
                </div>
              </footer>

        </div>
        <script>
            AOS.init();
          </script>
    </body>

    </html>
