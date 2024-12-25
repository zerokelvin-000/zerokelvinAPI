# Documentazione per la classe User

## A cosa serve questa classe?

L'uso della classe User è quello di gestire gli utenti in una tabella.

## I metodi

Questa è la lista dei metodi e i rispettivi parametri richiesti della classe User.

> [!NOTE]
> Il token è un requisito per ogni richiesta, che viene quindi tralasciato nella seguente lista.

1. Metodo `add`, usato per aggiungere utenti nella tabella. I suoi parametri sono `username`, `email`, `password`.
2. Metodo `edit`, usato per modificare i dati di un utente. I suoi parametri sono `username`, `email`, `password`.
3. Metodo `delete`, usato per eliminare un utente. I suoi parametri sono `user_id`.
4. Metodo `view`, usato per ottenere le informazioni di un utente. I suoi parametri sono `user_id`.
5. Metodo `list`, usato per ottenere le informazioni di tutti gli utenti. Questo metodo non ha parametri.

## Esempi di utilizzo

Di seguito saranno mostrate le richieste nella prima e le risposte nella seconda del server.

### Aggiungere un utente

``` JSON
{"username":"test","email":"test@test.com","password":"test"} 

{"message":"Query riuscita.","body":{}}
```

### Modificare un utente

``` JSON
TODO
```
