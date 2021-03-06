# Követelmény specifikáció

## Áttekintés
-  Az alkalmazásunk célja egy olyan admin felület létrehozása portfóliós oldalak mögé, ahol az oldal tulajdonosa szerkesztheti a saját oldalát programozói tudás nélkül. Ezt a keretrendszer szerű vázat több protfóliós oldalhoz is fel lehessen használni témájától függetlenül. Ez csak a backend oldalát adná, az designt minten oldalon külön újra meg kell csinálni, de erre a célra rengeteg sablon található az interneten. A mi esetünkben egytetováló művésznek/szalonnak szeretnénk oldalt készíteni. Ahol a tartalom, szövegek, képek egy admin menün keresztül szerkeszthető.

## Jelenlegi helyzet
- Ne statikus weboldalakat adjunk az ügyfélnek amit nem tud majd módosítani a jövőben és állandóan szól az oldal üzemeltetőjének, hogy még ez a kép kell, szöveg itt nem stimmel vagy a facebook link változott. Ezeket mindet meg tudja változtatni az admin menüben.

## Vágyálom rendszer
Célunk egy dinamikus weboldal létrehozása, egyszerű admin felülettel, így a megrendelő kedvére módosíthatja a linkeket, kategóriákat hozhat létre, feltöltheti képeit, leírást adhat meg hozzá a fejlesztő nélkül is. A képeket a felhasználók értékelhetik, írhatnak megjegyzéseket hozzá, a megrendelő moderálhatja ezeket a megjegyzéseket. Egy reszponzív felületet szeretnénk létrehozni, hogy alkalmazkodjon a különböző platformokról való megtekintéshez(telefonon is elérhető legyen megfelelő formában). A Szolgáltatások menüpont alatt a jövőben szeretnénk egy heti táblázatot létrehozni amit szintén tudna kezelni a megrendelő és ez alapján az oldal látogatói láthatják majd, hogy van e azon a héten szabad időpont a szalonban(személyes naptár a művésznek). A rólunk menüpont igazából egy leírást tartalmazna a csapatról és a csapat tagjairól. Egy Kapcsolat menüpont ami mint neve is jelzi a szalon elérhetőségeit fogja tartalmazni.A weboldalon a Kapcsolat oldal tartalmaz egy térképes helymeghatározást, a szalon címe alapján. A galéria tartalmazza az összesképet, választhatunk lista/galéria nézet között. A képeket kategorizálhatjuk testrészek, illetve az alkotójuk szerint, de ezeket szintén tudja módosítani a megrendelő az admin felületen is.

## Funkcionális követelmények
- A nyitó oldal egyszerű letisztult megjelenése, átlátható képeket és olvasható szövegeket tartalmaz
- Minden oldal tetején menüsáv jelenik meg, ami a navigáációt segíti
- Minden oldal alján a footer jelenik meg ahol a kapcsolat tartáshoz kellő socialmedia linkeket és oldalakat tartalmazza
- A kapcsolat oldalon az elérhetőségek jelennek meg és üzenet küldési lehetőség egy form segítségével, google térkép is látható
- A kategóriák füllel a képgaléria nyitható meg és a kategóriának megfelelő képek jelennek meg
- Admin felület, itt lehet módosítani az oldalon megjelenő tartalmakat

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
- Egy telejesen dinamikus oldalt szeretnénk létrehozni, hogy a megrendelőnek ne kelljen minden apró módosítás miatt a fejlesztőnek szólni, esetlegesen ha nem éppen akkor nem ér rá a fejlesztő, akkor ne kelljen a megrendelőnek a munkái publikálásával várni, és így csak akkor keresse a fejlesztőt ha az karbantartást igényel. Módosítani tudja az admin felületen az elérhetőségeit, képeket tudjon feltölteni, valamint a hozzájuk tartozó információkat megadni, ha egy új tag kerülne a szalonba, őt is bemutatni, illetve az időpont táblázatot is innen fogja elérni. Ide csak egyedi azonosítóval lehessen belépni, így egyedül a megrendelő tudja majd elérni. Ezzel gyorsítjuk a megrendelő munkáját, és csökkentjük a fejlesztőjét.

## Igényelt üzleti folyamatok
- Célunk egy olyan portfóliós weboldal létrehozása, amit a megrendelő igényeihez igazítottunk (ebben a projektben a megrendelő lehet akár egy tetováló, de akár egy festő is). Megkönnyíti azoknak a helyzetét, akik nem jártasak az informatika világában, mi teljesen levettük a megrendelő válláról ezt a súlyt és megoldottuk helyette.

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

## Riportok

## Fogalomtár
- Reszponzív felület: optimális megjelenést biztosít - könnyű olvashatóság, egyszerű navigáció a lehető legkevesebb átméretezéssel és görgetéssel - a legkülönfélébb eszközökön (az asztali számítógép monitorjától egészen a mobiltelefonokig).
- Slideshow: Diavetítés(az oldal látogatója bal/jobb oldalra való kattintással léphet a előző/következő képre).

