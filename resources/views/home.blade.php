@extends('layouts.main')
@push('styles')
    @vite(['resources/css/home.scss', 'resources/js/app.js'])
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
                <p>Creiamo lo stile intorno alla tua identità, valorizzando la natura. Il nostro lavoro è la nostra grande passione. L’acconciatura è al centro di un progetto più grande: accendere il tuo stile. Qualunque esso sia. </p>
            </div>
            <div class="barber-image" id="first-barber">

            </div>
        </div>
        <div class="barber-container">
            <div class="barber-image" id="second-barber">
                <img src="https://www.onhair.men/wp-content/uploads/2023/01/natale_rifici.jpg" alt="Foto di Natale Rifici, barbiere">
            </div>
            <div class="barber-text">
                <h3>Natale Rifici</h3>
                <span>Master Barber</span>
                <p>La qualità è quello che fai quando nessuno guarda.  Ogni dettaglio di On Hair è costruito per rispondere alla nostra personale esigenza di qualità.  Ma il test supremo è la soddisfazione del cliente, il suo sorriso quando si specchia. </p>
                <p>Per arrivare al tuo sorriso abbiamo fatto tantissima strada e non ci siamo fermati di fronte alle difficoltà. Dopo 18 mesi di ricerca e laboratori siamo riusciti nell’impresa di avere una linea di prodotti totalmente nostra. Dallo shampoo, ai balsami alle creme, abbiamo creato quello che volevamo per poter assistere il cliente al meglio, per dargli il piacere che merita. </p>
                <p>Essere On Hair vuol dire avere un contatto diretto, personale con chi si affida a noi. Look, stile ma anche relax, cura totale della persona, momenti di invidiabile benessere. Pensiamo che sia giusto così e ogni giorno lavoriamo per farlo meglio.</p>
            </div>
        </div>
    </section>
@stop
