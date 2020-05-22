# Base de dados

O arquivo [db.sql](db.sql) contém o script de criação de todas as tabelas do sistema.

Ao adicionar uma tabela nova, adicionar também todas as primary keys e foreign keys necessárias.

Para os inserts iniciais do sistema (módulos, usuário admin, etc), executar o script [executar.sh](data_backup/executar.sh) dentro da imagem lab-mysql. Executar o seguinte comando no terminal ou powershell:

`docker exec lab-mysql bash /application/db/data_backup/executar.sh`