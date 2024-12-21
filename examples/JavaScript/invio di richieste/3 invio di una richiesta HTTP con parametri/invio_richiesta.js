function send_request(url, data){
    const request = fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });

    return request;
}

console.log(send_request(
    "http://localhost/personal/zerokelvin/api/v1/user/list",
    {"token": "abcd1234"}
));