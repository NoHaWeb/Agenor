# Agenor file feltöltő jegyzőkönyv
Tesztelést végezte: 	Hanzel Norbert  
Operációs rendszer:	WIN10  
Böngésző: 		Mozilla Firefox  
Dátum: 		2024.05.31  
Talált hibák száma: 	1
## Bejelentkezés tesztelése 

### 	Bejelentkezés valid adatokkal
-	A már előre regisztrált teszt@elek.com email című user bejelentkezése email cím és jelszó bekérésével, majd a Submit gomb megnyomásával a dashboard oldalra navigál "You're logged in" üdvözlő felirattal.
- Az oldalon elérhető az aktuális user lenyíló menüje , illetve a file feltöltési opció.
### 	Bejelentkezés nem regisztrált felhasználóként
-   Nem regsiztrált email címmel és jelszóval a belépés sikertelen

## Regisztráció tesztelése 

### 	Regisztráció helyes adatokkal
-   A név, email cím, jelszó és a jelszó megerősítés megadása utána  Submit gomb a dashboard oldarla navigál, mint ahogy a bejelentkezés esetén.
### 	Regisztráció nem valid email címmel
- **Hiba**: Az email cím domain végződés nélkül is regisztrál usert.
- Az @ (at) karakter ellenben kötelező, anélkül a regisztráció sikertelen

## File feltöltés tesztelése 

- A teszt user bejelentkezés után a dashboard oldalon a file input opcióval kiválasztottam a robots.txt file-t, majd a Submit gombbal feltöltöttem.
- A file sikeres feltöltése után az oldalon "include"-olt files oldal megjeleníti az aktuálisan, illetve a már eddig feltöltött file-okat.
