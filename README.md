# danimassopardoModul-0613-M7-Enunciat-2-Setmanes-3-4-

Hub d'exercicis
---------------
Petit projecte amb exercicis PHP per a les setmanes 3 i 4.

Com executar el "hub" amb els exercisis de forma local:

1. Assegura't de tenir PHP instal·lat i accessible des del terminal.
2. Copia el repositori de GitHub fent servir 'git clone https://github.com/danimassopardo/danimassopardoModul-0613-M7-Enunciat-2-Setmanes-3-4-.git' i obre amb VSCode.
3. Obre un terminal a la carpeta del projecte en VSCode i arrenca el servidor integrat de PHP:

	php -S localhost:8000

4. Obre al navegador: http://localhost:8000/index.php

Resum dels exercicis i com provar-los
-----------------------------------

Exercici 1 — Variables i Conversió de Tipus
- Què fa: declara variables de tipus string, int (via cast), float i bool; fa conversions i mostra resultats.
- Com provar: obre http://localhost:8000/exercici1.php i comprova que apareixen Nom, Edat, Nota, Suma i el missatge d'aprovat/suspès.

Exercici 2 — Comprovacions i comparacions
- Què fa: usa isset/empty/is_null, comparadors i filter_var per validar dades i mostrar alerts.
- Com provar: obre http://localhost:8000/comprovacions.php; comprova la llista de comprovacions i els missatges d'alerta.

Exercici 3 — Alumnes, notes i condicions
- Què fa: recorre un array de noms, calcula la mitjana de dues notes i classifica el resultat (Suspès/Aprovat/Notable/Excel·lent) i mostra una taula HTML.
- Com provar: obre http://localhost:8000/exercici3.php i comprova la taula amb les files per Anna, Pau i Júlia.

Exercici 4 — Funcions amb arrays (compres)
- Què fa: calcula subtotals (preu * quantitat) i total final mitjançant funcions; mostra-ho en una taula amb el total a peu de pàgina.
- Com provar: obre http://localhost:8000/exercici4.php i comprova el subtotal per cada producte i el total (80.40 € en l'exemple).

Exercici 5 — Miniaplicació (formulari)
- Què fa: formulari POST que rep nom, edat i número; mostra missatge personalitzat, comprova majoria d'edat (funció), genera taula de multiplicar, compte enrere, i calcula la mitjana d'un array de notes.
- Com provar: obre http://localhost:8000/exercici5.php, omple el formulari i envia. Si hi ha errors de validació, apareixeran en vermell; en cas contrari veuràs els resultats.
