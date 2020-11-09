# Linx-Api
Biblioteca para integração da api Linx

### INSTALAÇAO

### COMO USAR
É necessário estar em posse do usuário e senha da linx, alem do mais ter conhecimento do seu dominio configurado na linx.

#### INSTANCIANDO A CLASSE
```php
$autoload = "vendor/autoload.php";
require $autoload;

use Eudovic\Linx\Linx;
$linx=new Linx("_seu_user_","_sua_senha_","_seu_dominio_");
```

#### FAZENDO REQUISIÇÕES
```php
 $linx->request($endpoint,$parametros,$metodo);
 ```
$endpoint // String com o endpoint desejado, use apenas o ultimo nome da url check https://seudominio.layer.core.dcg.com.br/reference.html
$parametros // Array com os parametros a serem enviados ( a bilioteca se encarrega em converter a array para o formato desejado pela linx)
$metodo // get,post,put,delete (embora exista mais que um método possível na biblioteca, atualmente a api da linx sua apenas o método "post");
