# Desafio - StaffManager

Aplicação Web desenvolvida como parte do desafio para a vaga de programador, utilizando o framework Laravel/PHP. [cite_start]O sistema implementa um CRUD (Create, Read, Update, Delete) completo para gerenciar funcionários, protegido por um sistema de autenticação de usuários.

## ✨ Funcionalidades Principais

* [cite_start]**Autenticação Completa:** Sistema de registro e login de usuários com validação. [cite_start]O acesso ao sistema é restrito apenas a usuários autenticados.
* [cite_start]**CRUD de Funcionários:** Gerenciamento completo para criar, visualizar, atualizar e excluir funcionários.
* **Validação Avançada no Backend:**
    * [cite_start]Validação de todos os campos obrigatórios, como nome e gênero.
    * [cite_start]Garante que o CPF seja único no sistema.
    * Implementa uma **Regra Customizada** para validar a autenticidade matemática do CPF, garantindo que seja um documento real.
* **Melhoria de Usabilidade (UX):**
    * Máscaras de entrada aplicadas dinamicamente nos campos de CPF e Telefone para facilitar o preenchimento.

## 🛠️ Tecnologias Utilizadas

* [cite_start]**Backend:** PHP / Laravel 
* [cite_start]**Frontend:** Blade / Tailwind CSS / Alpine.js 
* [cite_start]**Banco de Dados:** MySQL ou SQLite 
* [cite_start]**Autenticação:** Laravel Breeze 

## 🚀 Como Rodar a Aplicação Localmente

[cite_start]Siga as instruções abaixo para configurar e executar o projeto no seu ambiente de desenvolvimento.

### Pré-requisitos

* PHP (versão 8.2 ou superior)
* Composer
* Node.js e NPM
* Um servidor de banco de dados (MySQL, MariaDB, etc.) **ou** apenas o driver do SQLite.

### Passos da Instalação

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/neto-batist/StaffManager.git](https://github.com/neto-batist/StaffManager.git)
    ```

2.  **Acesse o diretório do projeto:**
    ```bash
    cd StaffManager
    ```

3.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

4.  **Crie e configure o arquivo de ambiente `.env`:**
    * Copie o arquivo de exemplo:
        ```bash
        cp .env.example .env
        ```
    * Gere a chave da aplicação:
        ```bash
        php artisan key:generate
        ```

5.  **Configure o Banco de Dados no arquivo `.env`:**
    * Você tem duas opções principais:

    * **Opção A: Usando SQLite (Mais Simples)**
        * No arquivo `.env`, altere as variáveis de `DB_` para:
            ```env
            DB_CONNECTION=sqlite
            ```
        * Crie o arquivo do banco de dados:
            ```bash
            touch database/database.sqlite
            ```

    * **Opção B: Usando MySQL**
        * Certifique-se de que seu servidor MySQL está rodando e que você criou um banco de dados (ex: `staff_manager_db`).
        * No arquivo `.env`, preencha as credenciais:
            ```env
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=staff_manager_db
            DB_USERNAME=seu_usuario_mysql
            DB_PASSWORD=sua_senha_mysql
            ```

6.  **Execute as Migrations:**
    * [cite_start]Este comando criará todas as tabelas necessárias no banco de dados que você configurou.
    ```bash
    php artisan migrate
    ```

7.  **Instale as dependências do Node.js:**
    ```bash
    npm install
    ```

### Executando a Aplicação

#### Para Ambiente de Desenvolvimento (Recomendado)

Este modo ativa o Hot-Reload, que atualiza o CSS e JS automaticamente no navegador sem a necessidade de recarregar a página.

* **Abra dois terminais na pasta do projeto.**

* No **Terminal 1**, execute o servidor de frontend (Vite):
    ```bash
    npm run dev
    ```

* No **Terminal 2**, execute o servidor do Laravel:
    ```bash
    php artisan serve
    ```

#### Para Simular um Ambiente de Produção

* Compile os assets de forma permanente:
    ```bash
    npm run build
    ```
* Inicie apenas o servidor do Laravel:
    ```bash
    php artisan serve
    ```

### Acessando o Sistema

1.  Abra seu navegador e acesse `http://127.0.0.1:8000`.
2.  [cite_start]Clique em "Register" para criar uma nova conta.
3.  [cite_start]Após o login, você será redirecionado para o dashboard, onde poderá acessar o gerenciamento de funcionários.

## Dependências Adicionais

Todas as dependências necessárias para a aplicação são gerenciadas pelo Composer e pelo NPM e serão instaladas durante o processo de instalação. [cite_start]Não há necessidade de instalar pacotes adicionais manualmente.