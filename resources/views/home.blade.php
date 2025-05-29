@extends('layouts.main')
@push('styles')
    @vite(['resources/css/home.scss'])
@endpush
@section('content')
    <section id="jumbotron">
        <div id="jumbotron-text">
            <h1>On Hair <br> Barber Shop</h1>
            <h2>Accendiamo il tuo stile</h2>
            <a class="button" href="/">PRENOTA ORA UN APPUNTAMENTO</a>
        </div>
    </section>
    <section id="barbers">
        <div class="barber-container">
            <div class="barber-text">
                <h3>Andrea Miserendino</h3>
                <span>Master Barber</span>
                <p>Creiamo lo stile intorno alla tua identità, valorizzando la natura. Il nostro lavoro è la nostra grande passione. L’acconciatura è al centro di un progetto più grande: accendere il tuo stile. Qualunque esso sia.</p>
                <a class="button" href="/">Prenota ora un appuntamento</a>
            </div>
            <div class="barber-image" id="second-barber">
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/ANDREA_MISERENTINO.jpg" alt="Foto di Andrea Miserendino, barbiere" loading="lazy">
            </div>
        </div>
        <div class="barber-container">
            <div class="barber-image" id="second-barber">
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/natale_rifici.jpg" alt="Foto di Natale Rifici, barbiere" loading="lazy">
            </div>
            <div class="barber-text">
                <h3>Natale Rifici</h3>
                <span>Master Barber</span>
                <span id="barber-text-title">On Hair Thinking</span>
                <p>La qualità è quello che fai quando nessuno guarda.  Ogni dettaglio di On Hair è costruito per rispondere alla nostra personale esigenza di qualità.  Ma il test supremo è la soddisfazione del cliente, il suo sorriso quando si specchia.</p>
                <p>Per arrivare al tuo sorriso abbiamo fatto tantissima strada e non ci siamo fermati di fronte alle difficoltà. Dopo 18 mesi di ricerca e laboratori siamo riusciti nell’impresa di avere una linea di prodotti totalmente nostra. Dallo shampoo, ai balsami alle creme, abbiamo creato quello che volevamo per poter assistere il cliente al meglio, per dargli il piacere che merita.</p>
                <p>Essere On Hair vuol dire avere un contatto diretto, personale con chi si affida a noi. Look, stile ma anche relax, cura totale della persona, momenti di invidiabile benessere. Pensiamo che sia giusto così e ogni giorno lavoriamo per farlo meglio.</p>
                <a class="button" href="/">Prenota ora un appuntamento</a>
            </div>
        </div>
    </section>
    <section id="services">
        <h2>I nostri servizi</h2>
        <div id="services-container">
            <div>
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/capelli.jpg" alt="Taglio di capelli" loading="lazy">
                <h3>Capelli</h3>
                <p>I capelli dicono come stai, se ti prendi cura di te, quanta voglia hai di metterti in gioco o di stare tranquillo. I capelli sono un prolungamento della tua mente e della tua personalità. Qualcosa che non può essere lasciato al caso, né tanto meno essere affidato, senza pensarci, alle mode.  Noi cerchiamo di capirti, studiamo con te l’acconciatura che ti valorizzi, studiamo come tu stesso possa prenderti cura dei capelli migliorandone lucentezza, resistenza e bellezza.</p>
            </div>
            <div>
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/BARBA.jpg" alt="">
                <h3>Barba</h3>
                <p>Lunghissima, corta, rada, riccia, liscia, mossa. Le barbe dominano. Noi non abbiamo soluzioni pronte. Amiamo capire cosa vuoi, come vorresti presentarti. Conosciamo tutte le mode, sempre aggiornati su tutte le tendenze. Non siamo qui solo per questo. Vogliamo scoprire qual è la barba migliore per te, qual è la barba che ti piace.  La tua barba sei tu.</p>
            </div>
            <div>
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/percorsi-relax.jpg" alt="">
                <h3>Percorsi Relax</h3>
                <p>Tutte le età hanno i loro bisogni. L’uomo non invecchia, matura. Ma questo processo di raffinazione va curato e poi: si vede subito. La cura della pelle è parte integrante del nostro approccio. La nostra linea per la skin care è stata studiata meticolosamente: non un prodotto per tutto ma una collezione di soluzioni. La salute del tuo viso corrisponde al tuo benessere. </p>
            </div>
            <div>
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/THEOS.jpg" alt="">
                <h3>Theos</h3>
                <p>Abbiamo vissuto tutta la nostra vita dentro il mondo dell’acconciatura maschile. Abbiamo sperimentato tutti i prodotti, tutti gli strumenti. Dopo aver scelto i migliori prodotti, i più esclusivi e i più costosi, dopo averli provati e riprovati abbiamo deciso che non ci bastavano più, volevamo qualcosa che rispondesse totalmente alle nostre idee. Volevamo garanzie speciali, volevamo qualcosa di esclusivo. Abbiamo creato così una nostra linea di prodotti. Dopo 18 mesi di sperimentazione a fianco dei migliori laboratori chimici d’Italia abbiamo lanciato la nostra linea: Theos. Organici, biologici, anallergici, ultra concentrati, una linea esclusiva fatta per professionisti che vogliono solo il meglio.</p>
            </div>
        </div>
    </section>
@stop
