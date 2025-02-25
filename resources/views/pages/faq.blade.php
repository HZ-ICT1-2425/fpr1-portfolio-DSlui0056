@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('css/faq.css') }}" rel="stylesheet">
<!-- FAQ pagina -->
    <div class="container-faq">
      <section id="faq-list">
        <h2>Veelgestelde Vragen</h2>
        <ul>
          <li><strong>Hoe print je een document uit met je laptop bij HZ?</strong> - Als u over de inloggegevens van de universiteit beschikt, kunt u uw document afdrukken met de printer.
            <br>Zorg ervoor dat je je studentenkaart opwaardeert voordat je dat doet!</li><br>

          <li><strong>Hoe kun je bij de HZ een document scannen en naar je laptop sturen?</strong> - Er zijn document scanners beschikbaar om uw werk te digitaliseren.<br>
            U kunt inloggen en de document(en) naar uw universitaire e-mailadres sturen.
            documenten scannen</li><br>

          <li><strong>Hoe haal ik het meeste uit mijn studie via de HZ webshop?</strong> - Een bezoek biedt u een grote verscheidenheid aan populaire koopwaar.<br>
            Er zijn daar meestal goede studentendeals. Daar kun je kaartjes bestellen voor HZCultuur, zij organiseren leuke dingen
            dus kijk er eens naar.</li><br>

          <li><strong>Hoe kunt u een projectruimte boeken?</strong> - Vanaf de HZ Startpagina kunt u terecht bij Reserveringen & Bezoekers.<br>
            Ga daar verder naar de sectie Projectkamers boeken. Het kan zijn dat u niet ad hoc een geschikte plek kunt reserveren, dus plan vooraf.<br>
            Vind de gewenste kamer in de kolom en sleep een vakje van links naar rechts.<br>
            Klik op volgende en lees de voorwaarden, vul vervolgens de benodigde gegevens in en klik op aanvraag indienen.
            zelfstudie-reserveringen</li><br>

          <li><strong> Wat zijn de instructies als u uw auto op het parkeerterrein van de HZ wilt parkeren?</strong> - Er zijn parkeerplaatsen beschikbaar rondom het universiteitsgebouw in Vlissingen, Edisonweg.<br>
            U kunt parkeren bij het universiteitsgebouw in Middelburg, Het Groene Woud.<br>
            Om te parkeren in Middelburg kunt u gebruik maken van
            Parkeergarage Kousteensedijk, hiervoor dient u zich aan te melden bij JRCZ om een ​​uitrijkaart te verkrijgen.<br>
            Het wordt aangemoedigd om het openbaar vervoer of de fiets te overwegen.
            duurzaam transport</li><br>
        </ul>
      </section>
    </div>

    <!-- Call-to-action sectie -->
    <div class="cta-section">
      <h3>Heb je nog meer vragen?</h3>
      <p>Neem gerust contact met mij op!</p>
      <a href="mailto:slui0056@hz.nl?subject=Vraag&body=Beste%20Damian,">Contacteer mij</a>
    </div>

@endsection
