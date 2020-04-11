# Proiect-TW-v2.0

Realizat de:Bucnaru Raluca A6,
            Hlusneac Maria A3

## Descrierea proiectului

Aplicatia numita GoMaR (Good Manners Recommender) reprezinta suportul menit a le oferi utilizatorilor posibilitatea de a-si imbunatati bunele maniere in anumite situatii in functie de activitatea la care vor sa participe prin completarea unui test initial pe baza a datelor introduse la inregistrare si apoi completarea altor teste unde isi pot alege alte evenimente la care vor sa participe.

## Rolul fiecarui utilizator


1.Utilizatorii ce doresc sa se inregistreze pot intra pe pagina de register unde vor trebui sa introduca adresa de e-mail,un nume de 
utilizator si o parola. Dupa aceea, ei vor fi redirectionati la o pagina unde vor alege categoriile initiale.

2.Utilizatorii autentificati vor fi trimisi la o alta pagina principala ce va contine informatii. La apasarea butonului de test,
ei vor fi redirectionati la alte pagini,precum pagina de teste.

3.Administratorii au acces la informatii si comenzi care nu sunt existente la utilizatorii obisnuiti, de exemplu sa modifice intrebari la teste, sa stearga utilizatori,etc.

### Tehnologii

Cel mai probabil se va lucra in PHP si Javascript, iar ca baza de date vom folosi MySql.

### Baza de date

Se vor folosi baze de date pentru a stoca informatiile utilizatorilor precum parola, e-mail, categorie de varsta, nivelul 
pentru fiecare eveniment si asa mai departe.

### Frontend 

Tehnologiile folosite sunt:
1. HTML5 (Hyper Text Markup Language) pentru a defini structura paginilor Web
2. CSS3 (Cascading Style Sheets) pentru infrumusetarea paginilor
3. Probabil se vor folosi si Javascript si PHP, insa momentan s-a lucrat in principal in HTML si CSS.

## Interactiunea clientului cu serverul

Initial clientul nu este autentificat sau inregistrat. Un utilizator poate fi utilizator obisnuit sau administrator. 

Utilizatorul obsinuit se inregistreaza, este trimis la o pagina de alegere a categoriilor initiale, apoi la o pagina pentru un test initial. Dupa aceea este trimis pe pagina de home, unde vede cei mai buni utilizatori in functie de eveniment si categoria de varsta si scorul lui. De asemenea, poate sa faca alte teste alegand evenimentul si apasand butonul de submit. Daca nu vrea sa mai dea niciun test, poate apasa pe butonul de logout pentru a se deloga.

Administratorii au o sectiune de home separata. Acestia pot modifica datele utilizatorilor si adaugare intrebari in baza de date. Pentru delogare, au un buton de logout.

