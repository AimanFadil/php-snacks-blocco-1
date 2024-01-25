<?php
    $squadre = [
        [
            'squadraCasa' => 'Brooklin Nets',
            'squadraOspite' => 'New York Knicks',
            'puntiCasa' => 100,
            'puntiOspite' => 98,

        ],
        [
            'squadraCasa' => 'Los Angeles Lakers',
            'squadraOspite' => 'Los Angeles Clippers',
            'puntiCasa' => 83,
            'puntiOspite' => 91,

        ],
        [
            'squadraCasa' => 'Golden State',
            'squadraOspite' => 'Memphis Griezles',
            'puntiCasa' => 115,
            'puntiOspite' => 75,

        ],
        [
            'squadraCasa' => 'Pheonix Suns',
            'squadraOspite' => 'Boston',
            'puntiCasa' => 91,
            'puntiOspite' => 70,

        ],
        [
            'squadraCasa' => 'Indiana Pacers',
            'squadraOspite' => 'Orlando Magic',
            'puntiCasa' => 121,
            'puntiOspite' => 88,

        ]
    ]
    
?>
<?php
    foreach($squadre as $squadra){
        echo $squadra['squadraCasa']." - ".$squadra['squadraOspite']." | ".$squadra['puntiCasa']." - ".$squadra['puntiOspite']."<br>";
    }
?>



