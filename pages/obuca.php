<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuca</title>

   <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">

    <!-- bootstrap js -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/odeca.css">
    <script src="../js/obuca.js"></script>

</head>
<body>
<?php 
    include "../classes/database.php";
?>

    <div id="stolica">
        <img src="../images/slika1.jpg" width="47%" alt="">
    </div>
    <div id="ruka">
        <img src="../images/slika3.jpg" width="48%" alt="">
    </div>

    <h1><span>O</span>buća</h1>
    <p id="citat">“If somebody steps on your shoes and ruins them, don't freak out.. get a new pair of shoes. 
        If you miss something, don't freak out.. there's nothing you can do to change it.. just move on.”</p>
    <div class="slike">
        <div class="row">
            <div class="col-3">
                <img src="../images/slika2.jpg" alt="">
            </div>
            <div class="col-1">
                <p>*gold*</p>
            </div>
            <div class="col-3">
                <img src="../images/slika31.jpg" alt="">
            </div>
            <div class="col-1"><p>Dijamanti na cizmicama, ogromno DA</p></div>
            <div class="col-3">
                <img src="../images/slika23.jpg" alt="">
            </div> 
            <div class="col-1"><p>Sijaj, sijaj</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/slika22.jpg" alt="">
            </div>
            <div class="col-1"><p>Udobne, tople, fensi izgled</p></div>
            <div class="col-3">
                <img src="../images/slika32.jpg" alt="">
            </div>
            <div class="col-1"><p>U njima ce se svako osetiti kao medo</p></div>
            <div class="col-3">
                <img src="../images/slika35.jpg" alt="">
            </div>
            <div class="col-1"><p>Udobnost na prvom mestu</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/slika18.jpg" alt="">
            </div>
            <div class="col-1"><p>Crni cirkoni su in ove sezone</p></div>
            <div class="col-3">
                <img src="../images/slika20.jpg" alt="">
            </div>
            <div class="col-1"><p>Ove spic cizmice su #musthave</p></div>
            <div class="col-3">
                <img src="../images/slika34.jpg" alt="">
            </div>
            <div class="col-1"><p>WOOOW</p></div>
        </div>
    </div>

    <div class="recenzije">
        <h3>Recenzije:</h3>
        <form class="forma" id="rec_forma" action="" method="post">
            <div class="ime">
            <input type="text" name="ime_obuca" id="ime_obuca" placeholder="Korisničko ime">
            </div>
            <br>
            <div class="komentar">
            <input type="text" name="komentar_obuca" id="komentar_obuca" placeholder="Komentar">
            </div>
            <br>
            <p>Ocena - Opšti utisak od 1 do 5:</p>
            <br>
            <select name="ocena_obuca" id="ocena_obuca">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
              <button onClick="history.go(0);" type="submit" class="btn btn-dark" name="posalji_obuca" id="posalji_obuca">Postavi recenziju</button>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content update--> 
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