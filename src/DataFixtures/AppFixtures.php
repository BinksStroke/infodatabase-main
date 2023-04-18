<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
            for ($i = 0; $i < 5; $i++) {
                $article = new Articles();
                $article->setTitle('Titre de l\'article');
                $article->setExcerpt('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi diam...');
                $article->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi diam, elementum eu tincidunt a, condimentum sit amet risus. Proin volutpat, leo quis euismod gravida, dolor dolor mollis augue, eu efficitur leo sem eu dolor. Nam volutpat, risus eu bibendum tincidunt, leo sapien congue turpis, ac tincidunt turpis metus sit amet est. In auctor vulputate suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis feugiat quam eget urna varius lobortis. Integer neque risus, viverra vitae libero in, dignissim varius nisl. Nunc ullamcorper aliquam efficitur. Integer porta elit condimentum nibh facilisis vestibulum. Fusce laoreet vitae nulla vitae pretium. Sed placerat nibh id erat ultrices feugiat at molestie sem. Praesent mollis metus non nisl luctus, eu rhoncus neque scelerisque. Duis feugiat ante sit amet mi lobortis mattis. Proin vel ornare sem. Phasellus ac dolor et risus eleifend sagittis. Etiam vehicula, nibh nec elementum aliquam, odio est cursus elit, nec tincidunt risus elit a enim. In congue lacus augue, vel vulputate leo ornare non. Vestibulum erat mauris, sagittis non tortor sed, mollis aliquet nibh. Nam facilisis turpis odio, eu molestie tellus lacinia non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus vitae efficitur sem. In lacus lectus, imperdiet ac imperdiet vel, rutrum vitae erat.');
                $manager->persist($article);
            }
        $manager->flush();
        
    }
}
