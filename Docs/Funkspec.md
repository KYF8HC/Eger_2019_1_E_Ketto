# Funkcionális specifikáció

## Áttekintés
- Az alkalmazásunk célja egy olyan admin felület létrehozása portfóliós oldalak mögé, ahol az oldal tulajdonosa szerkesztheti a saját oldalát programozói tudás nélkül. Ezt a keretrendszer szerű vázat több protfóliós oldalhoz is fel lehessen használni témájától függetlenül. Ez csak a backend oldalát adná, az designt minten oldalon külön újra meg kell csinálni, de erre a célra rengeteg sablon található az interneten. A mi esetünkben egytetováló művésznek/szalonnak szeretnénk oldalt készíteni. Ahol a tartalom, szövegek, képek egy admin menün keresztül szerkeszthető.

## Jelenlegi helyzet
- Ne statikus weboldlakat adjunk az ügyfélnek amit nem tud majd módosítani a jövőben és állandóan szól az oldal üzemeltetőjének, hogy még ez a kép kell, szöveg itt nem stimmel vagy a facebook link változott. Ezeket minden meg tudja változtatni az admin menüben.

## Követelmény lista

|modul|név|kifejtés|
|---|---|---|
|Felület|általános|letisztult, egységes stílus, responsive|
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

## Jelenlegi üzleti folyamatok modellje
A mai világban rengeteg egyéni vállalkozó, kis cég, üzlet, szabaduszó szeretne portfólió oldalt létrehozni. Amit sűrűn kell frissíteni, új tartalmakkal feltölteni, hogy a lehető legtöbb ügyfélhez elérjenek. Ebben szeretnénk segíteni nekik, hogy ne kelljen minden weboldal szerkesztéshez informatikust hívni és időt és energiát spóroljanak azzal, hogy az admin menüben maguknak szerkeszthetik az oldalukat.

## Igényelt üzleti folyamatok modellje
Azért hogy egyszerűbbé tegyük az egyéni vállalkozók, kis cégek, üzletek, szabadúszók portfóliós weboldal készítését és szerkesztését egy weboldal motort hozunk ,létre ami segítségével ők is bármikor szerkeszthetik a saját portfóliós oldalukat.

## Használati esetek
- Álltalános felhasználó, megnyitja a portfólió oldalt. A kategóriákban képeket nézeget. A kapcsolat fül alatt elérést talál az oldal üzemeltetőjéhez. Ha meg győzőnek találja az oldal tartalmát valószínűleg felveszi a kapcsolatot az portfolói oldal tulajdonosával és megrendelést ad le.
- Admin felhasználó, tudja szerkeszteni az oldal tartalmát, hogy mindig napra kész legyen és minnél több ügyfélhez jusson el az ő terméke. Illetve a tartalmak és szövegek hitelesek legyenek a tevékenységi köréhez. Például ha új szolgáltatással bővül a válalkozása.

## Képernyő terv
- Mintának vett design linkje: http://tattoosalon.ancorathemes.com/

## Fogalomtár
- Dinamikus weboldal: Az adatbázisból kiolvasott adatok jelennek meg, ezeket bármikor lehet módosítani és a kinézet ehhez alkalmazkodik
- Reszponzív felület: optimális megjelenést biztosít - könnyű olvashatóság, egyszerű navigáció a lehető legkevesebb átméretezéssel és görgetéssel - a legkülönfélébb eszközökön (az asztali számítógép monitorjától egészen a mobiltelefonokig).
- Slideshow: Diavetítés(az oldal látogatója bal/jobb oldalra való kattintással léphet a előző/következő képre).

