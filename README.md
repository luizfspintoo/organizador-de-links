![Logo do Projeto](./.github/logo.png)


# Organizador de Links

Aplicativo web onde os usuários podem adicionar links para séries, filmes ou shows em plataformas de streamming, organizando os conteúdos que vão assistir.

---

## 📽️ Demonstração

![Demonstração do Projeto](./.github/organizador-de-links.gif)

---

## 🚀 Funcionalidades

- Criação de conta e login com autenticação
- Cadastro de link com titulo, plataforma, e URL do link
- Editar Links
- Listagem e visualização detalhada dos links
- Upload de imagem do link
- Upload de imagem do perfil do usuário
- Atualização das informações do usuário

---

## 🧰 Tecnologias Utilizadas

- **PHP + Laravel**
- **HTML5, CSS3, JavaScript**
- **Tailwindcss, daisyUI**
- **SQlite**
- **Servidor Web**

---

## 🛠️ Como rodar o projeto

### ✅ Pré-requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e NPM
- Banco de dados (MySQL ou SQLite)
- Servidor Web (ou usar o embutido com php artisan serve)


### 📦 Instalação

1. Clone o repositório:

```bash
git clone https://github.com/luizfspintoo/organizador-de-links.git
cd organizador-de-links

```

2. Instale as dependências PHP
```bash
composer install
```

3. Instale as dependências JavaScript
```bash
npm install && npm run dev
```

### ⚙ Configuração do ambiente

1. Crie o arquivo .env

```bash
cp .env.example .env
```

2. Configure o banco de dados <br>
Edite o arquivo .env com as configurações corretas do seu banco de dados.
Para SQLite, adicione:
```bash
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```
📌 Certifique-se de que o arquivo database.sqlite exista no diretório database/.

3. php artisan key:generate
```bash
php artisan key:generate
```

4. Rode as migrate do banco de dados
```bash
php artisan migrate
```

🚀 Rode o projeto
```bash
php artisan serve
```

### ✅ Considerações Finais

Este projeto ainda está em desenvolvimento e pode ser expandido com novas funcionalidades. Fique a vontade para colaborar e sugerir melhorias.
Obrigado por visitar este repositório.
