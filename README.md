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

### Utilizzo con JavaScript

L'applicazione è stata creata utilizzando PHP, come anche gli esempi da me forniti, ma essendo che PHP sta venendo sostituito da linguaggi più semplici, come JavaScript, ho deciso di fornire anche esempi con quest'ultimo, i quali sono visibili [nella cartella degli esempi](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples).

##### Un esempio

aaa

### Utilizzo con PHP

Se invece si vuole utilizzare PHP, bisogna visitare la [cartella degli esempi in PHP](https://github.com/zerokelvin-000/zerokelvinAPI/tree/main/examples/PHP).

Per utilizzare questa API, bisogna innanzitutto inserire il proprio token nel file `/configs.php`, come visibile nella [pagina apposita](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/examples/PHP/uso%20delle%20credenziali/configs.php).

Una volta impostato il token dal lato server, dobbiamo potervi accedere dal lato client. Per farlo dobbbiamo creare una pagina HTML, in cui inseriamo del codice php per renderla dinamica. Un esempio è disponibile [qui](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/examples/PHP/pagina_di_esempio.php).

Terminato tutto ciò, possiamo avviare il server e usare il servizio, anche se consiglio vivamente di fare dei test locali prima di lanciare l'applicazione.

> [!NOTE]
> Il token è compatibile solo con siti certificati `ZeroKelvin`, i quali sono progettati per interagire con la API.
