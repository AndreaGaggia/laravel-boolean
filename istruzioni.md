Istruzioni:
Proseguendo con l'idea di blog create un applicazione laravel con 3 routes: home, about, blog
questa volta usate un controller per "smistare il traffico" tra la route e la view.
Create le view per le tre route.
Usate php artisan make:controller NomeDelController per creare il controller.
Quando le route funzionano e le tre pagine sono visibili passate alla creazione del database per la vostra applicazione usando phpmyadmin.
create un database laravel_blog
create una tabella posts che abbia come colonne un id, title, body.
inserite via phpmyadmin qualche post nella tabella posts.
Ora collegate il database all'applicazione laravel modificando il file .env che si tova nella vosta cartella pincipale. (leggete la slide 107)
Create un modello Post usando il comando php atisan make:model Post (slide 105)
Se tutto é impostato correttamente potete usate il metodo all() di eloquent nel controller per passare i posts alla view blog (slide 109).
