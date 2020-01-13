# Teszt jegyzőkönyv

## Fő oldal tesztelése
##### Tesztelő: Horváth Dániel
##### Dátum: 2020.12.20

### A főoldal gomb tesztelése
- Amit várok:
  Bal egér gombbal rákattintva a főoldalt nyitja meg
- Ami történik:
  Meg nyitja a fő oldalt
##### Helyes működés
  
### A rólunk gomb tesztelése
- Amit várok:
  Bal egér gombbal rákattintva a rólunk oldalt nyitja meg
- Ami történik:
  Meg nyitja a rólunk oldalt
##### Helyes működés
  
### A kapcsolat gomb tesztelése
- Amit várok:
  Bal egér gombbal rákattintva a kapcsolatoldalt nyitja meg
- Ami történik:
  Meg nyitja a kapcsolat oldalt
##### Helyes működés

### A gallery gomb tesztelése
- Amit várok:
  Bal egér gombbal rákattintva megnyílnak a kategóriák
- Ami történik:
  Lenyílnak a kategóriák
##### Helyes működés
  
### A kategória gomb tesztelése
- Amit várok:
  Bal egér gombbal rákattintva megnyílik egy kategória és a képek amik abban vannak
- Ami történik:
  Megjelennek a képek
##### Helyes működés


## Kapcsolat oldal tesztelése

### A google térkép
- Amit várok: 
Kiolvassa az adatbázisból a címet és azt jeleníti meg
- Ami történik:
Egy alapértelmezett címet mutat
##### Hibás működés

### Üzenj nekünk
-Amit várok:
Kitöltöm az inputokat és az adatbázisban megadott email címre emailt küld
-Ami történik: 
A Submit gombra kattintva hibát dob
##### Hibás működés


## Admin felület tesztelése
##### Tesztelő: Horváth Dániel
##### Dátum: 2020.01.13

### Login felület tesztelése
- Amit csinálok:
  Hibás adatokat vagy üres mezőket adok meg a bejelentkezéshez, majd a login gombra kattintok
- Amit várok:
  Hibaüzenet jelenik meg, hibás bejelentkezés vagy hasonló szöveg
- Ami történik:
  Hiba üzenet megjelenik *Incorrect data!* szöveggel
##### Helyes működés

- Amit csinálok:
  Helyes adatokat adok meg a bejelentkezéshez, majd a login gombra kattintok
- Amit várok:
  Sikeres bejelentkezés és tovább dob egy másik oldalra
- Ami történik:
  Sikeres bejelentkezés és tovább dob a **Text settings** oldalra és fent középre kiírja: *Successful login!*
##### Helyes működés

### Admmin felület navigációs sáv tesztelése
- Amit csinálok:
  Home gombra kattintok
- Amit várok:
  Az admin felületen kívül a portfóliós oldalra dob
- Ami történik:
  Az admin felületen kívül a portfóliós oldalra dob
##### Helyes működés

- Amit csinálok:
  Settings gombra kattintok
- Amit várok:
  Lenyíló fül megjelenik a beállítási lehetőségekkel
- Ami történik:
  Lenyíló fül megjelenik a beállítási lehetőségekkel
##### Helyes működés


- Amit csinálok:
  Settings->Text gombra kattintok
- Amit várok:
  A Text settings oldalra dob
- Ami történik:
  A Text settings oldalra dob
##### Helyes működés

- Amit csinálok:
  Settings->Contact gombra kattintok
- Amit várok:
  A Contact settings oldalra dob
- Ami történik:
  A Contact settings oldalra dob
##### Helyes működés

- Amit csinálok:
  Settings->Gallery gombra kattintok
- Amit várok:
  A Gallery settings oldalra dob
- Ami történik:
  A Gallery settings oldalra dob
##### Helyes működés

- Amit csinálok:
  Logout gombra kattintok
- Amit várok:
  Kijelentkezik és a protfóliós oldal főoldalára dob
- Ami történik:
  Kijelentkezik és a protfóliós oldal főoldalára dob
##### Helyes működés

### Text settings felület tesztelése
- Amit csinálok:
  Bármilyen szöveg van az input mezőkbe írva a **Submit** gombra kattintok
- Amit várok:
  Az esetleges változtatásokat elmenti az adatbázisban és ez alapján változik a protfolóliós oldal felülete
- Ami történik:
  Ki írja, hogy *Successful saving!*, feltételezem hogy az adatbázisba mentés sikeres. De az admin felületen kívül az oldal felülete    sehol nem változott.
- Következtetés:
  Sikeres mentés az adatbázisba, a megjelenést nem ebben a modulban kell javítani
##### Helyes működés

### Contact settings felület tesztelése
- Amit csinálok:
  Bármilyen szöveg van az input mezőkbe írva a **Submit** gombra kattintok
- Amit várok:
  Az esetleges változtatásokat elmenti az adatbázisban és ez alapján változik a protfolóliós oldal felülete
- Ami történik:
  Ki írja, hogy *Successful saving!*, feltételezem hogy az adatbázisba mentés sikeres. Az portfóliós oldalon a footerben megadott adatok változtak.
##### Helyes működés

### Gallery settings felület tesztelése
- Amit csinálok:
  A **New Category** gombra kattintok
- Amit várok:
  Új input mező jelenik meg, ahol megadhatom az új kategória nevét
- Ami történik:
  Új input mező jelenik meg, ahol megadhatom az új kategória nevét
##### Helyes működés

- Amit csinálok:
  A **Remove** gombra kattintok
- Amit várok:
  Eltűnik az adott kategória input mezője és a protfóliós oldalon se lesz látható többé
- Ami történik:
  Eltűnik az adott kategória input mezője és a protfóliós oldalon se lesz látható többé. Kiírja felül középre: *Successful removed!*
##### Helyes működés

- Amit csinálok:
  A categorys fül alatt a **Submit** gombra kattintok
- Amit várok:
  Elmenti a kategóriák változtatásait, akár átnevezés akár új kategória hozzáadása történt
- Ami történik:
  Elmenti a kategóriák változtatásait, akár átnevezés akár új kategória hozzáadása történt. Kiírja felül középre: *Successful saving!*
##### Helyes működés

- Amit csinálok:
  Az Images fül alatt az egyik **Remove** gombra kattintok
- Amit várok:
  Eltűnik az adott kép és az összes input mezője és a protfóliós oldalon se lesz látható többé
- Ami történik:
  Eltűnik az adott kép és az összes input mezője és a protfóliós oldalon se lesz látható többé. Kiírja felül középre: *Successful removed!*
##### Helyes működés

- Amit csinálok:
  A **New Image** gombra kattintok
- Amit várok:
  Új input mezők jelennek meg, ahol megadhatom az új kép adatait
- Ami történik:
  Új input mezők jelennek meg, ahol megadhatom az új kép adatait
##### Helyes működés

- Amit csinálok:
  A categorys fül alatt a **Submit** gombra kattintok
- Amit várok:
  Elmenti a képek változtatásait, akár adatmódosítás akár új kép hozzáadása történt
- Ami történik:
  Elmenti a képek változtatásait, akár adatmódosítás akár új kép hozzáadása történt. Kiírja felül középre: *Successful saving!*
##### Helyes működés
