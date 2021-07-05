<?php

use Illuminate\Database\Seeder;

use App\Post;

//Specifichiamo l'uso della funzione Str per creare lo slug
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //Chiamo la funzione run con i parametri di Faker e la faccio giriare
     //Quante volte ho bisogno con un for popolando tutte le colonne che voglio/devo
     public function run()
    {
        $posts = [
            [
                'title' => 'Spaghetti alla Carbonara',
                'content' => "Il Vicolo della Scrofa, per chi conosce Roma, è una delle stradine più caratteristiche e ricche di simboli. Proprio in una trattoria di questa strada, da cui il nome del vicolo, pare sia stata realizzata la prima Carbonara, nel 1944. La storia più attendibile infatti racconta l'incontro tra gli ingredienti a disposizione dei soldati americani e la fantasia di un cuoco romano. Il risultato fu il prototipo degli spaghetti alla carbonara: uova, bacon (poi guanciale) e formaggio. Man a mano la ricetta è evoluta fino a quella che tutti conosciamo oggi e possiamo apprezzare a casa di amici romani veraci (e voraci!), nelle trattorie come nei ristoranti stellati della Capitale, in tutta Italia e all'estero, nelle innumerevoli versioni: con o senza pepe, con un tuorlo per persona o l'aggiunta di almeno un uovo intero, con guanciale o pancetta tesa.",
                'cooking_time' => '15 Minuti',
                'people' => 4,
                'suggested' => 'yes',
                'category_id' => 3,
                'img_path' => 'posts-cover/spaghetti-carbonara.jpg'
            ],
            [
                'title' => 'Parmigiana di melanzane',
                'content' => "Basta nominarla perché a tavola ci sia un'ovazione. E' la regina dei piatti unici, la consolatrice di umori avviliti: la Parmigiana di melanzane. Una ricetta condivisa e contesa come origini da nord a sud: Emilia Romagna, Campania (Parmigiana 'e mulignane) e Sicilia (Parmiciana o Patrociane) con alcune varianti di ingredienti e modalità di composizione, ma tutte assolutamente favolose! Vi siete mai chiesti perché si chiami così? Il nome 'Parmigiana' deriverebbe proprio dal siciliano 'Parmiciana', che in dialetto indica la pila di listelle di legno delle persiane: pensate infatti a come vengono disposte le fette di melanzane in teglia e noterete le similitudini. Pochi ingredienti, tanto sapore per un piatto simbolo della cucina mediterranea: pomodoro, melanzane, basilico e formaggio... un mix che si abbina perfettamente anche agli gnocchi o alla pasta come nella ricetta dei lumaconi alla parmigiana. Ma ora preparate insieme a noi una succulenta parmigiana di melanzane!",
                'cooking_time' => '40 minuti',
                'people' => 8,
                'suggested' => 'yes',
                'category_id' => 4,
                'img_path' => 'posts-cover/parmigiana-di-melanzane.jpg'
            ],
            [
                'title' => 'New York Cheesecake',
                'content' => "Quando si parla di ricette di cheesecake c’è l’imbarazzo della scelta: cotta o fredda, mini o maxi, con mascarpone o ricotta oppure senza panna per una versione più leggera… ma l’unica vera regina incontrastata è lei, la New York cheesecake! La classica base di biscotti e burro accoglie una crema morbida e avvolgente realizzata con formaggio e panna. La gelatina non è necessaria perché sarà l’amido di mais ad addensarla durante la cottura in forno. Caratterizzato da un bordo alto e spesso, questo dolce iconico è guarnito con un topping di panna acida e frutti di bosco come vuole la tradizione. Voi però potete scegliere la copertura che preferite: che sia una salsa al cioccolato o al caramello oppure un semplice strato di confettura, con la New York cheesecake si va sempre sul sicuro!",
                'cooking_time' => '30 minuti',
                'people' => 8,
                'suggested' => 'yes',
                'category_id' => 6,
                'img_path' => 'posts-cover/newyork-cheesecake.jpg'
            ],
            [
                'title' => 'Polpette di zucchine',
                'content' => "Per tanti bambini le polpette sono l’unico modo per mangiare le verdure e la moda dello street food ne ha rinverdito il successo. Sono un evergreen della cucina di recupero e infatti ne esistono infinite versioni, prime fra tutte quelle della nonna! Oggi prepariamo insieme una delle varianti più povere e buone: le polpette di zucchine. Vi sveleremo tutti i segreti di preparazione e cottura per un risultato dorato e croccante, così gustoso che la cena si trasformerà in una gara all’ultima polpetta! E voi, lascerete vincere i più piccoli o la bontà irresistibile delle polpette di zucchine vi farà dimenticare le buone maniere?! Se preferite una cottura più light, non perdetevi le polpette di zucchine alla pizzaiola o le polpette di zucchine al forno, anche nella versione con la ricotta o arricchite con lo speck.",
                'cooking_time' => '30 minuti',
                'people' => 4,
                'suggested' => 'yes',
                'category_id' => 5,
                'img_path' => 'posts-cover/polpette-di-zucchine.jpg'
            ],
            [
                'title' => 'Risotto allo Zafferano',
                'content' => "Lo zafferano è una spezia antica, conosciuta già al tempo degli egizi. In principio si usava solo per tingere le stoffe e realizzare profumi e unguenti ma una volta scoperte le sue stupefacenti proprietà culinarie, divenne un ingrediente pregiato con il quale realizzare gustosi piatti dalle sfumature dorate come il risotto allo zafferano o la pasta. Questo primo piatto, nella sua essenzialità, esalta al meglio le qualità aromatiche dello zafferano ma non solo, grazie al forte potere colorante, i chicchi di riso si impreziosiscono di un gradevole e accattivante color oro che rende così speciale questa pietanza. Una piccola magia che unita al tocco cremoso della mantecatura, immancabile nella preparazione dei risotti, vi restituirà un risotto dal gusto unico e inconfondibile. E per rendere ancora più accattivante questa degustazione, vi verrà in aiuto la mitologia greca che narra il leggendario e contrastato amore tra il giovane Crocus e la seducente ninfa Smilace, contesa dal Dio Ermes, il quale, accecato dalla gelosia, trasformò Crocos in un delicato fiore di zafferano.",
                'cooking_time' => '30 Minuti',
                'people' => 4,
                'suggested' => '',
                'category_id' => 3,
                'img_path' => 'posts-cover/risotto-zafferano.jpg'
            ],
            [
                'title' => 'Polpette al sugo',
                'content' => 'Tutti noi abbiamo una ricetta del cuore, quella che ci rimanda ad un momento particolare... che sia dolce o salata. Ma esiste una ricetta che è amatissima dai più, specialmente dai bambini: si tratta delle polpette al sugo, l’amarcord per eccellenza! Ne esistono tante versioni, come quella con i funghi, i fagioli, gli spinaci, le patate o il pesce, e ognuno ha la sua preferita, perché questi sfiziosissimi bocconcini sono davvero irresistibili! Per questa ricetta con il sugo, non dimenticate di servire in tavola del buon pane casereccio per "la scarpetta" finale, una consuetudine imprescindibile per questo piatto! Se preferite una versione senza pomodoro, provate le nostre polpette in bianco!',
                'cooking_time' => '30 Minuti',
                'people' => 5,
                'suggested' => '',
                'category_id' => 4,
                'img_path' => 'posts-cover/polpette-sugo.jpg'
            ],
            [
                'title' => 'Gnocchi alla sorrentina',
                'content' => "Uno dei piatti campani più conosciuti in Italia e all’estero... sono gli gnocchi alla sorrentina, preparati davvero in tutti i ristoranti del mondo! Ciò che rende questo piatto di gnocchi così amato è la sua semplicità: sapori mediterranei e la genuinità misti alla facile preparazione. Fare a mano gli gnocchi vi riporterà alla mente le domeniche passate a casa della nonna a carpire tutti i segreti celati dietro alla consistenza perfetta di quelle piccole gemme di patate e farina. Gli gnocchi alla sorrentina poi sono avvolti da un cremoso sugo di pomodoro e basilico, insaporiti da mozzarella e formaggio grattugiato... proprio gli ingredienti che renderanno ancora più goduriosi gli gnocchi creando un effetto filante dopo il brevissimo passaggio in forno. E per variare provate anche a realizzare gli gnocchi di zucchine, in alternativa al classico impasto con le patate. Vi abbiamo fatto venire l'acquolina in bocca? Preparate insieme a noi gli gnocchi alla sorrentina!",
                'cooking_time' => '35 Minuti',
                'people' => 4,
                'suggested' => '',
                'category_id' => 4,
                'img_path' => 'posts-cover/gnocchi-sorrentina.jpg'
            ],
            [
                'title' => 'Dorayaki',
                'content' => "Avete mai sentito parlare di Doraemon? Lo ricorderanno non solo i 'figli degli anni Ottanta' ma anche i bambini di oggi; questo simpatico gatto di colore blu, che ne combina di tutti i colori, va matto per i dorayaki una delle merende più famose del Giappone! Queste golose frittelline, realizzabili anche in versione mini, ricordano molto i pancakes americani, ma vengono preparati senza l'aggiunta di grassi e farciti a mò di panino. In Giappone si usa servirli ripieni di una salsa dolce a base di fagioli azuki. Noi abbiamo optato per una farcitura più 'occidentale'... così in redazione abbiamo scelto crema di nocciole, mentre operatori e fotografi hanno preferito la confettura di frutti di bosco! Realizzate anche voi con le vostre creme e confetture preferite questi soffici dolci, per una colazione nutriente o per una merenda golosa e farete la gioia dei vostri bambini, che si sentiranno protagonisti del loro cartone preferito!",
                'cooking_time' => '15 minuti',
                'people' => 3,
                'suggested' => '',
                'category_id' => 6,
                'img_path' => 'posts-cover/dorayaki.jpg'
            ],
            [
                'title' => 'Calamarata',
                'content' => "Riconoscete questo particolare formato di pasta? Si tratta della calamarata, molto utilizzato nella cucina campana! Sì presta benissimo per condimenti veloci e saporiti come il ragù di pesce spada. Vi state domandando se hanno qualcosa in comune con i paccheri? Non siete del tutto fuori strada: la calamarata, nel napoletano, è conosciuta con il nome di mezzi paccheri. Oltre ad essere un formato di pasta è anche un condimento il cui protagonista, nemmeno a dirlo, è il calamaro. Tagliato ad anelli spessi un paio di centimetri risulta praticamente simile al formato di pasta. Grazie al nostro modo molto originale per servire la calamarata potrebbe facilmente rappresentare un piatto delle grandi occasioni, delle feste o per sorprendere gli ospiti. Infatti il cartoccio serve a preservare i profumi che fuoriusciranno dall'involucro inebriando gli ospiti. Preparate insieme a noi la buonissima calamarata: e buon appetito!",
                'cooking_time' => '40 Minuti',
                'people' => 4,
                'suggested' => '',
                'category_id' => 3,
                'img_path' => 'posts-cover/calamarata.jpg'
            ],
            [
                'title' => 'Insalata di gamberi',
                'content' => "Avete mai pensato di preparare una sfiziosa insalata di gamberi? Probabilmente sì ma non avevate in mente come condirla per renderla davvero speciale! Non preoccupatevi, grazie ai nostri consigli scoprirete quanto è semplice realizzarne una davvero strepitosa! Intanto cominciamo dalla scelta degli ingredienti di accompagnamento, la frutta tropicale come mango e avocado, che ritroviamo spesso in sfiziose insalatone o ricette esotiche come il ceviche di gamberi. Stavolta però abbiamo deciso di combinarli insieme e il risultato ci ha convinti all'istante! Non vi resta che scoprire insieme a noi la ricetta dell'insalata di gamberi e stuzzicare così l'appetito dei vostri ospiti!",
                'cooking_time' => '25 Minuti',
                'people' => 4,
                'suggested' => '',
                'category_id' => 2,
                'img_path' => 'posts-cover/insalata-gamberi.jpg'
            ],
            [
                'title' => 'Hummus',
                'content' => "Oggi faremo un salto nel Medio Oriente per presentarvi una delle ricette vegetariane veloci più conosciute: l’hummus. Molti paesi ne rivendicano la paternità, ma ancora ad oggi non se ne conosce esattamente l’origine. E' una delle preparazioni più antiche e diffusa nel tempo in tutti i paesi arabi, grazie alla semplicità dei suoi ingredienti. Una deliziosa crema, dal sapore molto particolare: delicato e aromatico, per la presenza dei ceci e della tahina, ma anche  leggermente asprigno per l’aggiunta del succo di limone che conferisce il giusto equilibrio a questa ricetta. In questa versione abbiamo voluto rispolverare la tradizione antica, realizzando la tahina fatta in casa. Per l'occasione ci siamo armati di 'suribachi' e 'surikogi' con cui un tempo si realizzava la farina e che noi abbiamo usato per miscelare e pestare tutti gli ingredienti, per un fantastico e ancora più genuino hummus! Lasciatevi conquistare da questa pietanza molto  versatile, utilizzata per accompagnare le felafel, o come crema da spalmare. Un pizzico di paprika affumicata e il vostro hummus andrà letteralmente a ruba durante vostri aperitivi!",
                'cooking_time' => '10 Minuti',
                'people' => 6,
                'suggested' => '',
                'category_id' => 1,
                'img_path' => 'posts-cover/hummus.jpg'
            ],
            [
                'title' => 'Zuppa di mais',
                'content' => "La zuppa di mais è un primo piatto della cucina messicana dalla preparazione facile e veloce. Un comfort food adatto ai pasti quoditiani. Questa ricetta l'abbiamo realizzata insieme ad Antonieta Ruiz, signora messicana che vive da molti anni a Milano e che ci ha dato la sua versione, quella che prepara in famiglia.
                In questa ricetta abbiamo utilizzato un mix di mais giallo dolce precotto, quello che si trova comunemente al supermercato e dei chicchi di mais bianco sgranati da una pannocchia fresca. Visto che reperirla non è così scontato - si può trovare nei negozi etnici o in mercati che hanno anche frutta e verdura internazionale - la zuppa si può preparare anche con il solo mais giallo, in quantità di 600 grammi.
                La consistenza della zuppa può essere più o meno cremosa, a seconda dei gusti. Il piatto di base è vegetariano, ma può essere arricchito anche con della pancetta a cubetti e servito con tortillas o nachos. In questo caso abbiamo optato per delle tortillas di mais, tagliate a striscioline e fritte in padella, così da diventare irresistibilmente croccanti.",
                'cooking_time' => '35 Minuti',
                'people' => 4,
                'suggested' => '',
                'category_id' => 3,
                'img_path' => 'posts-cover/zuppa-mais.jpg'
            ]
        ];

        foreach ($posts as $post){
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->content = $post['content'];
            $newPost->cooking_time = $post['cooking_time'];
            $newPost->people = $post['people'];
            $newPost->suggested = $post['suggested'];
            $newPost->category_id = $post['category_id'];
            $newPost->img_path = $post['img_path'];
            //Questa funzione formatterà in automatico il title renendolo uno slug
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
