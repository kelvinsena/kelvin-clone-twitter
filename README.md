Um clone simplificado do Twitter (X) desenvolvido para fins de aprendizado, utilizando o framework **Laravel 11**. O projeto permite que usuários se cadastrem, façam login e publiquem mensagens curtas em um feed em tempo real.

##  O que foi feito
- **Sistema de Autenticação:** Implementação completa de Login, Registro e Verificação de E-mail utilizando o Laravel Breeze.
- **CRUD de Postagens:** Criação da funcionalidade de "Chirps", permitindo criar, listar e excluir postagens.
- **Banco de Dados:** Estruturação de tabelas via Migrations e uso do SQLite para persistência local.
- **Relacionamentos:** Configuração de relações Eloquent entre `User` e `Chirp` (Um usuário possui muitos tweets).
- **Interface Responsiva:** Visual moderno construído com Tailwind CSS e Vite.

##  O que foi aprendido
1.  **Arquitetura MVC:** Separação clara de responsabilidades entre Models (Dados), Views (Interface) e Controllers (Lógica).
2.  **Gerenciamento de Dependências:** Uso do **Composer** para pacotes PHP e **NPM** para bibliotecas JavaScript/CSS.
3.  **Migrations e Eloquent:** Como gerenciar versões do banco de dados e realizar consultas orientadas a objetos sem SQL puro.
4.  **Versionamento com Git:** Fluxo de trabalho para salvar e documentar código no GitHub.

##  Tecnologias Utilizadas
- **PHP 8.2+**
- **Laravel 11**
- **Tailwind CSS**
- **SQLite**
- **Vite**

##  Como rodar o projeto

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/kelvin-twitter-clone.git](https://github.com/seu-usuario/kelvin-twitter-clone.git)
    ```
2.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```
3.  **Instale as dependências do Node:**
    ```bash
    npm install
    ```
4.  **Configure o ambiente:**
    - Renomeie o arquivo `.env.example` para `.env`
    - Gere a chave: `php artisan key:generate`
5.  **Execute as Migrations:**
    ```bash
    php artisan migrate
    ```
6.  **Inicie o servidor e o visual:**
    - Terminal 1: `php artisan serve`
    - Terminal 2: `npm run dev`
