@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('../css/profile.css') }}" rel="stylesheet">


<div class="container">
        <section id="profile-experience" class="content-with-image">
          <div class="text-section">
            <h2>Who am I</h2>
            <p>I'm Damian, a developer experienced in building dynamic and interactive web applications. I have been living on a farm for several years, where I enjoy the rural life and nature around me.</p>
            <p>In addition to my work as a developer, I have two dogs that I enjoy spending time with.</p>
            <p>In my spare time I enjoy being with my dogs, I currently work in a supermarket as a vegetable/fresh food assistant, where I make sure the customers can find the best products. This work has taught me to pay attention to detail and be customer-oriented.</p>
            <h2>Programming Experience.</h2>
            <ul>
              <li>Develop WordPress plugins and themes.</li>
              <li>Experience with programming languages such as HTML, CSS, PHP, JavaScript and Python.</li>
              <li>Building dynamic and interactive web applications.</li>
              <li>Working with databases for data storage.</li>
              <li>Using platforms such as WordPress, GitHub and various IDEs.</li>
            </ul>
            <p>I have taken several classes to improve my programming skills and am constantly working on new projects.</p>
            <p><a href="https://github.com/DSlui0056" target="_blank" class="btn">Check out my GitHub</a></p>
          </div>
          <img src="../images/foto1.jpg" alt="Afbeelding van Honden" class="profile-image">
          <img src="../images/achtergrond2.jpg" alt="Afbeelding van Honden" class="profile-image">
          <img src="../images/profiel.jpg" alt="Afbeelding van Honden" class="profile-image">
        </section>
      </div>
@endsection
