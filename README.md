# Controle de Tarefas - Laravel com Docker e PostgreSQL

Este projeto inclui a aplicação de Controle de Tarefas com os campos: título, descrição e id.

## Como usar

1. Suba os containers:
```
docker-compose up --build
```

2. Rode a migration:
```
docker exec -it laravel_app php artisan migrate
```

3. Acesse:
```
http://localhost:8000
```

✅ Apenas Adicionar, Listar e Excluir tarefas  
✅ Sem campo "concluída", igual à versão Streamlit  
✅ Laravel instalado automaticamente no build