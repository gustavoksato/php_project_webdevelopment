# php_project_webdevelopment
Sistema Web com PHP e MySQL Aplicação web desenvolvida em PHP com banco de dados MySQL, criada como atividade avaliativa do curso de Análise e Desenvolvimento de Sistemas da PUCPR. O projeto apresenta conteúdo educativo sobre os principais grupos de algas e implementa um sistema completo de autenticação e gerenciamento de usuários.

Página inicial com galeria interativa dos grupos de algas
Cadastro de usuários com e-mail, senha (com hash) e alga favorita
Login e autenticação com sessões PHP
Perfil editável — o usuário pode atualizar nome e alga favorita
Exclusão de conta com confirmação do usuário
Página "Sobre" com informações do autor
Validação de formulários no frontend (JavaScript) e backend (PHP)

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
