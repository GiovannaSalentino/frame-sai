# Capitolo 4 — Sviluppo della piattaforma FrameSAI

## 4.1 Obiettivi dell’implementazione

La fase di sviluppo ha avuto l’obiettivo di trasformare il prototipo visuale di FrameSAI in una piattaforma web navigabile e progressivamente estendibile. Il lavoro non si è limitato alla riproduzione delle schermate progettate, ma ha riguardato anche la definizione di una struttura software capace di separare la gestione dei contenuti dalla loro presentazione.

La prima iterazione implementativa si è concentrata sulla consultazione dei quattro livelli che compongono il framework: 4 Principles, 12 Guidelines, 16 Success Criteria e 14 Design Patterns documentati nella fonte disponibile. Per ciascun livello sono state realizzate pagine di raccolta, sistemi di navigazione e, dove necessario, pagine di dettaglio.

## 4.2 Stack tecnologico

FrameSAI è stata sviluppata utilizzando Laravel 12 e PHP 8.2 per la componente server-side. Laravel è stato scelto perché mette a disposizione una struttura MVC, un sistema di routing dichiarativo e il template engine Blade.

L’interfaccia è stata costruita con HTML semantico, Blade e Tailwind CSS 4. Vite viene utilizzato per la compilazione e l’ottimizzazione degli asset CSS e JavaScript. Le interazioni leggere, come filtri e pannelli espandibili, sono implementate tramite JavaScript nativo, evitando in questa fase l’introduzione di framework frontend più complessi.

## 4.3 Architettura MVC

L’organizzazione dell’applicazione segue il pattern Model–View–Controller. Nella versione corrente:

- le rotte associano gli URL pubblici alle operazioni disponibili;
- i controller preparano i contenuti necessari per ciascuna pagina;
- le view Blade definiscono la presentazione e i componenti dell’interfaccia;
- il livello Model verrà impiegato nella fase successiva per rendere persistenti nel database gli elementi del framework e le loro relazioni.

Lo spostamento dei dati dai template ai controller costituisce un primo passo verso questa separazione. Le view non devono definire autonomamente principi, criteri o pattern, ma ricevono strutture dati già preparate dal relativo controller.

## 4.4 Organizzazione delle view

Per evitare la duplicazione del markup è stato introdotto un layout Blade condiviso. Il layout contiene la struttura HTML generale, il caricamento degli asset e l’area destinata al contenuto delle singole pagine.

La navigazione principale è stata isolata in un componente riutilizzabile. In questo modo la sidebar viene definita una sola volta e mantiene in tutte le pagine le stesse sezioni, lo stesso ordine e lo stesso meccanismo di evidenziazione della posizione corrente.

È stato inoltre creato un componente per le intestazioni, composto da pulsante di ritorno, icona, titolo, indicazione della sezione e linea cromatica. La standardizzazione riduce le differenze accidentali fra le schermate e rende più semplici le modifiche successive.

## 4.5 Routing e controller

Gli URL sono stati organizzati in modo da rappresentare chiaramente le risorse consultate:

- `/principles`;
- `/principles/{principle}`;
- `/guidelines`;
- `/success-criteria`;
- `/design-patterns`;
- `/design-patterns/{pattern}`.

I parametri dinamici vengono limitati ai valori effettivamente disponibili. Una richiesta relativa a un principio o pattern inesistente produce quindi una risposta 404, evitando la generazione di pagine incomplete.

Le precedenti rotte delle librerie vengono reindirizzate verso i nuovi URL per conservare la compatibilità con eventuali collegamenti già utilizzati.

## 4.6 Responsive design

La prima versione delle schermate utilizzava larghezze minime comprese fra 1180 e 1280 pixel. Questa impostazione riproduceva fedelmente il prototipo desktop, ma provocava uno scorrimento orizzontale sui dispositivi più piccoli.

Il layout è stato quindi trasformato in una struttura responsive. Su schermi desktop la navigazione assume la forma di una sidebar verticale; su smartphone e tablet diventa una barra superiore composta da cinque voci. Le griglie delle card riducono progressivamente il numero di colonne, mentre filtri e contenuti vengono disposti verticalmente.

## 4.7 Interazioni implementate

I filtri presenti nelle sezioni Guidelines, Success Criteria e Design Patterns sono stati resi operativi. La selezione di un principio o di una guideline modifica gli elementi visibili e comunica lo stato della selezione tramite attributi ARIA.

I Success Criteria e le informazioni contestuali dei Design Patterns adottano componenti espandibili. Questa scelta applica una strategia di progressive disclosure: le informazioni principali rimangono immediatamente leggibili, mentre i dettagli vengono mostrati su richiesta.

Sono stati inoltre implementati collegamenti incrociati tra i livelli del framework. Ogni guideline indica i Design Patterns e i Success Criteria associati; ogni pattern presenta le guideline e i criteri che contribuisce a soddisfare; i filtri possono essere inizializzati tramite parametri nell'URL per conservare il contesto durante la navigazione.

## 4.8 Accessibilità e semantica

La struttura utilizza elementi semantici quali `main`, `nav`, `aside`, `section`, `article` e intestazioni gerarchiche. La posizione corrente è comunicata con `aria-current`, mentre filtri e componenti espandibili utilizzano rispettivamente `aria-pressed` e `aria-expanded`.

Sono stati definiti anche stili di focus visibili per consentire la navigazione tramite tastiera. Il colore non costituisce l’unico mezzo di identificazione delle categorie, poiché ogni principio e guideline è accompagnato da un codice testuale.

## 4.9 Verifica tecnica

La piattaforma è stata verificata mediante test automatici e controlli nel browser. I test controllano:

- la corretta risposta delle pagine pubbliche;
- la gestione delle risorse inesistenti;
- il reindirizzamento dei vecchi URL;
- la navigabilità delle pagine di dettaglio.

La compilazione degli asset è stata completata tramite Vite. La resa è stata inoltre controllata a dimensione desktop e a una larghezza mobile di 390 pixel, verificando l’assenza di overflow orizzontale e il funzionamento delle principali interazioni.

## 4.10 Limiti dell’iterazione corrente

I contenuti sono attualmente preparati dai controller e non ancora memorizzati in un database dedicato. La successiva iterazione prevede la creazione dei modelli e delle relazioni necessarie per rendere Principles, Guidelines, Success Criteria e Design Patterns entità persistenti e interrogabili.

La valutazione svolta in questa fase è prevalentemente tecnica. La qualità d’uso dell’interfaccia dovrà essere analizzata attraverso una successiva valutazione euristica e test esplorativi con utenti.
