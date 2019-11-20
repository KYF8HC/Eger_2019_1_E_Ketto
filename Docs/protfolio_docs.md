# Követelmény specifikáció - Rendszerterv

## Áttekintés
- Portfolóis weboldal egy tetováló művésznek/szalonnak. A tartalom, szövegek, képek egy admin menün keresztül szerkeszthető. A design nélkül implementálható más portfolió oldalakba.

## Jelenlegi helyzet
- Ne statikus weboldlakat adjunk az ügyfélnek amit nem tud majd módosítani a jövőben és állandóan szól az oldal üzemeltetőjének, hogy még ez a kép kell, szöveg itt nem stimmel vagy a facebook link változott. Ezeket minden meg tudja változtatni az admin menüben.

## Vágyálom rendszer

## Funkcionális követelmények
- Dinamikus portfólió weboldal

## Rendszerre vonatkozó szabványok
- PHP nyelven
- MVC tervezési minta szerint
- PDO adatbázis kapcsolattal
- MySQL adatbázishoz
- Bootstrap
- jQuery könyvtárak segítségével
- Fontawesome iconok
- google fonts használatával.

## Jelenlegi üzleti folyamatok modellje

## Igényelt üzleti folyamatok

## Követelmény lista

|modul|név|kifejtés|
|---|---|---|
|Felület|általános|letsztult, egységes stílus, responsive|
|Modifikáció|általános|az oldal tetejére gomb|
|Felület|header|egységes fejrész minden oldalra|
|Modifikáció|header|A kategóriák az változhatnak|
|Felület|footer|egységes lábrész minden oldalra|
|Modifikáció|footer|Az elérhetőségi iconok és linkek változhatnak|
|Felület|nyitó oldal|teljes kép méretű slide show, 4-5 kép és címek, lefelé tekerve néhány véletlen kép, szövegek|
|Felület|rólunk oldal|szöveg, kép változtatható az admin menüben|
|Felület|kapcsolat oldal|írj nekünk rész|
|Felület|kapcsolat oldal|google maps|
|Felület|galléria|kategóriánként szükíthetjük a képek listáját|
|Felület|galléria|lista vagy gallery nézet (mint a webshopokban)|
|Felület|galléria|képek listázása feltöltési idő vagy abc alapján (oda-vissza)|
|Felület|admin menü|semleges oldal, a többi oldalon megjelenő adatokat lehet itt beállítani|
|Modifikáció|admin menü|adatbázisba frissíti az adatokat|

## Riportok

## Fogalomtár

## Képernyő terv
- Mintának vett design linkje: http://tattoosalon.ancorathemes.com/

## Funkcionalitás terv

### Admin felület

1. Text settings
  - A weboldalon látható szövegeket lehet itt beállítani
  - Lehet olyan hogy csak a címet adjuk meg vagy csak a szöveget
  - Vagy cím és szöveg párokat
  - Az üresen hagyott inputok egyszerűen nem jelennek meg
  
2. Contact settings
  - Az elérhetőségeket lethet itt beállítani, milyen linkek jelenjenek meg a contact oldalon és a fotterbe
  - Ezek a linkek iconokkal fognak megjelenni és az adott közösségi oldal linkjére visz
  - Az üresen hagyott közösségi oldalak linkjei nem jelennek meg
  
3. Gallery
  - Kategóriák létrehozása, ezek megjelennek a headerben
  - képek feltöltése, kategóra, cím és leírás megadása
  - feltöltéshez autómatikusan menti a dátumot
  - a képet átmásolja a szerver egy megadott mappájába *assets/img/gallery*
  - ellenőrizzük, hogy csak képeket lehessen feltölteni, megengedett formátumok: **JPG, JPEG, PNG, GIF**
  - egy képet csak egyszer tudunk feltölteni, mármint ugyan azzal a névvel csak egy kép lehet
  - törlés esetén a mappából is törlődik a kép
