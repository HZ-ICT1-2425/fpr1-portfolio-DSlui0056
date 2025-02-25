@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">

<div class="container-blog">
      <section id="blog-posts">
        <h2>Mijn Blog Posts</h2>

        <!-- Eerste blogpost -->
        <article class="blog-item">
          <img src="../images/datascience.jpg" alt="Data Science afbeelding">
          <div class="blog-content">
            <h3>Mijn Verkenning van Data Science: Drie Inspirerende Bedrijven</h3>
            <p>Als je geïnteresseerd bent in data science en de toepassingen ervan in de echte wereld, dan zul je
              genieten van mijn ontdekkingstocht langs drie bedrijven die deze technologie beheersen...</p>
            <a href="../blogs/datascience.blade.php" class="btn">Lees meer</a>
          </div>
        </article>

        <!-- Tweede blogpost -->
        <article class="blog-item">
          <img src="../images/swot.jpg" alt="HTML en CSS afbeelding">
          <div class="blog-content">
            <h3>SWOT analyse</h3>
            <p>Deze SWOT-analyse helpt me om mijn sterke en zwakke punten te identificeren, evenals de kansen en bedreigingen die ik in mijn carrière tegenkom...</p>
            <a href="../blogs/swotanalyse.html" class="btn">Lees meer</a>
          </div>
        </article>


        <!-- Derde blogpost -->
        <article class="blog-item">
          <img src="../images/studychoice.jpg" alt="HTML en CSS afbeelding">
          <div class="blog-content">
            <h3>Study choice</h3>
            <p>ICT staat voor mij centraal als de ideale mix van theorie en praktijk. Door mijn eerdere ervaring met softwareontwikkeling, werd ik geïnspireerd om mijn kennis uit te breiden, met een specifieke focus op data-analyse en AI....</p>
            <a href="../blogs/studychoice.html" class="btn">Lees meer</a>
          </div>
        </article>

        <!-- Vierde blogpost -->
        <article class="blog-item">
          <img src="../images/feedback.jpg" alt="HTML en CSS afbeelding">
          <div class="blog-content">
            <h3>Feedback</h3>
            <p>Tijdens het proces van het ontwikkelen van mijn portfolio heb ik waardevolle feedback ontvangen die heeft bijgedragen aan de verbetering van de website. Hier zijn de belangrijkste punten die ik heb aangepakt...</p>
            <a href="../blogs/feedback.html" class="btn">Lees meer</a>
          </div>
        </article>
      </section>


         <!-- Vijf blogpost -->
         <article class="blog-item">
          <img src="../images/code.jpg" alt="HTML en CSS afbeelding">
          <div class="blog-content">
            <h3>Programmeer ervaring</h3>
            <p>In de afgelopen jaren heb ik uitgebreide ervaring opgedaan in softwareontwikkeling. Mijn vaardigheden hebben zich vooral ontwikkeld in het bouwen van op maat gemaakte oplossingen met platforms zoals WordPress.
              Het ontwikkelen van WordPress-plugins en thema’s gaf me de mogelijkheid om aan zowel de front-end als back-end van webapplicaties te werken.
              Dit heeft mijn technische basis verstevigd en mijn begrip van dynamische webontwikkeling verdiept...</p>
            <a href="../blogs/programexperience.html" class="btn">Lees meer</a>
          </div>
        </article>
      </section>
    </div>
@endsection
