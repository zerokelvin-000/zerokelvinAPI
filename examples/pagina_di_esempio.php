<?php
    require "./uso delle credenziali/configs.php";
    require "./invio di richieste/4 classe per le richieste/invio_richiesta.php";

    $user_token = $configs->get_token(); // è importante che la classe Configs venga inizializzata solo nel suo file, per tenere al sicuro le informazioni

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerokelvin API - Pagina di esempio per l'utilizzo delle credenziali</title>
</head>
<body>
    <p>Il token dell'utente è '<?php echo $user_token ?>'</p>
    <p>Nel database al momento ci sono <?php
        $request = new Request();

        $request->set_url("url di destinazione");
        $request->set_data([
            "username" => "pino il biricchino",
            "password" => "pino il nascondino"
        ]);

        $result = $request->send_request();

        echo $result ?? "58";
    ?> utenti.</p>
</body>
</html>