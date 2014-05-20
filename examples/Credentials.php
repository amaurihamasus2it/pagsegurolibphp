<?php

class Credentials
{
    public static function getCredentials()
    {
        $credentials = new PagSeguroAccountCredentials("vendedor@s2it.com.br", "E231B2C9BCC8474DA2E260B6C8CF60D3");
//        $credentials = new PagSeguroAccountCredentials("your@email.com", "your_token_here");
        return $credentials;
    }
}
