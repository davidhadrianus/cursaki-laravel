Mata os conteiners que estao rodando:
``docker-compose down -v ``
Build os conteiners em modo de desenvolvimento:
``docker-compose up --build -d ``

##✅ Passos finais para verificar
Rode ``docker-compose ps`` e veja se todos os containers estão Up.

Rode ``docker-compose logs`` para checar se há erros em app e web.

Rode ``docker exec -it coursaki-laravel-app bash`` para entrar no conteiners.


Acesse http://localhost:8000

Confirme que o ``nginx/default.conf`` está apontando para app:9000.