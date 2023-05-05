<?php
// gestionale lavorativo

require_once './Models/Worker.php';
require_once './Models/Manager.php';
require_once './Models/Secretary.php';

$worker = new Worker("Pinco", "ufficio");

$manager = new Manager("Ignazio", "Deposito", "1234");

$secretary = new Secretary("Conor","ufficio", "2A");

// immaginiamoci che questa funzione venga eseguita in un file a parte tramite l'input di un utente
// tu prova ad eseguire questa azione:


try {
  $manager->setRate(5);
  // se tutto va bene... OK.
} catch (Exception $e) {
  // altrimenti acchiappa l'errore lanciato e mostrami il testo senza spaccare tutto
  // getMessage() è un metodo predefinito delle eccezioni.
  // quini è possibile chiamarlo nel catch
  // noi con questa eccezione possiamo farci quello che vogliamo
  echo $e->getMessage();
}

var_dump($worker);
var_dump($manager);
var_dump($secretary);

// echo $manager->getRate(4);



?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionale Staff</title>
</head>
<body>
  <h1>
    Ciao
  </h1>

</body>
</html>