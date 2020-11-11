<?php

class ConstantsConfig {

    public function __construct($isProducao = false) {
        $this->defineConstantes();
    }

    private function defineConstantes() {
        define("URL", Util::urlAutomatica(true));

        define("CONFIG_HOST", getenv("MYSQL_HOST"));
        define("CONFIG_PORTA", getenv("MYSQL_PORT"));
        define("CONFIG_DBNAME", getenv("MYSQL_DATABASE"));
        define("CONFIG_USER", getenv("MYSQL_USER"));
        define("CONFIG_PASSWORD", getenv("MYSQL_PASSWORD"));
        define("CONFIG_CHARSET", getenv("MYSQL_CHARSET"));

        # email
        define("EMAIL_USERNAME", getenv("EMAIL_USERNAME"));
        define("EMAIL_PASSWORD", getenv("EMAIL_PASSWORD"));
        define("EMAIL_CHARSET", getenv("EMAIL_CHARSET"));
        define("EMAIL_PORTA", getenv("EMAIL_PORTA"));
        define("EMAIL_CRIPTOGRAFIA", getenv("EMAIL_CRIPTOGRAFIA"));
        define("SMTP_HOST", getenv("SMTP_HOST"));

        # local de upload dos arquivos
        define("LOCAL_CAMERA", "/home/html/facialRecognitionLogin");
    }
}

?>
