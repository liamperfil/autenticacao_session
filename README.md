# Sistema de Autenticação

Este é um sistema simples de autenticação de usuários desenvolvido em PHP.

## Funcionalidades

* Cadastro de usuários
* Login de usuários
* Controle de sessão
* Criptografia de senha (AES_ENCRYPT)
* Página de sistema protegida que requer login

## Arquivos Principais

* `index.php`: Página inicial com links para login e cadastro.
* `login.php`: Formulário de login.
* `cadastrar.php`: Formulário de cadastro.
* `testeLogin.php`: Script para verificar as credenciais do usuário.
* `sistema.php`: Página acessada após o login bem-sucedido.
* `sair.php`: Script para encerrar a sessão.
* `config.php`: Arquivo de configuração da conexão com o banco de dados.
* `style.css`: Arquivo de estilo CSS.
* `xgo.sql`: Dump do banco de dados.

## Configuração

1.  Importe o arquivo `xgo.sql` para o seu servidor de banco de dados MySQL.
2.  Configure as credenciais do banco de dados no arquivo `config.php`.

## Observações

* A senha é criptografada usando a função `AES_ENCRYPT` do MySQL.
* O sistema utiliza sessões para controlar o acesso às páginas protegidas.