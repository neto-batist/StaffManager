# Desafio - StaffManager

[cite_start]Aplicação Web desenvolvida como parte do desafio para a vaga de programador, utilizando o framework Laravel/PHP. [cite_start]O sistema implementa um CRUD (Create, Read, Update, Delete) completo para gerenciar funcionários, protegido por um sistema de autenticação de usuários.

## Tecnologias Utilizadas

* [cite_start]**Backend:** PHP / Laravel 
* [cite_start]**Frontend:** Blade / Tailwind CSS 
* [cite_start]**Banco de Dados:** MySQL ou SQLite 
* [cite_start]**Autenticação:** Laravel Breeze 

## Como Rodar a Aplicação Localmente

[cite_start]Siga as instruções abaixo para configurar e executar o projeto no seu ambiente de desenvolvimento.

### Pré-requisitos

* PHP (versão 8.2 ou superior)
* Composer
* Node.js e NPM
* Um servidor de banco de dados (MySQL ou SQLite)

### Passos da Instalação

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/SEU_USUARIO/StaffManager.git](https://github.com/SEU_USUARIO/StaffManager.git)
    ```
    *(Lembre-se de substituir "SEU_USUARIO" pelo seu nome de usuário real no GitHub.)*

2.  **Acesse o diretório do projeto:**
    ```bash
    cd StaffManager
    ```

3.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

4.  **Crie o arquivo de ambiente:**
    * Copie o arquivo de exemplo `.env.example` para um novo arquivo chamado `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure o banco de dados:**
    * [cite_start]Abra o arquivo `.env` e configure as variáveis de banco de dados (DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.) de acordo com seu ambiente local.

7.  **Execute as migrations:**
    * [cite_start]Este comando criará todas as tabelas necessárias, incluindo `users` e `employees`.
    ```bash
    php artisan migrate
    ```

8.  **Instale as dependências do Node.js:**
    ```bash
    npm install
    ```

9.  **Compile os assets de frontend:**
    ```bash
    npm run build
    ```

10. **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

11. **Acesse a aplicação:**
    * Abra seu navegador e acesse `http://127.0.0.1:8000`.
    * [cite_start]Você pode se registrar com um novo usuário e começar a usar o CRUD de funcionários.

## Dependências Adicionais

[cite_start]Todas as dependências necessárias para a aplicação são gerenciadas pelo Composer e pelo NPM e serão instaladas durante o processo de instalação. Não há necessidade de instalar pacotes adicionais manualmente.