# php_project_webdevelopment
Sistema Web com PHP e MySQL Aplicação web desenvolvida em PHP com banco de dados MySQL, criada como atividade avaliativa do curso de Análise e Desenvolvimento de Sistemas da PUCPR. O projeto apresenta conteúdo educativo sobre os principais grupos de algas e implementa um sistema completo de autenticação e gerenciamento de usuários.
/
├── index.php             # Página inicial com galeria de algas
├── about.php             # Página sobre o autor
├── form.php              # Formulário de cadastro
├── cadastro.php          # Processamento do cadastro (backend)
├── login.php             # Tela de login
├── processa_login.php    # Autenticação e criação de sessão
├── perfil.php            # Página de perfil do usuário logado
├── atualizar_perfil.php  # Processamento da edição de perfil
├── deletar_conta.php     # Exclusão de conta do usuário
├── conexao.php           # Configuração da conexão com o banco
├── formAction.html       # Página de confirmação de envio (legado)
├── css/
│   └── style.css         # Estilo global da aplicação
├── js/
│   └── receiver.js       # Script de validação de formulário
└── imagens/              # Imagens dos grupos de algas

Segurança

Senhas armazenadas com password_hash() (bcrypt) e verificadas com password_verify()
Rotas protegidas verificam $_SESSION['id_usuario'] antes de executar qualquer operação
Sessão destruída ao deletar a conta
⚠️ Nota: As queries SQL utilizam interpolação direta de variáveis, o que as torna vulneráveis a SQL Injection. Em um ambiente de produção, recomenda-se o uso de prepared statements com mysqli ou PDO.

📚 Conceitos demonstrados
Autenticação com sessões PHP
Hash de senha com bcrypt
Operações CRUD (Create, Read, Update, Delete) em banco de dados
Proteção de rotas por sessão
Separação entre frontend (HTML/CSS/JS) e backend (PHP)
Tratamento de erros e feedback visual ao usuário

👤 Autor
Gustavo Kiyoto Sato
Estudante de Análise e Desenvolvimento de Sistemas (PUCPR) e Ciências Biológicas (UFPR)
