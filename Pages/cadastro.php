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
                <h1>Cadastre</h1>
            </div>

             <div id="feedback-login" class="mensagem-oculta"></div>

            <form id="formLogin" class="formulario-login">
                
                <label for="usuarioLogin">Nome::</label>
                <br>
                <input type="text" id="userName" class="entrada-login" name="username" autocomplete="userName">
                <br> 

                <label for="usuarioLogin">Email:</label>
                <br>
                <input type="email" id="userEmail" class="entrada-login" name="userEmail" autocomplete="userEmail">
                <br> 

                <label for="senhaLogin">Senha:</label>
                <br>
                <input type="password" id="senhaLogin" class="entrada-login" name="userSenha" autocomplete="current-password"><br> 
                
                
                <label for="senhaLogin">Confirma 0Senha:</label>
                <br>
                <input type="password" id="senhaLogin" class="entrada-login" name="userSenhaConfirm" autocomplete="current-password"><br> 
                
                <button type="submit" class="botao-login">Entrar</button>
                <a href="login.php"><p>voltar</p></a>


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
    
    <!-- "Inserção no banco PHP" -->

        <? 

            // problema na conexão


            include('conexao.php');
   
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $usuario = $_POST['username'];
                    $email = $_POST['userEmail'];
                    $senha = $_POST['userSenha'];
                    $senhaConfirm = $_POST['userSenhaConfirm'];

                    date_default_timezone_set('America/Sao_Paulo'); 
                    $dataHoraAtual = date('Y-m-d H:i:s'); 

                    // Previne SQL Injection
                    // $usuario = mysqli_real_escape_string($conn, $usuario);
                    // $email = mysqli_real_escape_string($conn, $email);
                    // $senha = mysqli_real_escape_string($conn, $senha);

                    $check = "SELECT * FROM usuario WHERE USU_STR_EMAIL = '$email'";
                    $result = $conn->query($check);

                    if ($result->num_rows != 0) {
                        echo "<script>alert('Usuário já existe!');</script>";
                    } else {

                            $sql = "INSERT INTO USUARIO (USU_STR_NOME, USU_STR_EMAIL, USU_STR_SENHA, USU_STR_INSERCAO, USU_INT_SITUACAO)
                                VALUES ('$usuario', '$email', '$senha','$dataHoraAtual',0)";

                        if ($conn->query($sql) === TRUE) {
                            // echo "<script>alert('Cadastro realizado com sucesso!'); window.location='login.php';</script>";
                        } else {
                            echo "Erro ao cadastrar: " . $conn->error;
                        }
                    }
                }
            
            
            
            ?>
</body>
</html>