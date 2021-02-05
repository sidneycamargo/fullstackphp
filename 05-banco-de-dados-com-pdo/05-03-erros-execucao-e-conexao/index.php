<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.03 - Errors, conexão e execução");

/*
 * [ controle de erros ] http://php.net/manual/pt_BR/language.exceptions.php
 */
fullStackPHPClassSession("controle de erros", __LINE__);

try {
    throw new Exception("Exception");
    throw new PDOException("Exception");
    throw new ErrorException("ErrorException", 1);

} catch (PDOException | ErrorException $exception) {
    var_dump($exception);
} catch (Exception  $exception) {
    echo "<p class='trigger error'>{$exception->getMessage()}</>";
} finally {
    echo "<p class='trigger'>Execução terminou!</p>";
}

/*
 * [ php data object ] Uma classe PDO para manipulação de banco de dados.
 * http://php.net/manual/pt_BR/class.pdo.php
 */
fullStackPHPClassSession("php data object", __LINE__);

try {
    $pdo = new PDO (
        "mysql:host=localhost;dbname=fullstackphp",
        "root",
        "",
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]
    );
} catch (PDOException $exception) {
    var_dump($exception);
}

/*
 * [ conexão com singleton ] Conextar e obter um objeto PDO garantindo instância única.
 * http://br.phptherightway.com/pages/Design-Patterns.html
 */
fullStackPHPClassSession("conexão com singleton", __LINE__);
