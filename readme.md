O deploy da aplicação envolve 3 passos:

1º O banco de dados para criação das tabelas deve-se chamar: musicalbum. Com charset => UTF8
e collation => utf8_general_ci (como base).</br>
2º A pagina inicial se da pelo link: http://localhost/nomedapasta/public/</br>
3º Os dados para conexão ao DB está no arquivo .env (diretório root do projeto) </br>
4º Para virar administrador basta alterar o valor na tabela users correspondente a coluna roleacess para 2. </br>
