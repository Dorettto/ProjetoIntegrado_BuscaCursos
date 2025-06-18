CREATE DATABASE BUSCA_CURSOS
	USE BUSCA_CURSOS

CREATE TABLE ADMINISTRADOR
(
	ADM_INT_ID INT NOT NULL IDENTITY (1,1),
	ADM_STR_NOME VARCHAR(80) NOT NULL,
	ADM_STR_CPF CHAR(11) NOT NULL,
	ADM_STR_SENHA VARCHAR(20) NOT NULL,
	ADM_STR_DATAINSERCAO DATETIME NOT NULL,
	ADM_INT_SITUACAO INT NOT NULL,
	CONSTRAINT PK_ADMINISTRADOR_ID PRIMARY KEY (ADM_INT_ID),
	CONSTRAINT UK_CPF_ID UNIQUE (ADM_STR_CPF)
);

CREATE TABLE PLATAFORMA
(
	PLA_INT_ID INT NOT NULL IDENTITY (1,1),
	ADM_INT_ID INT NOT NULL,
	PLA_STR_NOME VARCHAR (80) NOT NULL,
	PLA_STR_URL VARCHAR (255) NOT NULL,
	PLA_STR_DESC VARCHAR (350) NOT NULL,
	PLA_INT_QUANTCURSO INT NOT NULL,
	CONSTRAINT PK_PLATAFORMA_ID PRIMARY KEY (PLA_INT_ID),
	CONSTRAINT UK_URL_ID UNIQUE (PLA_STR_URL),
	CONSTRAINT FK_ADMINISTRADOR_PLATAFORMA_ID FOREIGN KEY (ADM_INT_ID)
		REFERENCES ADMINISTRADOR (ADM_INT_ID)
);



CREATE TABLE CATEGORIA
(
	CAT_INT_ID INT NOT NULL IDENTITY(1,1),
	CAT_STR_DESC VARCHAR(350) NOT NULL,
	CAT_STR_INSERCAO DATETIME NOT NULL,
	CONSTRAINT PK_CATEGORIA_ID PRIMARY KEY (CAT_INT_ID)
);

CREATE TABLE AREACATEGORIA(
	ACA_INT_ID INT  NOT NULL IDENTITY(1,1),
	CAT_INT_ID INT  NOT NULL,
	ACA_STR_INSERCAO DATETIME NOT NULL,
	ACA_INT_SITUACAO INT  NOT NULL,
	CONSTRAINT PK_AREACATEGORIA_ID PRIMARY KEY (ACA_INT_ID),
	CONSTRAINT FK_AREACATEGORIA_CATEGORIA_ID FOREIGN KEY (CAT_INT_ID)
		REFERENCES CATEGORIA (CAT_INT_ID)
);


CREATE TABLE CURSO
(
	CUR_INT_ID INT  NOT NULL IDENTITY(1,1),
	ACA_INT_ID INT  NOT NULL,
	CUR_STR_TITULO VARCHAR (80)  NOT NULL,
	CUR_STR_URL VARCHAR(255)  NOT NULL,
	CUR_STR_CERTIFICACAO VARCHAR(80) NOT NULL,
	CUR_FLO_QUANTHORA FLOAT  NOT NULL,
	CUR_STR_DESC VARCHAR(350) NOT NULL,
	CUR_STR_DATAINICIO DATETIME  NOT NULL,
	CUR_STR_NIVELENSINO VARCHAR(80) NOT NULL,
	CUR_STR_INSERCAO DATETIME NOT NULL,
	CONSTRAINT PK_CURSO_ID PRIMARY KEY (CUR_INT_ID),
	CONSTRAINT FK_CURSO_AREACATEGORIA_ID FOREIGN KEY (ACA_INT_ID)
		REFERENCES AREACATEGORIA (ACA_INT_ID)
);

	
CREATE TABLE USUARIO
(
	USU_INT_ID INT  NOT NULL IDENTITY(1,1),
	USU_STR_NOME VARCHAR(80) NOT NULL,
	USU_STR_EMAIL VARCHAR(80) NOT NULL,
	USU_STR_SENHA VARCHAR(80) NOT NULL,
	USU_STR_INSERCAO DATETIME  NOT NULL,
	USU_INT_SITUACAO INT NOT NULL,
	CONSTRAINT PK_USUARIO_ID PRIMARY KEY (USU_INT_ID),
	CONSTRAINT UK_EMAIL_ID UNIQUE (USU_STR_EMAIL)
);

CREATE TABLE FEEDBACK
(
	FEE_INT_ID INT  NOT NULL IDENTITY(1,1),
	USU_INT_ID INT  NOT NULL,
	FEE_STR_TITULO VARCHAR(80) NOT NULL,
	FEE_STR_DESC VARCHAR(250) NOT NULL,
	FEE_STR_AVALIACAO INT NOT NULL,
	FEE_STR_DATAPUBLICACAO DATETIME NOT NULL,
	FEE_STR_COMENTARIO VARCHAR(250) NOT NULL,
	CONSTRAINT PK_FEEDBACK_ID PRIMARY KEY (FEE_INT_ID),
	CONSTRAINT FK_FEEDBACK_USUARIO_ID FOREIGN KEY (USU_INT_ID)
		REFERENCES USUARIO (USU_INT_ID)
);


CREATE TABLE MENTOR
(
	MEN_INT_ID INT NOT NULL IDENTITY(1,1),
	MEN_STR_NOME VARCHAR(80) NOT NULL,
	MEN_STR_DATAINSERCAO DATETIME NOT NULL,
	MEN_INT_SITUACAO INT NOT NULL,
	CONSTRAINT PK_MENTOR_ID PRIMARY KEY (MEN_INT_ID)
);


CREATE TABLE MENTORIA
(
	MET_INT_ID INT NOT NULL IDENTITY(1,1),
	CUR_INT_ID INT NOT NULL,
	PLA_INT_ID INT NOT NULL,
	MEN_INT_ID INT NOT NULL,
	MET_STR_INSERCAO DATETIME NOT NULL,
	MET_INT_SITUACAO INT NOT NULL,
	CONSTRAINT PK_MENTORIA_ID PRIMARY KEY (MET_INT_ID),
	CONSTRAINT FK_MENTORIA_CURSO_ID FOREIGN KEY (CUR_INT_ID)
		REFERENCES CURSO (CUR_INT_ID),
	CONSTRAINT FK_MENTORIA_PLATAFORMA_ID FOREIGN KEY (PLA_INT_ID)
		REFERENCES PLATAFORMA (PLA_INT_ID),
	CONSTRAINT FK_MENTORIA_MENTOR_ID FOREIGN KEY (MEN_INT_ID)
		REFERENCES MENTOR (MEN_INT_ID)
);


CREATE TABLE PLATAFORMACURSO
(
	PLC_INT_ID INT NOT NULL IDENTITY(1,1),
	CUR_INT_ID INT NOT NULL,
	PLA_INT_ID INT NOT NULL,
	PLC_STR_DATAINSERCAO DATE NOT NULL,
	PLC_INT_SITUACAO INT NOT NULL,
	CONSTRAINT PK_PLATAFORMACURSO_ID PRIMARY KEY (PLC_INT_ID),
	CONSTRAINT FK_PLATAFORMACURSO_CURSO_ID FOREIGN KEY (CUR_INT_ID)
		REFERENCES CURSO (CUR_INT_ID),
	CONSTRAINT FK_PLATAFORMACURSO_PLATAFORMA_ID FOREIGN KEY (PLA_INT_ID)
		REFERENCES PLATAFORMA (PLA_INT_ID)
);


CREATE TABLE HISTORICOUSUARIO
(
	HIS_INT_ID INT NOT NULL,
	HIS_STR_INSERCAO DATETIME NOT NULL,
	HIS_STR_DESCRICAO VARCHAR(80) NOT NULL,
	PLC_INT_ID INT NOT NULL,
	USU_INT_ID INT NOT NULL,
	CUR_INT_ID INT NOT NULL,
	ACA_INT_ID INT NOT NULL,
	CONSTRAINT PK_HISTORICOUSUARIO_ID PRIMARY KEY (HIS_INT_ID),
	CONSTRAINT FK_HISTORICOUSUARIO_PLATAFORMACURSO_ID FOREIGN KEY (PLC_INT_ID)
		REFERENCES PLATAFORMACURSO (PLC_INT_ID),
	CONSTRAINT FK_HISTORICOUSUARIO_USUARIO_ID FOREIGN KEY (USU_INT_ID)
		REFERENCES USUARIO (USU_INT_ID),
	CONSTRAINT FK_HISTORICOUSUARIO_CURSO_ID FOREIGN KEY (CUR_INT_ID)
		REFERENCES CURSO (CUR_INT_ID),
	CONSTRAINT FK_HISTORICOUSUARIO_AREACATEGORIA_ID FOREIGN KEY (ACA_INT_ID)
		REFERENCES AREACATEGORIA (ACA_INT_ID)

);

INSERT INTO USUARIO (USU_STR_NOME, USU_STR_EMAIL, USU_STR_SENHA, USU_STR_INSERCAO, USU_INT_SITUACAO)
		VALUES ('Bianca Mendes', 'biancamendes5847@hotmail.com', '457TS58E', '14/05/2025 20:53:45:25', 0) 
			,('Gabrielly Vasconcelos', 'gabriellyvscls7572@gmail.com', 's5T785Ds', '14/05/2025 20:56:45:75', 0);

INSERT INTO ADMINISTRADOR (ADM_STR_NOME, ADM_STR_CPF, ADM_STR_SENHA, ADM_STR_DATAINSERCAO, ADM_INT_SITUACAO)
		VALUES ('Lady Gaga', '49847858948', '12344321ABC', '14/05/2025 21:13:22', 0);

INSERT INTO PLATAFORMA (ADM_INT_ID, PLA_STR_NOME, PLA_STR_URL, PLA_STR_DESC, PLA_INT_QUANTCURSO)
		VALUES (1, 'Curso em vídeo', 'https://www.cursoemvideo.com/cursos/', 'O Curso em Vídeo oferece aulas gratuitas em vídeo nas áreas de informática, programação, marketing e idiomas. Ideal para quem quer aprender de forma prática e no seu ritmo, com certificado disponível em muitos cursos.', 48)
			,(1, 'IPED', 'https://www.iped.com.br/cursos-gratis', 'O IPED disponibiliza cursos gratuitos em diversas áreas, como saúde, idiomas, marketing, tecnologia e muito mais. Você estuda online, no seu tempo, e pode emitir certificado ao final, caso deseje.', 433) 
			,(1,'FGV Educação Executiva', 'https://educacao-executiva.fgv.br/', 'A FGV oferece cursos online gratuitos em áreas como administração, direito, finanças e tecnologia, com certificado e estudo no seu ritmo.', 228)
			,(1,'Fundação Bradesco', 'https://www.ev.org.br/','Na Fundação Bradesco, você encontra cursos gratuitos sobre informática, finanças, educação e habilidades comportamentais. Tudo online e com certificado gratuito para ajudar na sua formação.', 78)
			,(1,'Cisco', 'https://www.netacad.com/pt/catalogs/learn', 'A Cisco disponibiliza cursos gratuitos com foco em tecnologia, como redes, programação, cibersegurança e IoT. São conteúdos atualizados e com certificado reconhecido internacionalmente. ', 40)
			,(1,'E-aulas USP', 'https://eaulas.usp.br/portal/home.action', 'A plataforma da USP oferece videoaulas gratuitas de disciplinas universitárias em diversas áreas do conhecimento. É aberta ao público e perfeita para quem busca conteúdo confiável e de qualidade.', 300);

INSERT INTO CATEGORIA (CAT_STR_DESC, CAT_STR_INSERCAO)
		VALUES ('Programação', '14/05/2025 21:00')
			,('Banco de Dados', '14/05/2025 21:00')
			,('Gestão e Negócios', '14/05/2025 21:00')
			,('Línguas Estrangeiras', '14/05/2025 21:00')
			,('Design e Ilustração', '14/05/2025 21:00')
			,('Inteligência Artificial', '14/05/2025 21:00')
			,('Saúde', '14/05/2025 21:00')
			,('Marketing', '14/05/2025 21:00');

INSERT INTO AREACATEGORIA (CAT_INT_ID, ACA_STR_INSERCAO, ACA_INT_SITUACAO)
		VALUES (1,'14/05/2025 21:15:45', 0)
			,(2,'14/05/2025 22:02', 0)
			,(3,'14/05/2025 21:21', 0)
			,(4,'14/05/2025 22:15', 0)
			,(5,'14/05/2025 22:18', 0)
			,(6,'14/05/2025 21:21', 0)
			,(7,'14/05/2025 21:30', 0)
			,(8,'14/05/2025 21:43', 0);

INSERT INTO CURSO (ACA_INT_ID, CUR_STR_TITULO, CUR_STR_URL, CUR_STR_CERTIFICACAO, CUR_FLO_QUANTHORA, CUR_STR_DESC, CUR_STR_DATAINICIO, CUR_STR_NIVELENSINO, CUR_STR_INSERCAO)
		VALUES (1, 'Algoritmo', 'https://www.cursoemvideo.com/curso/curso-de-algoritmo/', 'Certificado digital pago', 40, 'O curso de Algoritmo do Curso em Vídeo ensina lógica de programação com VisualG. Ideal para iniciantes, aborda estruturas básicas de forma prática. O conteúdo é gratuito, com certificação opcional.', '25/05/2025 10:00', 'Iniciante', '15/05/2025 13:30')
			,(5,'Introdução ao Design Digital', 'https://www.iped.com.br/cursos-gratis/programacao-e-desenvolvimento/curso-rapido/introducao-design-digital#conteudo', 'Certificado Digital', 5, 'Curso introdutório que aborda conceitos fundamentais de design digital, incluindo linguagens web, softwares de edição, organização de código e estruturação de páginas HTML. Ideal para iniciantes que desejam iniciar na criação de sites e interfaces digitais. Certificado digital gratuito.', '25/05/2025 10:00', 'Iniciante', '15/05/2025 13:00')
			,(2, 'Modelagem de Dados', 'https://www.ev.org.br/cursos/modelagem-de-dados', 'Com certificado', 8, 'Curso introdutório que aborda conceitos essenciais de modelagem de dados, como bancos de dados, relacionamentos e integridade. Ideal para iniciantes que querem entender a estruturação e organização de dados em sistemas. Certificado digital incluso.', '25/05/2025 10:00', 'Iniciante', '15/05/2025 12:30')
			,(1, 'Fundamentos de Python 2', 'https://www.netacad.com/pt/courses/python-essentials-2?courseLang=pt-BR', 'PCAP - Programador Associado Certificado com Phyton', 40, 'O curso Python Essentials 2 da Cisco aprofunda conceitos intermediários de Python, como manipulação de arquivos, funções avançadas e automação. Com exercícios práticos, o aluno desenvolve habilidades para criar scripts eficientes. Ao final, recebe certificado digital gratuito.', '25/05/2025 10:00','Intermediário', '15/05/2025 12:30')
			,(1, 'Fundamentos do Python 1', 'https://www.netacad.com/pt/courses/python-essentials-1?courseLang=pt-BR', 'PCEP - Programador Python de nível básico certificado', 30, 'O curso Python Essentials 1 da Cisco oferece uma introdução prática à programação em Python para iniciantes, com exercícios interativos e conceitos básicos. Ao final, o aluno recebe certificado digital. Curso gratuito disponível na Cisco Networking Academy.', '29/05/2025', 'Iniciante', '15/05/2025');
		
INSERT INTO PLATAFORMACURSO (CUR_INT_ID, PLA_INT_ID, PLC_STR_DATAINSERCAO, PLC_INT_SITUACAO)
		VALUES (1, 1, '15/05/2025 12:32', 0);

INSERT INTO MENTOR (MEN_STR_NOME, MEN_STR_DATAINSERCAO, MEN_INT_SITUACAO)
		VALUES ('Gustavo Guanabara', '15/05/2025', 0);

INSERT INTO MENTORIA (MEN_INT_ID, CUR_INT_ID, PLA_INT_ID, MET_STR_INSERCAO, MET_INT_SITUACAO)
		VALUES (1, 1, 1, '26/05/2025 13:00', 0);

			SELECT * FROM USUARIO;
			SELECT * FROM ADMINISTRADOR;
			SELECT * FROM PLATAFORMA;
			SELECT * FROM CATEGORIA;
			SELECT * FROM AREACATEGORIA;
			SELECT * FROM CURSO;
			SELECT * FROM PLATAFORMACURSO;
			SELECT * FROM MENTOR;
			SELECT * FROM MENTORIA;
