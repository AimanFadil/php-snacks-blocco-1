<?php 

    if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['anni'])){
        $nome = $_GET['nome'];
        $mail = $_GET['mail'];
        $anni = $_GET['anni'] ;

        $risultato = ' Negato';
        
        if ( strlen($nome) > 2 && strpos($mail, ".") && strpos($mail, "@") && filter_var($anni, FILTER_VALIDATE_INT)) {
            $risultato = ' riuscito';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container ">
        <div class="row">
            <div class="col-12 text-center">
                <h1>ACCEDI INSERENDO I TUOI DATI</h1>
            </div>
            <div class="col-12">
                <div>
                    <form action="snack2.php" method="GET">
                        <div class="col-6">
                            <div class="form-group py-3 ">
                                <label for="control-label">INSERISCI IL TUO NOME</label>
                                <input type="text" class="form-control" id="NOME" name="nome" required
                                    placeholder="NOME">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group py-3">
                                <label for="control-label">INSERISCI LA TUA MAIL</label>
                                <input type="text" class="form-control" id="MAIL" name="mail" required
                                    placeholder="MAIL">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group py-3">
                                <label for="control-label">INSERISCI I TUOI ANNI</label>
                                <input type="text" class="form-control" id="ANNI" name="anni" required
                                    placeholder="ANNI">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary ">INVIA</button>
                        </div>
                    </form>
                    <div class="col-12">
                        <?php if(isset($_GET['nome'])){ ?>
                            <?php echo 'Accesso'.$risultato ?>
                        <?php } ?>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

