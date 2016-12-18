# Seminar 1

# Sadržaj
* [Postavljanje razvojnog okruženja](#postavljanje-razvojnog-okruženja)
* [Uvod](#uvod)
* [Baza](#baza)
* [Rute](#rute)
* [Controller](#controller)
* [Lokalizacija](#lokalizacija)
* [Resources](#resources)



## Postavljanje razvojnog okruženja
#### 
```sh
vagrant box add laravel/homestead
cd ~
git clone https://github.com/laravel/homestead.git Homestead
cd Homestead
bash init.sh
cd ~
mkdir code    #Direktorij u kojem se nalazi projekt
```

Zatim je potrebno editirati konfiguracijsku datoteku Homestead.yaml koja se nalazi u ~/.homestead direktoriji
```sh
cd ~/.homestead
#otvoriti Homestead.yaml datoteku
```
primjer kako izgleda Homestead.yaml datoteka.... Obratiti pozornost na komentare

```sh
---
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

# Ovaj dio spaja mape sa kompa na virtualku (ovisi jeste li windows ili unix)
folders:
    - map: C:\Users\livem\code
      to: /home/vagrant/code

# Ovaj dio određuje URL preko koje pristupate u svom browseru umjesto ip adrese (dodati :8000 na url u browseru)
sites:
    - map: seminarone.app
      to: /home/vagrant/code/public
     
# seminarone je baza koja se koristi
databases:
    - homestead
    - seminarone
```

Nakon toga dodati URL u hosts file
```sh
127.0.0.1 seminarone.app
```

I sada sadrzaj "seminar1-finished" prekopirati u "code" direktorij na racunalu

Zatim treba inicjalizirati Laravel bazu
```sh
# U direktoriju projekta, prekopirati sadrzaj .env-example datoteke u .env datoteku (kreirati ako ne postoji)

# Postavke za bazu:
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seminarone
DB_USERNAME=homestead
DB_PASSWORD=secret

#Otici u Homestead direktorij

cd ~/Homestead
vagrant up
vagrant ssh

#navigirati u direktorij gdje je projekt, trebalo bi biti ~/code, ako ne postoji, kreirati ga

php artisan migrate
php artisan db:seed
```

To je to, baza je popunjena za dummy data i stranica je spremna za korištenje
Pristupiti preko url-a: seminarone.app:8000

## Uvod

Projekt je baziran PHP frameworku Laravel. Bilo je potrebno definirati rute, dodijeliti svakoj ruti odgovarajuci kontroler, izvršiti obradu podataka koji su kasnije prosljeđeni u odgovarajući View. Također je naprevljena lokalizacija za hrvatski i engleski.

Postoji 5 View-ova. 1 Layout/Parent/Master View i 4 Partial View-a.
- layout - glavni view
- home - view početne stranice
- event - view za prikaz pojedinačnog eventa
- about
- contact

## Baza

Laravel ima pametan feature "Migrations" pomoću kojeg korisnik definira izgled svoje baze u kod i pozivom jedne naredbe je inicijalizara, kao što prethodno to i napravili. Migracije se nalaze pod /database/migrations. Tamo se nalazi migracija za Events tabblicu.

```sh
$table->increments('id');
$table->string('title');
$table->string('titlehr');  -- sluzi zbog prijevoda, po defaultu je en glavni jezik
$table->string('picture');
$table->string('description');
$table->string('descriptionhr');   -- sluzi zbog prijevoda, po defaultu je en glavni jezik
$table->json('actors');
$table->timestamp('date');
$table->string('time');
$table->string('location');
$table->integer('price');
$table->nullableTimestamps();
```

Zatim se ta ista baza puni sa podacima koji se nalaze u /database/seeds/EventSeeder.php. To smo napravili prethodno koristeći naredbu

```sh
php artisan db:seed
```


## Rute

Rute služe kako bi Laravel znao što točno mora poslati korisniku. Nalaze se u /app/Http. 

```sh
Route::get('/', [
        'as' => 'home',
        'uses' => 'MainController@home'
    ]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'MainController@about'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'MainController@contact'
]);

Route::get('/event/{id}', [
    'as' => 'event',
    'uses' => 'MainController@getEvent'
]);

Route::get('/settings/lang/{id}', [
    'as' => 'changeLanguage',
    'uses' => 'MainController@changeLanguage'
]);

Route::post('/sendemail', [
    'as' => 'sendEmail',
    'uses' => 'MainController@sendEmail'
]);
```

Svakoj ruti dodijelimo naziv tako da ako se putanja promijeni, nećemo je morati mijenjati svugdje u kodu več je dobijemo pomoću naredbe

```sh
route('nazivRute');
```

Isto tako svkaoj ruti je dodijeljen kontroler i metoda/akcija koja se poziva za tu rutu


## Controller

Za ovaj projekt korišten je jedan Controller (zbog jednostavnosti aplikacije). Controller se naziv MainController te se nalazi u /app/Http/Controllers direktoriju. Svaka funkcija je detaljno iskomentirana i objašnjena.

## Lokalizacija

Moguće je koristiti jedan od dva jezika (engleski => defaul ili pak hrvatski). Prijevodi se nalaze u /resources/lang/en/l.php ili hr/l.php, a dohvaćaju se unutar View-a pomoću 
```sh
{!! trans('l.imeKljuca') !!}
```

Laravel sam prepozna koji jezik treb koristiti jer smo mu mi rekli u Controlleru.

## Resources

Svi resursi korišteni za ovaj projekt mogu se pronaći u direktoriju u datoteci "resources.txt"
