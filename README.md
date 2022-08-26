# PS inpeace

## Implementacao do "CRUD de igrejas" e "CRUD de membros" incluindo todos os requisitos pedidos.

### O projeto utilizou Laravel Sail para o desenvolvimento, porém não é aconselhável utilizar o Docker para a execução, pois o Sail usa um servidor buid-in que não suporta HTTPS(SSL), sendo assim, a requisição da API utilizada para selecionar os estados e cidades não funciona. Caso queira testar no container, as rotas /create e /edit não irão funcionar. Para testar localmente foi utilizado o XAMPP que usa o servidor Apache utilizando o comando `php artisan serve`.
