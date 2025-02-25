<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Blog post data.
     *
     * @var array
     */
    private array $blogs = [
        [
            'title' => 'Mijn Verkenning van Data Science: Drie Inspirerende Bedrijven',
            'body' => 'Sobolt Rotterdam
                   Als je geïnteresseerd bent in data science en kunstmatige intelligentie, dan is Sobolt echt een bedrijf om in de gaten te houden. Ze zijn helemaal in de haak als het gaat om dataconsultancy en het ontwikkelen van maatwerk oplossingen die bedrijven helpen om hun datatransformatie te versnellen. Ze werken met technologieën zoals Python, R, en cloud platforms zoals AWS en Azure, wat betekent dat je hier volop kunt duiken in de wereld van data science en machine learning. De cultuur bij Sobolt is erg innovatief en dynamisch, wat het een super interessante plek maakt voor iedereen die gepassioneerd is over technologie. Meer weten? Check hun <a href="https://www.sobolt.com" target="_blank">website</a> en hun <a href="https://www.linkedin.com/company/sobolt" target="_blank">LinkedIn-pagina</a>.

                  Quantib Rotterdam
                   Quantib richt zich op AI voor medische beeldvorming, en dat is echt indrukwekkend. Ze ontwikkelen geavanceerde technologieën die artsen helpen om medische beelden te analyseren en diagnoses te stellen. Ze maken gebruik van tools zoals TensorFlow en Keras, en zijn internationaal actief. De onderzoeksgerichte en professionele cultuur bij Quantib maakt het een ideale plek voor mensen die van innovatie houden. Als je meer wilt weten over wat ze doen, neem dan een kijkje op hun <a href="https://www.quantib.com" target="_blank">website</a> en hun <a href="https://www.linkedin.com/company/quantib" target="_blank">LinkedIn-pagina</a>.

                   Ziekenhuis Terneuzen
                   Bij Ziekenhuis Terneuzen draait alles om het verbeteren van de zorg met behulp van IT en data-analyse. Hun IT-afdeling werkt met EPD-systemen en zorginformatiesystemen, en biedt allerlei mogelijkheden voor IT-specialisten en data analisten. De bedrijfscultuur is formeel en professioneel, met een sterke focus op kwaliteitsverbetering en patiëntenzorg. Het lijkt me een geweldige plek om mijn data science skills in te zetten voor een maatschappelijke impact. Voor meer info kun je hun <a href="https://www.ziekenhuisterneuzen.nl" target="_blank">website</a> bekijken.',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->blogs as $blog) {
            Blog::create($blog);
        }
    }
}
