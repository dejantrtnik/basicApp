## Uporaba

Pošiljanje podatkov na telegram
- dodana zaščita z ENV datoteko (SERVER mora biti pravilno nastavljen)
- preverjanje ip naslova po podatkih (država, ...)
- pošiljanje na telegram aplikacijo


### Navodila

V mapi "app" se nahaja datoteka "app.php", v
njej spremeni sledeče podatke ali uporabi variabilke (POST, itd...):
```php
$data = array(
  'header' => 'Glava', // spremeni "Glava"
  'name'   => 'Dejan', // spremeni "Dejan"
  'msg'    => 'Test'  // spremeni "Test"
  );
```
Obvezen vnos svojih podatkov v ".env" datoteko\
BOT = ??? \
ID = ???
* za uporabo telegram aplikacije se obrnite na njihovo stran:\
https://core.telegram.org/

zahteve serverja:
- PHP 7
- php-curl

zahtevani (že vključeni) moduli:
- dotEnv
- telegram
- ip

# primer uporabe - obrazec za pošiljanje

```PHP
if (isset($_POST['form'])) {
  $data = array(
    'header' => 'Moja spletna stran',
    'name'   => $_POST['name'],
    'msg'    => $_POST['msg']
  );
  app($app, $data);
}
```
```html
<form class="" action="" method="post">
  <input type="text" name="name" value=""><br>
  <input type="text" name="msg" value=""><br>
  <input type="submit" class="btn" name="form" value="Pošlji"><br>
</form>
```

#### v primeru napake
 v primeru da se pri osveževanju strani ponovno\
 pošljejo podatki na telegram, uporabite modul "clear", \
 dobite ga https://github.com/dejantrtnik/php-framework/tree/main/Modules  \
 ali pa na svoj način koncu izpraznite POST... 
