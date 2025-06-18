 const carrosseis = document.querySelectorAll('.curso .carrossel');
        carrosseis.forEach(carrossel => {
            let scrollPosition = 0;
            const itemWidth = 200;
            const totalItems = carrossel.children.length;

            function deslizar() {
                scrollPosition -= 1; // Velocidade do deslize
                if (Math.abs(scrollPosition) >= itemWidth * totalItems) {
                    scrollPosition = 0;
                }
                carrossel.style.transform = `translateX(${scrollPosition}px)`;
            }

            setInterval(deslizar, 30);
        });

        //barras de pesquisas

        const barraDeBusca = document.getElementById('barraDeBusca');
        const sugestoesContainer = document.getElementById('sugestoes');

        // Lista de sugestões - depois ira vir do banco de dados
        const sugestoes = [
            'Programação',
            'Java',
            'Python',
            'Lógica de Programação',
            'Algoritmos',
            'Big Data',
            'Banco de dados',
            'Gestão e negócios',
            'Línguas estrangeiras',
            'Inglês',
            'Design',
            'Ilustração',
            'Inteligência artificial',
            'Saúde',
            'Marketing'
        ];

        barraDeBusca.addEventListener('input', function () {
            const texto = barraDeBusca.value.toLowerCase();
            sugestoesContainer.innerHTML = ''; // Limpa sugestões anteriores

            if (texto) {
                const filtradas = sugestoes.filter(s => s.toLowerCase().includes(texto));

                if (filtradas.length > 0) {
                    sugestoesContainer.style.display = 'block'; // Mostra a div
                    filtradas.forEach(s => {
                        const div = document.createElement('div');
                        div.classList.add('sugestao');
                        div.textContent = s;

                        // Clique na sugestão
                        div.addEventListener('click', () => {
                            barraDeBusca.value = s;
                            sugestoesContainer.innerHTML = '';
                            sugestoesContainer.style.display = 'none'; // Esconde de novo
                            barraDeBusca.focus();
                        });

                        sugestoesContainer.appendChild(div);
                    });
                } else {
                    sugestoesContainer.style.display = 'none'; // Nenhuma sugestão encontrada
                }
            } else {
                sugestoesContainer.style.display = 'none'; // Campo vazio
            }
        });

//FILTROS DA PAGINA pagescurso

function aplicarFiltros() {
    const categoriasSelecionadas = Array.from(document.querySelectorAll('input[name="categoria"]:checked')).map(cb => cb.value);
    const avaliacoesSelecionadas = Array.from(document.querySelectorAll('input[name="avaliacao"]:checked')).map(cb => {
        const mapa = { um: 1, dois: 2, tres: 3, quatro: 4, cinco: 5 };
        return mapa[cb.value];
    });

    const cards = document.querySelectorAll(".card_curso");
    let algumCursoVisivel = false;

    cards.forEach(card => {
        const categoria = card.getAttribute("data-categoria");
        const notaTexto = card.querySelector(".avaliacao")?.textContent;
        let nota = 0;

        if (notaTexto) {
            const match = notaTexto.match(/\(([\d,]+)\)/);
            if (match) {
                nota = parseFloat(match[1].replace(",", "."));
            }
        }

        const passaCategoria = categoriasSelecionadas.length === 0 || categoriasSelecionadas.includes(categoria);
        const passaAvaliacao = avaliacoesSelecionadas.length === 0 || avaliacoesSelecionadas.some(av => nota >= av);

        if (passaCategoria && passaAvaliacao) {
            card.style.display = "block";
            algumCursoVisivel = true;
        } else {
            card.style.display = "none";
        }
    });

    // Mostrar ou esconder a mensagem de "Nenhum curso encontrado"
    const mensagemNenhumCurso = document.querySelector(".div-cursos > p");
    if (mensagemNenhumCurso) {
        mensagemNenhumCurso.style.display = algumCursoVisivel ? "none" : "block";
    }
}

// mudar os checkboxes
document.querySelectorAll('input[name="categoria"], input[name="avaliacao"]').forEach(input => {
    input.addEventListener("change", aplicarFiltros);
});

//  botão LIMPAR filtros
document.querySelector('.btn-limpar').addEventListener('click', function (e) {
    e.preventDefault();

    // Desmarca os checkboxes
    document.querySelectorAll('input[name="categoria"], input[name="avaliacao"]').forEach(input => {
        input.checked = false;
    });

    aplicarFiltros(); // Atualiza os cards
});
window.addEventListener('DOMContentLoaded', aplicarFiltros);

