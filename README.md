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

Per visualizzare degli esempi di utilizzo, visitare [la loro pagina](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples).

### Funzionamento della API

Questo è un punto leggermente più teorico, ma utile per chi ha voglia di sapere.
Innanzitutto dobbiamo partire da un URL, che contiene tutti i dati fondamentali per indirizzarci alla risorsa interessata, un po' come un router wifi.
Per riassumere i dati dell'URL:
1. Radice: una parte di indirizzo statica.
2. Versione: usata per richiedere risorse più o meno aggiornate, usare `latest` per usare l'ultima versione disponibile, oppure `v1`, `v2`, ... .
3. Classe: indica a quale risorsa vogliamo accedere.
4. Metodo: indica esattamente cosa vogliamo fare.

Qualche esempio:
* `https://zerokelvin.altervista.org/API/user/list`
* `https://zerokelvin.altervista.org/API/product/add`
* `https://zerokelvin.altervista.org/API/finance/calculate`

Probabilmente ora sorge un dubbio, ovvero come possiamo dire chi sta eseguendo l'azione? Di quale tabella stiamo parlando?
Per fare questo, viene usata una richiesta POST, che contiene un URL e dei parametri.
È possibile trovare una documentazione approfondita delle classi e dei loro metodi, con i rispettivi parametri necessari in ***TODO***.
Per degli esempi utilizzando JavaScript o PHP, seguire i link [JavaScript](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples/JavaScript) oppure [PHP](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples/PHP).

### Protezione del proprio token

Come evidenziato in precedenza, il token è indispensabile e deve essere protetto, e per farlo ci sono diversi punti da tenere a mente.
1. **Non condividerlo con nessuno**, nessuno oltre a te e i tuoi collaboratori deve conoscere il token.
2. **Capire il funzionamento**, il modo in cui viene gestito il token secondo il codcie che ho creato è semplice: viene creato un oggetto Configs nel file `configs.*` (che ricordo essere dal lato server), e una volta incluso `configs.*` nella pagina che desideriamo saremo noi a decidere quali informazioni ottenere (vedi [la pagina degli esempi](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples) per capire meglio).
3. **Se hai bisogno, chiedi**, nel caso in cui qualcosa non è chiaro, è meglio chiedere piuttosto che perdere tutti i dati.

#### Cosa fare se ho perso il token

Dato che il token viene usato per cifrare le informazioni del database, la sua perdita comporterà la perdita di tutti i propri dati. È vivamente consigliato di scrivere il proprio token anche su un pezzo di carta o da qualche parte.

### Requisiti necessari

* **Javascript**: nessun requisito
* **PHP**: Server per eseguire PHP, [xampp](https://www.apachefriends.org/it/index.html) è ottimo, si possono seguire le istruzioni di [questo video](https://www.youtube.com/watch?v=r0lDDeVkaks) (crediti a @crashprogramming9895)

Nota: Zerokelvin API non ha dipendenze e non usa librerie esterne.

### Utilizzo con JavaScript

L'applicazione è stata creata utilizzando PHP, come anche gli esempi da me forniti, ma essendo che PHP sta venendo sostituito da linguaggi più semplici, come JavaScript, ho deciso di fornire anche esempi con quest'ultimo, i quali sono visibili [nella cartella degli esempi](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples).

#### Un esempio in JS

``` JAVASCRIPT
// Il file delle configurazioni

class Configs{
    set_token(token){
        this.token = token;
    }

    get_token(){
        return this.token;
    }
}

const configs = new Configs;
configs.set_token("token_di_prova");
```
``` JAVASCRIPT
// Il file per inviare richieste

class Request{
    constructor(url, data){
        this.url = url;
        this.data = data;
    };

    send_request(){
        const request = fetch(this.url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(this.data),
        });
    
        return request;
    }
}
```
``` HTML
<!-- Il file .html (la pagina principale) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerokelvin API - Pagina di esempio per l'utilizzo delle credenziali</title>
    <script src="configs.js"></script>
    <script src="invio_richiesta.js"></script>
</head>
<body>
    <p>Il token dell'utente è <span id="token"></span>.</p>
    <p>Nel database al momento ci sono <span id="users"></span> utenti.</p>
</body>
<script>
    const token_span = document.getElementById("token");
    const users_span = document.getElementById("users");

    const request = new Request("url di destinazione",{"username": "pino il biricchino","password": "pino il nascondino"})
    var response = request.send_request();

    if(response.ok != 200){
        response = "53";
    }

    token_span.innerHTML = configs.get_token();
    users_span.innerHTML = response;
    console.log(response);
</script>
</html>
```

#### Non hai capito qualcosa o hai bisogno di assistenza con la configurazione in JavaScript?

Non ti preoccupare! È possibile conttattarmi privatamente su [questo account](discord.com/users/730376049317249087) via discord, oppure inviandomi un'email all'indirizzo zerokelvin.personal@gmail.com.

### Utilizzo con PHP

Se invece si preferisce usare il linguaggio nativo, ovvero PHP, ci si può documentare nella [cartella degli esempi in PHP](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples/PHP).

#### Un esempio in PHP

``` PHP
<?php
    // il file delle configuarzioni

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

``` PHP
<?php
    // il file per inviare richieste

    class Request{
        private string $url;
        private array $data;

        public function set_url($url){
            $this->url = $url;
        }

        public function set_data($data){
            $this->data = $data;
        }

        public function send_request(){
            $options = [
                'http' => [
                    'header' => "Content-Type: application/json",
                    'method' => 'POST',
                    'content' => json_encode($this->data)
                ],
            ];
        
            $context = stream_context_create($options);
            $request = @file_get_contents($this->url, false, $context);
            
            if(!$request){
                return null;
            }
    
            return $request;
        }
    }
```

``` PHP
<?php
    // il file PHP (la pagina principale)

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
```

#### Non hai capito qualcosa o hai bisogno di assistenza con la configurazione in PHP?

Non ti preoccupare! È possibile conttattarmi privatamente su [questo account](discord.com/users/730376049317249087) via discord, oppure inviandomi un'email all'indirizzo zerokelvin.personal@gmail.com.

> [!NOTE]
> Il token è compatibile solo con siti certificati `ZeroKelvin`, i quali sono progettati per interagire con la API.
