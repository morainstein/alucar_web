<?php

session_start();
session_destroy();
header('Location: ../views/login.php');


/* 
--- IMPORTANTE:
-> LÓGICA DO LOGIN
-> SESSÕES vs COOKIES: O que são e suas diferenças
-> Session_start() -> Inicia a sessão
-> Session_destroy() -> Destroi a sessão

--- INTERESSANTE:
-> Como funciona o armazenamento de sessões

*/