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