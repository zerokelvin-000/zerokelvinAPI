# Documentazione Zerokelvin API

> [!CAUTION]
> Attenzione: l'API è ancora in fase di sviluppo, tutti i riferimenti sono eseguiti in locale.

### Cosa è Zerokelvin API?

Zerokelvin è un servizio offerto da me, che consiste nella gestione di tabelle all'interno di un database. Il mio obiettivo è quello di offrire un servizio che sia facile da usare, ma allo stesso tempo sicuro ed economico.

### Come posso usufruirne?

Per usufruire di questo servizio è necessario un pagamento. Questo deve essere effettuato sulla pagina apposita oppure contattando privatamente [questo account](discord.com/users/730376049317249087), e necessita fino a 48 ore per essere elaborato.
Una volta eseguito il pagamento, l'utente potrà inserire il token che gli verrà dato all'interno del codice dei suoi progetti, la API si occupa di tutto il resto.
> [!WARNING]
> Il token fornito è strettamente personale e non dovrebbe essere condiviso. Una divulgazione non autorizzata potrebbe comportare a una fuga di dati associati al tuo account.

### È un servizio affidabile?

Come già detto, metto la sicurezza dei clienti e dei loro dati al primo posto, è per questo che ho sviluppato sistemi di sicurezza contro SQL Injection, DDoS e molto altro.

### Esempi di utilizzo

Si possono trovare degli esempi seguendo questo link https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples.

### Utilizzo con JavaScript

L'applicazione è stata creata utilizzando PHP, come anche gli esempi da me forniti, ma essendo che PHP sta venendo sostituito da linguaggi più semplici, come JavaScript, ho deciso di fornire anche esempi con quest'ultimo, i quali sono visibili [nelle stesse cartelle degli esempi in PHP](

### Funzionamento e utilizzo pratico usando PHP

Per utilizzare questa API, bisogna innanzitutto inserire il proprio token nel file `/configs.php`, come visibile di seguito o nella [pagina apposita](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/examples/uso%20delle%20credenziali/configs.php).

``` PHP
<?php
    class Configs{
        private $user_token;

        public function set_token($user_token){
            $this->user_token = $user_token;
        }

        public function get_token(){
            return $this->user_token;
        }
    }

    $configs = new Configs();
    $configs->set_token("token_di_prova");
```

Una volta impostato il token dal lato server, dobbiamo potervi accedere dal lato client. Ecco come possiamo farlo.

``` PHP
<?php
    require "./uso delle credenziali/configs.php";
    require "./invio di richieste/4 classe per le richieste/invio_richiesta.php";

    $user_token = $configs->get_token();

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
```
Si può trovare questo codice anche [nella pagina di esempio per le richieste](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/examples/pagina_di_esempio.php).

Terminato tutto ciò, possiamo avviare il server e usare il servizio, anche se consiglio vivamente di fare dei test locali prima di lanciare l'applicazione.

> [!NOTE]
> Il token è compatibile solo con siti certificati `ZeroKelvin`, i quali sono progettati per interagire con la API.

Un esempio di URL sarebbe quindi `https://zerokelvin.altervista.org/latest/tables/addUser`, che ci permette di aggiungere un utente ad una tabella, la quale viene specificata nei parametri della richiesta POST (continuare a leggere per capire meglio).

Per chi volesse capire più a fondo il funzionamento, qui di sotto verrà riportata una breve spiegazione della API.
Innanzitutto, dobbiamo accedere all'URL, che al momento è `zerokelvin.altervista.org/API`, a questo punto dobbiamo inserire altri parametri, quali
1. _**Versione**_, le versioni più alte sono generalmente più sicure e indicate con `v1`, `v2` e così via.
> [!TIP]
> Inserire `latest` per avere sempre l'ultima versione disponibile della API, questo potrebbe rendere obsoleti metodi usati.
2. _**Classe**_, una macroclasse, vogliamo interagire con una tabella? Un sensore? ...
3. Metodo, ci dice esattamente cosa vogliamo fare (esempio, Tabella -> addUser)

Una volta impostato l'URL, si deve inviare una richiesta di tipo POST (`le GET vengono rifiutate per motivi logistici e di sicurezza`) al server, che basandosi sui parametri dati ci dà una risposta.
> [!NOTE]
> Nota tecnica: La API non restuirà mai codici HTTP diversi da 200, per garantire più semplicità.
