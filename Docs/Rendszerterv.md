# Rendszerterv
## 1. A rendszer célja:
- A rendszer célja, hogy vevő egy olyan dinamikus weboldalt kapjon, ahol egyedül, a fejlesztő bevonása nélkül képes a weboldalt szerkeszteni egy admin felületen keresztül, ahová egyedi azonosítóval tud bejelentkezni. Fel tud tölteni képeket, azokhoz leírást tud megadni, szerkeszteni tudja az elérhetőségeit és mindent ami számára fontos. A felhasználó megtekintheti mindazt amit az oldal adminja feltölt, és visszajelzés tud neki küldeni.
## 2. Projektterv:
### Projektmunkások és felelőségek:
#### Backend munkálatok: Horváth Dániel
 - Feladat: Adatbázis kapcsolat létrehozása, lekérdezések megírása, admin felület
#### Frontend munkálatok: Didics Patrik, Gulyás Péter, Plávenszki Péter
- Feladat: Egy letisztul, könnyen kezelhető felhasználói felület létrehozása
### Ütemterv:

|Funkció|Feladat|Prioritás|Becslés|Aktuális becslés|Eltelt idő|Hátralévő idő|
|---|---|---|---|---|---|---|
|Követelmény Specifikáció||0|24|20|20|0|
|Funkcionális Specifikáció||0|24|20|20|0|
|Rendszerterv||0|24|24|24|0|
|Adattárolás|Adatmodell megtervezése|0|2|2|2|0|
## 3. Üzleti folyamat modellje:
- A modellhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.
## 4. Követelmények:
- Le írja nagyvonalakban mit csinál a program
## 5. Funkcionális terv: 
### Rendszerszereplők: 
- Admin
- User
### Rendszerhasználati esetek:
#### Admin:
- Bejelentkezhet az admin felületre
- Képeket tud feltölteni
- Képeket tud módosítani
- Kapcsolati információkat módosíthat
#### Felhasználó:
- Megtekintheti az admin által feltöltött tartalmakat
- Feedback-et tud küldeni az oldal üzemeltetőjének
## 6. Fizikai környezet:
- Az alkalmazás webes platformra készül, tehát elérhető okos eszközökről illetve számítógépekől
### Fejlesztői eszközök:
- MySQL Workbench
- Visual Studio Code
## 7. Absztark domain modell:

## 8. Architektuális terv: 

## 9. Adatbázis terv: 
- Az adatbázis tervhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.

## 10. Implementációs terv:
- Web: 
A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni.
Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és
úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság,
és könnyebb bővítés érdekében

## 11. Teszterv: 

## 12. Telepítési terv: 
- Webes alkalmazás, tehát a szoftver webes felületéhez csak egy ajánlott böngésző telepítése
szükséges (Google Chrome, Firefox, Opera, Safari), külön szoftver
nem kell hozzá.

## 13. Karbantartási terv:
