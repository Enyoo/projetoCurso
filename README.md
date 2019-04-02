# projetoCurso
Projeto que simula painel administrativo de um curso, onde gerencia alunos e cursos. Projeto feito totalmente em LARAVEL 5.8 tendo como base o PHP 7.1.3, utilizando o composer para gerar dependências da aplicação.

Esse projeto pode ser utilizado para gerenciar cursos (incluindo curso, editando curso e excluindo curso). Pode ser utilizado também para gerenciar alunos e matricula-los nos cursos, editando suas informações e/ou excluindo seu cadastro da base de dados.

Esse projeto segue o padrão MVC, onde seus arquivos possuem Models, Controllers e Viewes.

Para utilização desse projeto faz-se necessária a criação de uma base de dados local com o nome <b>curso</b>. Onde o usuário do banco seja <b>root</b> e não possua senha.

Após download do projeto faz-se necessária também a criação das tabelas, por meio de <b>migration (php artisan migrate)</b>.

Depois de configurado o ambiente, conforme explanado acima, pode ser feito o uso do sistema sem problemas.
