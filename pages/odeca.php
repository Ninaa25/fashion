<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/odeca.css">
</head>

<body>
<?php include '../classes/database.php'; ?>

<div id="stolica">
        <img src="../images/slika1.jpg" width="47%" alt="">
    </div>
    <div id="ruka">
        <img src="../images/slika3.jpg" width="48%" alt="">
    </div>

    <h1><span>O</span>deća</h1>
    <p id="citat">"Fashion is part of the daily air and it changes all the time, with all the events. 
    You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes."</p>
    <div class="slike">
        <div class="row">
         <div class="col-3">
            <img src="../images/slika14.jpg" alt="">
        </div>
        <div class="col-1">
            <p>Ripped mom jeans 1</p>
        </div>
        <div class="col-3">
            <img src="../images/slika15.jpg" alt="">
        </div>
        <div class="col-1"><p>Ripped mom jeans 2</p></div>
        <div class="col-3">
            <img src="../images/slika16.jpg" alt="">
        </div> 
        <div class="col-1"><p>Ripped mom jeans 3</p></div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="../images/slika17.jpg" alt="">
        </div>
        <div class="col-1"><p>Corduroy white overshirt</p></div>
        <div class="col-3">
            <img src="../images/slika4.jpg" alt="">
        </div>
        <div class="col-1"><p>Overshirt with pockets</p></div>
        <div class="col-3">
            <img src="../images/slika13.jpg" alt="">
        </div>
        <div class="col-1"><p>Oversized check overshirt</p></div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="../images/slika36.jpg" alt="">
        </div>
        <div class="col-1"><p>Ribbed cropped sweater</p></div>
        <div class="col-3">
            <img src="../images/slika37.jpg" alt="">
        </div>
        <div class="col-1"><p>T-shirt with back bow</p></div>
        <div class="col-3">
            <img src="../images/slika38.jpg" alt="">
        </div>
        <div class="col-1"><p>Hammer Halloween T-shirt</p></div>
    </div>
</div>
<div class="recenzije">
    <h3>Recenzije:</h3>
    <form class="forma" id="rec_forma" action="" method="post">
        <div class="ime">
        <input type="text" name="ime_odeca" id="ime_odeca" placeholder="Korisničko ime">
        </div>
        <br>
        <div class="komentar">
        <input type="text" name="komentar_odeca" id="komentar_odeca" placeholder="Komentar">
        </div>
        <br>
        <p>Ocena - Opšti utisak od 1 do 5:</p>
        <br>
        <select name="ocena_odeca" id="ocena_odeca">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <br>
          <button type="submit" class="btn btn-dark" name="posalji_odeca" id="posalji_odeca" href="#">Postavi recenziju</button>
    </form>
<hr>
<button type="button" class="btn btn-dark" name="prikazi_sve" id="prikazi_sve">Prikaži sve recenzije</button>
<button type="button" class="btn btn-dark" name="prikazi_moje" id="prikazi_moje">Prikaži moje recenzije</button>
</div>   
<div class="tabela" id="sakrivena_tabela">
<table class="table table-striped table-dark" id="tabela">
    <tbody>

    </tbody>
</table>
</div>


<div class="cont"> 
<div class="formpost">
    <div class="searchpanel" id="searchpanel" style="display: none;">
        <input type="text" class="searchbox" name="name" id="name">
        <br>
        <input type="submit" class="btn btn-dark" name="searchdata" id="searchdata" value="Pronadji">
    </div>
        <table class="table table-striped table-dark" class="tabel" id="verformid">
        </table>
</div>
</div>

<!-- <-- Modal content -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
  </div>
  <div class="modal-body">
    <label for="">Korisnicko ime:</label>
    <input type="text" id="korisnicko_ime_update" class="form-control">
    <label for="">Komentar:</label>
    <input type="text" id="komentar_update" class="form-control">
    <label for="">Ocena:</label>
    <select name="ocena_update" id="ocena_update" class="form-control" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
  </div>
  <div class="modal-footer">
      <a href="#" id="save" name="save" class="btn btn-primary pull-right">Update</a>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>

</body>
</html>