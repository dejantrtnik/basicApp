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
Obvezen vnos svojih podatkov v ".env" datoteko
BOT = ???
ID = ???
* za uporabo telegram aplikacije se obrnite na njihovo stran
https://core.telegram.org/

zahteve serverja:
- PHP 7
- php-curl

zahtevani (že vključeni) moduli:
- dotEnv
- telegram
- ip
