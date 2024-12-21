function send_request(url){
    const request = fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
    });

    return request;
}

console.log(send_request("http://localhost/personal/zerokelvin/api/v1/user/list"));