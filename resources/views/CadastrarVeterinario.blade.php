<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Veterinário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('veterinario/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Veterinário</legend>
            </header>
            <div class="control-group">
                <!-- CTPS do Veterinário -->
                <label class="control-label">CTPS</label>
                <div class="controls">
                    <input type="text" id="idCTPS" name="ctps" class="input-xlarge" size="10" maxlength="10" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Nome do Veterinário -->
                <label class="control-label">Nome do Veterinário</label>
                <div class="controls">
                    <input type="text" id="idNomeVet" name="nomeVet" class="input-xlarge" size="30" maxlength="30" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Confirmar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>