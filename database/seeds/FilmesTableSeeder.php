<?php

use Illuminate\Database\Seeder;

class FilmesTableSeeder extends Seeder {
    public function run() {
        App\Models\Filme::insert([
            'titulo' => 'Bala Perdida',
            'resumo' => 'Um filme de ação policial em que um mecânico está sendo acusado de assassinato e agora precisa encontrar o carro que possui a única prova do crime, que pode provar a sua inocência'
        ]);
        App\Models\Filme::insert([
            'titulo' => 'A Missy Errada',
            'resumo' => 'Tim, após enviar diversas mensagens para a mulher dos seus sonhos, a convida para passar um período em uma ilha paradisíaca. Só que ele acaba enviando a mensagem para a mulher errada, que não teve uma experiência tão boa assim, e agora a viagem não acaba saindo exatamente como o planejado.'
        ]);
        App\Models\Filme::insert([
            'titulo' => 'Destacamento Blood',
            'resumo' => 'Este filme conta a história de quatro veteranos de Guerra afro-americanos que retornam ao Vietnã em busca de um tesouro enterrado e dos restos mortais do seu comandante. O filme também trás a tona a luta antirracista da população negra afro-americana.'
        ]);
        App\Models\Filme::insert([
            'titulo' => 'A Balada do Pistoleiro',
            'resumo' => 'A sequência do filme "El Mariachi" continua contando a história do músico solitário sem nome cujo violão está recheado de armamentos. O músico está em uma pacata cidadezinha mexicana em busca de vingança contra Bucho, o temido e implacável chefão do tráfico de drogas que atirou em El Mariachi e matou sua namorada.'
        ]);
    }
}
