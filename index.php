<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="test">
      <form action="http://localhost:8080/Homework2/return.php">
        <div class="question">
          <h1>Тест по История</h1>
          <img src="1b90bf252eff9b42855aeba2cbac778c.jpeg"><br/>

        </div>


        <div class="question">
          <label for="q1">1.Коя година е създадена България?</label>
          <select id="q1" name="question1">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="681">681 г.</option>
            <option value="1991">1991 г.</option>
            <option value="121">121 г.</option>
            <option value="332">332 г.</option>
          </select>
        </div><br/>

        <div class="question"> 
          <label for="q2">2.Кой написва "Историяславянобългарска"?</label>
          <select id="q2" name="question2">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Ivan">Иван Вазов</option>
            <option value="Hristo">Христо Ботев</option>
            <option value="Hristo S">Христо Смирненски</option>
            <option value="Paisii">Паисий Хилендарски</option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q3">3.Кога е покръстването на българите?</label>
          <select id="q3" name="question3">
            <option value="" selected>Моля изберете отговор!</option>
            <option value="998">998 година</option>
            <option value="1555">1555 година</option>
            <option value="863 ">863 година</option>
            <option value="887">887 година</option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q4">4.Кой покръства българите?</label>
          <select id="q4" name="question4">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Tervel">Тервел</option>
            <option value="Boris">Борис | </option>
            <option value="Asen">Цар Иван Асен</option>
            <option value="Omurtag">Омуртаг</option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q5">5.Кои са цветовете на знамето на България?</label>
          <select id="q5" name="question5">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="cherno"> черно,жълто,бяло </option>
            <option value="sinio"> бяло,синьо,червено</option>
            <option value="zeleno"> зелено,бяло,розово</option>
            <option value="bqlo">бяло,зелено,червено </option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q6">6.Кой е написал химна на България?</label>
          <select id="q6" name="question6">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Cvetan">Цветан Радославов </option>
            <option value="Yordan"> Йордан Радичков </option>
            <option value="Ivan"> Иван Вазов </option>
            <option value="Hristo"> Христо Ботев </option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q7">7.Кой написва глаголицата?</label>
          <select id="q7" name="question7">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Asparuh">хан Аспарух </option>
            <option value="Omurtag"> Омуртаг </option>
            <option value="Konstantin">филолог Константин-Кирил </option>
            <option value="Zevs">Зевс </option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q8">8.Кой преписва историяславянобългарска?</label>
          <select id="q8" name="question8">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Paisii"> Паисий Хилендарски </option>
            <option value="Sofronii"> Софроний Врачански </option>
            <option value="Volodq"> Володя Стоянов</option>
            <option value="Hristo S"> Христо Смирненски</option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q9">9.Кой прави чаша от черепа на Никифор?</label>
          <select id="q9" name="question9">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Aleksandur"> Александър Батенберг  </option>
            <option value="Boris"> Борис </option>
            <option value="Omurtag"> Омуртаг</option>
            <option value="Krum"> Крум </option>
          </select>
        </div><br/>

        <div class="question">
          <label for="q10">10.Кой сече ппървите златни монети?</label>
          <select id="q10" name="question10">
            <option value="type" selected>Моля изберете отговор!</option>
            <option value="Asparuh">Аспарух </option>
            <option value="Asen">Цар Иван Асен 2 </option>
            <option value="Kaloqn">Калоян </option>
            <option value="Omurtag">Омуртаг </option>
          </select>
        </div><br/>

        <div class="submit">
          <input type="submit" value="Изпрати!">
      </div>

      <?php
      if(isset($_SESSION['counter'])){
          if($_SESSION['counter'] == 0){
              echo "<h1 class=\"e\">Нямате верни отговора !</h1>";
          }else{
              echo "<h1 class=\"r\">" . $_SESSION['counter'] . "/10 </h1>";
          }
      }
      
      unset($_SESSION['counter']);
  ?>

      </form>
    </div>
  </body>
</html>
