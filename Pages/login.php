<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscaCursos | Login</title>
    <link rel="stylesheet" href="../Css/mobileStyles.css">
    <link rel="stylesheet" href="../Css/styles.css">
</head>
<body>

        <!--HEADER E NAVE -->
        <header>
            <div class="div-logo">
                <a href="../index.html">
                    <img src="../assets/images/logo_Busca.png" alt="Logo BuscaCursos">
                </a>
            </div>
<!-- !-- Botão menu para o mobile --> 
            <div class="mobile-botao" onclick="document.querySelector('header nav').classList.toggle('ativo')">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </div>
            <nav>
                <ul>
                   <li><a href="../Pages/quemSomos.html" target="_blank">
                            <h2>QUEM SOMOS</h2>
                        </a></li>
                    <li><a href="../Pages/faq.html" target="_blank">
                            <h2>F.A.Q</h2>
                        </a></li>
                    <li><a href="../Pages/apoieProjeto.html" target="_blank">
                            <h2>APOIE O PROJETO</h2>
                        </a></li>
                </ul>
            </nav>
            
        </header>

    <main>
        <section class="login">
            <div class="div-tituloLogin">
                <h1>Entrar na sua conta</h1>
            </div>

             <div id="feedback-login" class="mensagem-oculta"></div>

            <form id="formLogin" class="formulario-login">
                <label for="usuarioLogin">Usuário:</label><br>
                <input type="text" id="usuarioLogin" class="entrada-login" autocomplete="username"><br> <label for="senhaLogin">Senha:</label><br>
                <input type="password" id="senhaLogin" class="entrada-login" autocomplete="current-password"><br> <button type="submit" class="botao-login">Entrar</button>
            </form>

        </section>
    </main>

         <!-- FOOTER -->
     <footer>
            <div class="footer-container">

                <div class="footer-logo">
                    <a href="/index.html">
                        <img src="../assets/images/logo_Busca.png" alt="Logo BuscaCursos">
                    </a>
                    <p class="footer-endereco">
                    Av. Aguia de Haia, 2.983 - Cidade A. E. Carvalho<br>
                    São Paulo/SP - CEP: 03694-000
                    </p>
                </div>

                <div class="footer-redes">
                    <h2>REDES SOCIAIS</h2>
                    <div class="footer-redes-icons">

                        <a href="https://www.youtube.com/c/FatecZLeste" target="_blank">
                            <img src="../assets/images/contatos_youtube.png" alt="YouTube">
                        </a>

                        <a href="https://www.facebook.com/fateczl.oficial" target="_blank">
                            <img src="../assets/images/contatos_facebook.png" alt="Facebook">
                        </a>

                        <a href="https://www.instagram.com/fateczl.oficial/#" target="_blank">
                            <img src="../assets/images/contatos_insta.png" alt="Instagram">
                        </a>

                        <a href="https://www.linkedin.com/school/fateczl-oficial/posts/?feedView=all" target="_blank">
                            <img src="../assets/images/contatos_linkedin.png" alt="LinkedIn">
                        </a>    

                        <a href="https://www.tiktok.com/@fateczl.oficial" target="_blank">
                            <img src="../assets/images/contatos_tiktok.png" alt="TikTok">
                        </a>

                    </div>
                </div>
            </div>

            <ul>
                <li><a target="_blank" href="../Pages/TermosUso.html">Termos de Uso</a></li>
                <li><a target="_blank" href="../Pages/PolPrivacidade.html">Política de Privacidade</a></li>
            </ul>
        </footer>
</div>

    <script src="../Js/forms.js"></script>
    
</body>
</html>