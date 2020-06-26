# Laboratório virtual

### Configuração do ambiente:

* Variável que define se está em ambiente de produção: 
arquivo `src/bib/classes/settings/Config.php` variável `$isProducao`.

* Para definir a senha do mysql, criar um arquivo chamado `.env` com as seguintes definições, substituindo a palavra senha pela respectiva senha, e alterando possíveis configurações locais.

```
MYSQL_ROOT_PASSWORD=senha
MYSQL_PASSWORD=senha
MYSQL_HOST=lab-mysql
MYSQL_PORT=3306
MYSQL_USER=lab2
MYSQL_DATABASE=lab2
MYSQL_CHARSET=utf8
DEBUG=TRUE
XDEBUG_HOST=host.docker.internal
```

* Configuração de banco de dados e email:
`src/bib/classes/settings/ConstantsConfig.php`

__IMPORTANTE__: O código foi alterado de forma a utilizar as variáveis de ambiente para conectar com o banco de dados. Se o servidor não for usar o docker, deve-se definir essas variáveis no servidor onde será executado o apache.

* É necessário criar os diretórios:

    - `docker/lab-mysql`: Diretório para arquivos relativos ao container lab-mysql.
    - `docker/lab-mysql/mysql`: Diretório no qual serão salvos os arquivos da base de dados.
    - `docker/lab-webserver/facialRecognitionLogin`: Diretório usado para salvar imagens de reconhecimento facial para login.
    - `docker/lab-webserver/logs`. Diretório de logs do apache.

Essa estrutura pode ser criada executando os seguintes comandos:

Windows:

```batch
mkdir docker\lab-mysql\mysql
mkdir docker\lab-webserver\facialRecognitionLogin
mkdir docker\lab-webserver\logs
```

Unix:

```bash
mkdir -p docker/{lab-mysql/mysql,lab-webserver/{facialRecognitionLogin,logs}}
```

* Após iniciar o sistema pela primeira vez, é necessário executar os scripts de inicialização do banco de dados. Esse script fará o INSERT dos dados necessários para que a aplicação funcione. Para executar esse script, seguir as orientações do [arquivo de inicizlização do banco de dados](db/data_backup/README.md).

---

### Inicialização:

Para subir o sistema, executar em um terminal, à partir do diretório no qual se encontra este projeto, o seguinte comando:
`docker-compose up`

Esse comando irá criar (caso necessário) e inicializar as imagens do apache e mysql. 


* Para acessar o laboratório, acessar a URL [localhost/lab](http://localhost/lab). Após realizar o cadastro, é necessário acessar a plataforma de administração para ativá-lo.

* O painel de amdministração está no caminho [localhost/lab/admin](http://localhost/lab/admin). Nos scripts de inicialização do banco de dados é criado um usuário de desenvolvimento: Usuário: `admin`, senha: `321321`.

* O banco de dados pode ser acessado no host `localhost`, porta `3306`, usuário `lab2` e senha definida no arquivo [.env](.env)

---

teste git