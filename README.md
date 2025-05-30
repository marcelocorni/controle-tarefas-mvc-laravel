# 📋 Controle de Tarefas com Laravel (MVC) + PostgreSQL + Docker

Este projeto demonstra como aplicar a arquitetura **MVC (Model-View-Controller)** utilizando o framework **Laravel (PHP)**, com persistência de dados em um banco **PostgreSQL**, totalmente orquestrado com **Docker**.

---

## 🎯 Objetivos

- Demonstrar a aplicação prática do padrão **MVC** usando Laravel
- Ensinar como estruturar uma aplicação modular com PHP
- Realizar operações de **CRUD de tarefas** (Criar, Listar, Excluir)
- Integrar a aplicação a um banco de dados PostgreSQL
- Orquestrar a aplicação completa usando Docker e Docker Compose

---

## 🧱 Estrutura do Projeto

```
controle_tarefas_laravel/
├── app/
│   ├── Http/Controllers/TarefaController.php   # Controller
│   └── Models/Tarefa.php                       # Model
├── resources/views/tarefas/index.blade.php     # View (Blade)
├── database/migrations/                        # Migration da tabela tarefas
├── routes/web.php                              # Definição das rotas
├── Dockerfile                                  # Imagem do app Laravel
├── docker-compose.yml                          # Orquestração dos containers
└── docker/apache/000-default.conf              # Configuração do Apache
```

---

## 🚀 Como Executar o Projeto

### 🔧 Pré-requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

### ▶️ Passos

1. Clone o repositório:

```bash
git clone https://github.com/marcelocorni/controle-tarefas-mvc-laravel.git
cd controle-tarefas-mvc-laravel
```

2. Inicie os containers:

```bash
docker-compose up --build
```

3. Rode a migration para criar a tabela no banco:

```bash
docker exec -it laravel_app php artisan migrate
```

4. Acesse no navegador:

```
http://localhost:8000
```

---

## 🗄️ Acesso ao Banco via DBeaver (opcional)

Você pode conectar ao PostgreSQL usando ferramentas como **DBeaver**:

- **Host:** `localhost`
- **Porta:** `5433`
- **Usuário:** `postgres`
- **Senha:** `postgres`
- **Banco:** `controle_tarefas`

---

## ⚙️ Funcionalidades da Aplicação

- ✅ Listar todas as tarefas registradas
- ➕ Adicionar nova tarefa com título e descrição
- ❌ Excluir tarefas por ID

---

## 📌 Tecnologias Utilizadas

- **PHP 8.2**
- **Laravel 10**
- **PostgreSQL 15**
- **Apache 2.4**
- **Docker e Docker Compose**

---

## 🎓 Ideal para:

- Estudantes de PHP
- Quem deseja entender MVC na prática com Laravel
- Professores e tutores que ensinam desenvolvimento web com frameworks modernos

---

## ✍️ Autor

Desenvolvido por Marcelo Corni Alves.  
Se curtiu, ⭐️ dê uma estrela no repositório!