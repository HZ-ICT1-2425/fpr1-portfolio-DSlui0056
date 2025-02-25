@extends('components.layout.main')

@section('content')

    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">

<!-- Hero Sectie -->
    <div class="hero">
        <div class="container">
            <h1>Welkom op mijn Portfolio</h1>
            <p>Ik ben Damian, een ontwikkelaar met ervaring in het bouwen van dynamische en interactieve applicaties.</p>
            <p><a href="pages/profile.html" class="btn">Leer meer over mij</a></p>
            <a href="#motivatie" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </div>

    <!-- Motivatie Sectie -->
    <div class="container">
        <section id="motivatie-experience" class="content-with-image">
            <div class="text-section">
                <h2>Mijn Motivatie voor ICT</h2>
                <p>
                    Mijn passie voor ICT begon tijdens mijn MBO-niveau 4 opleiding Software Developer, waar ik de basis heb gelegd voor mijn programmeervaardigheden.
                    Naast de theoretische kennis heb ik vooral zelf veel geleerd door websites en applicaties te ontwikkelen, wat me liet zien hoe praktisch en veelzijdig technologie is.
                </p>
                <p>
                    Data science is mijn nieuwste interesse. Hoewel ik hier nog weinig ervaring mee heb, zie ik het als een krachtige manier om inzichten te halen uit grote datasets en toekomstige trends te voorspellen. Ik wil me hier verder in verdiepen en leren hoe AI-oplossingen kunnen bijdragen aan een efficiëntere wereld.
                </p>
                <h3>Waarom ICT de juiste studie voor mij is</h3>
                <p>
                    ICT biedt de ideale mix van theorie en praktijk. Na mijn ervaring met softwareontwikkeling wil ik mijn kennis uitbreiden, vooral op het gebied van data-analyse en AI. Mijn doel is om oplossingen te creëren voor maatschappelijke vraagstukken, zoals in de zorg en duurzaamheid.
                </p>
                <h3>Bewijs van mijn Interesse</h3>
                <p>
                    Ik heb mezelf leren programmeren en gewerkt aan projecten in web- en applicatieontwikkeling. Hoewel data science nieuw voor me is, volg ik online tutorials op Youtube bijvoorbeeld om meer te leren over data-analyse en machine learning. Dit toont mijn inzet om continu te groeien in ICT.
                </p>
            </div>
            <img src="images/datascience.jpg" alt="Afbeelding ICT" class="motivatie-img">
        </section>
    </div>
@endsection

