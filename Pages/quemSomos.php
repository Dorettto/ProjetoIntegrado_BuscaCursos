<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscaCursos | Quem Somos</title>
    <link rel="stylesheet" href="../Css/mobileStyles.css">
    <link rel="stylesheet" href="../Css/quemSomos.css"> <!-- css dessa pagina -->
</head>

<body>
    <div class="div_container">
       
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
                <div class="div-login">
                    <a href="/Pages/login.html">
                        <h3>LOG IN</h3>
                    </a>
                </div>
            </nav>

        </header>


        <main>

            <!-- Titulo -->
            <div class="div-titulo">
                <h1>QUEM SOMOS</h1>
                <!-- <img src="../assets/images/icone_lupa.png" alt="" class="img-lupa"> -->
            </div>

            <!-- texto -->
            <div class="div-texto">
                <p>A plataforma Busca Cursos foi idealizada e projetada por estudantes de Desenvolvimento de Software
                    Multiplataforma da Faculdade de Tecnologia da Zona Leste.</p>
                <p>O projeto possui como objetivo democratizar e facilitar o acesso a cursos on-line gratuitos, criando
                    um
                    repositório correlacionando diversas plataformas educacionais gratuitas e seus respectivos cursos em
                    um
                    único lugar.</p>
                <p>A partir da interação do usuário com a plataforma Busca Cursos, é possível realizar buscas mais
                    detalhadas utilizando filtros e eliminando a necessidade de executar diversas buscas manuais
                    diretamente
                    em cada plataforma, assim evitando o uso de sites de busca que misturem conteúdos pagos entre os
                    resultados da pesquisa, além de ajudar a promover canais de cursos grátis menos conhecidos e menos
                    favorecidos pelos motores de busca convencionais. </p>
            </div>

            <!-- Botao -->

            <div class="div-button">
                <button><a href="https://github.com/Dorettto/ProjetoIntegrado_DSM" target="_blank"
                        rel="noopener noreferrer">
                    <h3>visite o repositório do projeto</h3>
                    </a>
                </button>
            </div>

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

</body>

</html>