//FORMS APOIE O PROJETO
document.addEventListener('DOMContentLoaded', function() {
    const formApoio = document.getElementById('formApoio');
    const feedbackApoioDiv = document.getElementById('feedback-apoio');

    if (formApoio && feedbackApoioDiv) {
        formApoio.addEventListener('submit', function(event) {
            event.preventDefault();

            const nome = document.getElementById('nomeApoio').value.trim();
            const email = document.getElementById('emailApoio').value.trim();
            const link = document.getElementById('linkApoio').value.trim();

            feedbackApoioDiv.textContent = '';
            feedbackApoioDiv.classList.add('mensagem-oculta');
            feedbackApoioDiv.classList.remove('mensagem-sucesso', 'mensagem-erro');

            if (nome === '' || email === '' || link === '') {
                feedbackApoioDiv.textContent = 'Por favor, preencha todos os campos obrigatórios (Nome, E-mail, Link).';
                feedbackApoioDiv.classList.add('mensagem-erro');
                feedbackApoioDiv.classList.remove('mensagem-oculta');
                return;
            }

            feedbackApoioDiv.textContent = 'Agradecemos por apoiar nosso projeto! Sua sugestão foi enviada com sucesso!';
            feedbackApoioDiv.classList.add('mensagem-sucesso');
            feedbackApoioDiv.classList.remove('mensagem-oculta');

            formApoio.reset();
        });
    }

    //FORMS LOGIN
    const formLogin = document.getElementById('formLogin');
    const feedbackLoginDiv = document.getElementById('feedback-login');

    if (formLogin && feedbackLoginDiv) {

        formLogin.addEventListener('submit', function(event) {
            event.preventDefault();

            const usuario = document.getElementById('usuarioLogin').value.trim();
            const senha = document.getElementById('senhaLogin').value.trim();

            feedbackLoginDiv.textContent = '';
            feedbackLoginDiv.classList.add('mensagem-oculta');
            feedbackLoginDiv.classList.remove('mensagem-sucesso', 'mensagem-erro');

            if (usuario === '' || senha === '') {
                feedbackLoginDiv.textContent = 'Por favor, preencha usuário e senha.';
                feedbackLoginDiv.classList.add('mensagem-erro');
                feedbackLoginDiv.classList.remove('mensagem-oculta');
                return;
            }

            if (usuario === 'buscacursos' && senha === '123abc') {
                window.location.href = '../index.html';
            } else {
                feedbackLoginDiv.textContent = 'Usuário ou senha incorretos.';
                feedbackLoginDiv.classList.add('mensagem-erro');
                feedbackLoginDiv.classList.remove('mensagem-oculta');
            }
        });
    }

});