<!-- PAGINA QUE FICARA TODOS OS CURSOS -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscaCursos | Apoie Projeto</title>
    <link rel="stylesheet" href="../Css/mobileStyles.css">
    <link rel="stylesheet" href="../Css/styles.css"> <!-- css dessa pagina -->
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

        <div class="search-container">

            <div class="div-search">

                <form action=" " method="post" autocomplete="off">
                    <input type="text" id="barraDeBusca" placeholder="    DIGITE SUA BUSCA" required>
                    <div id="sugestoes" class="sugestoes-container"></div>

                    <!-- falta colocar a lupa do input -->
                </form>

            </div>

        </div>
        <div class="conteudo-principal">
            <!--FILTROS -->
            <div class="div_filtros">
                <div class="filtros-header">
                    <h1>FILTROS</h1>
                    <a href="#" class="btn-limpar" id="btnLimpar">limpar</a>
                </div>

                <div class="div_select">

                    <h2>Área do curso</h2>
                    <label>
                        <input type="checkbox" name="categoria" value="dados">
                        Banco de dados
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="programacao">
                        Programação
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="gestao_neg">
                        Gestão e Negócios
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="design">
                        Design e Ilustração
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="IA">
                        Inteligência Artificial
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="saude">
                        Saúde
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="linguas">
                        Línguas Estrangeiras
                    </label><br>
                    <label>
                        <input type="checkbox" name="categoria" value="mkt">
                        Marketing
                    </label><br>

                </div>

                <div class="div_select">

                    <h2>Certificação</h2>
                    <label>
                        <input type="checkbox" name="certificacao" value="com_certificado">
                        Com certificado
                    </label><br>
                    <label>
                        <input type="checkbox" name="certificacao" value="Sem_certificado">
                        Sem certificado
                    </label><br>

                </div>

                <div class="div_select">

                    <h2>Tempo de curso</h2>
                    <label>
                        <input type="checkbox" name="duracao" value="ate_6h">
                        6h ou menos
                    </label><br>
                    <label>
                        <input type="checkbox" name="duracao" value="6_12h">
                        6h a 12h
                    </label><br>
                    <label>
                        <input type="checkbox" name="duracao" value="12_24h">
                        12h a 24h
                    </label><br>
                    <label>
                        <input type="checkbox" name="duracao" value="24_60h">
                        24h a 60h
                    </label><br>
                    <label>
                        <input type="checkbox" name="duracao" value="mais_60h">
                        60h+
                    </label><br>

                </div>

                <div class="div_select">

                    <h2>Avaliação</h2>
                    <label>
                        <input type="checkbox" name="avaliacao" value="um">
                        ★
                    </label><br>
                    <label>
                        <input type="checkbox" name="avaliacao" value="dois">
                        ★★
                    </label><br>
                    <label>
                        <input type="checkbox" name="avaliacao" value="tres">
                        ★★★
                    </label><br>
                    <label>
                        <input type="checkbox" name="avaliacao" value="quatro">
                        ★★★★
                    </label><br>
                    <label>
                        <input type="checkbox" name="avaliacao" value="cinco">
                        ★★★★★
                    </label><br>

                </div>





            </div>

            <!--Cursos -->
            <div class="div-todos-cursos">
                <main>
                    <h1>todos os cursos</h1>
                    <div class="div-cursos">
                        <p>Nenhum curso encontrado</p>
                    </div>
                    <div class="div-cursos">
                        <div class="card_curso" data-categoria="dados">
                            <div class="image_curso">
                                <img src="../assets/images/img-curso-SI.png"
                                    alt="imagem do curso sistemas da informação">
                            </div>
                            <h3>Segurança da Informação: Módulo 00</h3>
                            <p class="descricao">Curso introdutório sobre segurança da informação, baseado na cartilha
                                CERT.br e exemplos práticos.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://www.cursoemvideo.com/curso/seguranca-da-informacao-modulo-00/"
                                        target="_blank"> Ir para curso
                                    </a>

                                </div>
                                <a href="#" class="avaliacao">(4,2)★★★★☆</a>
                            </div>

                        </div>

                        <div class="card_curso" data-categoria="programacao">

                            <div class="image_curso">
<img src="../assets/images/img-curso-py1.png"
                                    alt="imagem do curso de Python 1">                            </div>
                            <h3>Fundamentos do Python 1</h3>
                            <p class="descricao">Aprenda os fundamentos da programação com Python, incluindo lógica,
                                variáveis e estruturas básicas.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://www.netacad.com/pt/courses/python-essentials-1?courseLang=pt-BR"
                                        target="_blank"> Ir para curso
                                    </a>
                                </div>
                                <a href="#" class="avaliacao">(4,7)★★★★★</a>
                            </div>
                        </div>

                        <div class="card_curso" data-categoria="programacao">
                            <div class="image_curso">
                                <img src="../assets/images/img-curso-py2.png"
                                    alt="imagem do curso fundamentos de Python 2">
                                </div>
                            <h3>Fundamentos de Python 2</h3>
                            <p class="descricao">Aprofunde seus conhecimentos em Python com estruturas avançadas,
                                programação orientada a objetos e desenvolvimento de aplicações.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://www.netacad.com/pt/courses/python-essentials-2?courseLang=pt-BR"
                                        target="_blank"> Ir para curso
                                    </a>

                                </div>
                                <a href="#" class="avaliacao">(4,9)★★★★★</a>
                            </div>
                        </div>

                        <div class="card_curso" data-categoria="programacao">
                            <div class="image_curso">
                                <img src="../assets/images/img-curso-TI.png"
                                    alt="imagem do curso IT Essentials 7">
                            </div>
                            <h3>IT Essentials 7</h3>
                            <p class="descricao">Conheça os fundamentos de hardware, software e redes, além de
                                habilidades básicas para suporte técnico em TI.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://www.netacad.com/pt/courses/it-essentials-7?courseLang=pt-BR"
                                        target="_blank"> Ir para curso
                                    </a>
                                </div>
                                <a href="#" class="avaliacao">(4,1)★★★★☆</a>
                            </div>
                        </div>

                        <div class="card_curso" data-categoria="programacao">

                            <div class="image_curso">
                                <img src="../assets/images/img-curso-CD.png"
                                    alt="imagem do curso fundamentos da ciência de dados">                            </div>
                            <h3>Introdução à Ciência de Dados</h3>
                            <p class="descricao">Entenda os conceitos básicos de ciência de dados, incluindo análise,
                                visualização e uso estratégico de dados nas organizações.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://educacao-executiva.fgv.br/cursos/online/curta-media-duracao-online/introducao-ciencia-de-dados#ancora-4"
                                        target="_blank"> Ir para curso
                                    </a>
                                </div>
                                <a href="#" class="avaliacao">(5,0)★★★★★</a>
                            </div>
                        </div>

                        <div class="card_curso" data-categoria="IA">

                            <div class="image_curso">
                                <img src="../assets/images/img-curso-IA.png"
                                    alt="imagem do curso fundamentos de Inteligência Artificial">                            </div>
                            <h3>Inteligência Artificial</h3>
                            <p class="descricao">Aprenda os conceitos iniciais de Inteligência Artificial com foco
                                prático, usando exemplos simples e acessíveis.</p>
                            <div class="info-curso">
                                <div class="botoes">
                                    <a href="https://www.cursoemvideo.com/curso/curso-gratis-de-inteligencia-artificial/"
                                        target="_blank"> Ir para curso
                                    </a>
                                </div>
                                <a href="#" class="avaliacao">(4,5)★★★★☆</a>
                            </div>
                        </div>


                    </div>
                    <div class="div-pag">
                        <a class="pag"><<
                            </a>
                                <a class="pag">
                                    <</a>
                                        <p>Página 1 de 1</p>
                                        <a class="pag">></a>
                                        <a class="pag">>></a>
                    </div>


                </main>
            </div>
        </div>




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

    <!-- SCRIPTS -->
    <script src="../Js/script.js"></script>
   

</body>

</html>