# PS inpeace

## Implementacao do "CRUD de igrejas" e "CRUD de membros".

#### O projeto utilizou Laravel Sail para o desenvolvimento, porém não é aconselhável utilizar o Docker para a execução, pois o Sail usa um servidor buid-in que não suporta HTTPS(SSL), sendo assim, a requisição da API utilizada para selecionar os estados e cidades não funciona. Caso queira testar no container, as rotas /create e /edit não irão funcionar, pois nelas estão presentes os dynamics-dropdows que requisitam a API para pegar os estados e cidades de maneira dinamica. Para testar localmente foi utilizado o XAMPP que usa o servidor Apache utilizando o comando `php artisan serve`.

#### Por padrao a tela inicial sera a tela de membros, mas caso queira ver as igrejas cadastradas basta digitar `/igrejas` no navegador.
