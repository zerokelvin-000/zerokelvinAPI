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