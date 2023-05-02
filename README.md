Сборка происходит с использованием php-8.1

composer находится в файле проекта

1. Копируем .env.example в .env
2. В .env вставляем параметры для подключения к бд
3. docker-compose up -d
4. docker exec -it app sh
5. php artisan migrate --seed
