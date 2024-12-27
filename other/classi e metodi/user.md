# Documentazione per la classe User

## A cosa serve questa classe?

L'uso della classe User è quello di gestire gli utenti in una tabella.

## I metodi

Questa è la lista dei metodi e i rispettivi parametri richiesti della classe User.

> [!NOTE]
> Il token è un requisito per ogni richiesta, che viene quindi tralasciato nella seguente lista.

1. Metodo `add`, usato per aggiungere utenti nella tabella. I suoi parametri sono `username`, `email`, `password`. [Esempi di utlizzo](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/other/classi%20e%20metodi/user.md#aggiungere-un-utente).
2. Metodo `edit`, usato per modificare i dati di un utente. I suoi parametri sono `user_id`, `username`, `email`, `password`. [Esempi di utlizzo](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/other/classi%20e%20metodi/user.md#modificare-un-utente).
3. Metodo `delete`, usato per eliminare un utente. I suoi parametri sono `user_id`. [Esempi di utlizzo](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/other/classi%20e%20metodi/user.md#eliminare-un-utente).
4. Metodo `view`, usato per ottenere le informazioni di un utente. I suoi parametri sono `user_id`. [Esempi di utlizzo](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/other/classi%20e%20metodi/user.md#visualizzare-le-informazioni-di-un-utente).
5. Metodo `list`, usato per ottenere le informazioni di tutti gli utenti. Questo metodo non ha parametri. [Esempi di utlizzo](https://github.com/zerokelvin-000/zerokelvinAPI/blob/main/other/classi%20e%20metodi/user.md#visualizzare-le-informazioni-di-un-utente).

## Esempi di utilizzo

Di seguito saranno mostrate le richieste nella prima e le risposte nella seconda del server.

> [!NOTE]
> Per approfondire tutte le risposte possibili, consultare il link TODO.

## Aggiungere un utente

### Richiesta
``` JSON
{
  "username": "pietro",
  "email": "pietro@outlook.com",
  "password": "12345"
}
```

### Risposta
``` JSON
{
  "message": "Query riuscita.",
  "body": {}
}
```

## Modificare un utente

### Richiesta
``` JSON
{
  "user_id": 2,
  "username": "dummy",
  "email": "dummy@gmail.com",
  "password": "password"
}
```

### Risposta
``` JSON
{
  "message": "Query riuscita.",
  "body": {}
}
```

## Eliminare un utente

### Richiesta
``` JSON
{
  "user_id": 2
}
```

### Risposta
``` JSON
{
  "message": "Query riuscita.",
  "body": {}
}
```

## Visualizzare le informazioni di un utente

### Richiesta
``` JSON
{
  "user_id": 2
}
```

### Risposta
``` JSON
{
  "message": "Query riuscita.",
  "body": {
    "user_id": 2,
    "username": "dummy",
    "email": "dummy@gmail.com",
    "password": "password"
  }
}
```

## Visualizzare le informazioni di tutti gli utenti

### Richiesta
``` JSON
{}
```

### Risposta
``` JSON
{
  "message": "Query riuscita.",
  "body": [
    {
      "user_id": 1,
      "username": "pietro",
      "email": "pietro@outlook.com",
      "password": "12345"
    },
    {
      "user_id": 2,
      "username": "dummy",
      "email": "dummy@gmail.com",
      "password": "password"
    }
  ]
}
```
