<?php
    $post = [
        '20/01/2024' => [
            [
                'title' => 'Post 0',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 0'
            ],
            [
                'title' => 'Post 1',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 2'
            ],
        ],
        '21/01/2024' => [
            [
                'title' => 'Post 3',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 3'
            ],
        ],
        '22/01/2024' => [
            [
                'title' => 'Post 4',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 4'
            ]
        ],
        '23/01/2024' => [
            [
                'title' => 'Post 5',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 6'
            ],
        ],
        '24/01/2024' => [
            [
                'title' => 'Post 7',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 7'
            ],
            [
                'title' => 'Post 8',
                'author' => 'Aiman Fadil',
                'text' => 'Testo post 8'
            ],
        ],
    ];
?>
<?php foreach($post as $giorno => $postSingolo) { ?>
         <h1><?php echo $giorno ?></h1>
         <?php foreach($postSingolo as $elemPost) { ?>
               <?php foreach ($elemPost as $chiave => $valore) { ?>
                     <h3><?php echo $chiave.':' ?><span>"<?php echo $valore ?>"</span></h3>
                <?php } ?>
        <?php } ?>
<?php } ?>
