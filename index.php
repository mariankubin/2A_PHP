<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p>pato</p>
  <?php
  // Jednoriadkovy komentár
  // Vytvorenie premmenej a definovanie hodnoty
  $premenna = "text";
  $meno = "Prosím Vás";
  /*
  caute prosim vas
  viacriadkovy komentar
  Znak "." sa v PHP používa na spájanie stringov
  */
  echo "<p>Ahoj, moje meno je ".  $meno . "</p>";


  $vysledok = 4 + 6;
  echo $vysledok;


  if($vysledok == 10){
    echo "Výsledok je 10";
  }else{
    echo "Výsledok nie je 10";
  }

  echo "</br>";


  for($i = 0; $i < 6; $i++){
    if($i == 5){
      echo $i;
    }else{echo $i . " , ";
    }
    

    // 1. cyk.: $i = O
    // 2. cyk.: $i = 1
    // ... 
  }

  /*
  
  Vytvorte cyklus, v ktorom vypíšete všetky číslo od 0 po náhodne číslo do 1000 pričom ak náhodne číslo bude párne tak chceme vypísať všetky číslo od 0 po náhodne číslo 
  ak číslo bude nepárne, tak vypísať všetky nepárne čislo od 0 po náhodné čislo
  
  */
  echo "</br>";
  $nahodnecislo = random_int(0,1000);
    if($nahodnecislo % 2 == 0){
      for($i = 0; $i <= $nahodnecislo; $i += 2) {
        echo $i . " , ";
      }
    }else{
      for ($i = 1; $i <= $nahodnecislo; $i += 2) {
        echo $i . ", ";
      }
    }

    /*
    Nadstavba 
    Každé piate číslo bude mať náhodnú veľkosť (od 10 do 50) a fatbu
    */
  $nahodneCislo = rand(0,1000);
  $nahodnaVelkost = rand(10,50);
  $counter = 1;

  if($nahodneCislo % 2 == 0){
    for($i = 0; $i <= $nahodneCislo; $i+=2){
      $nahodnaVelkost = rand(10,50);
      if($counter % 5 == 0 ){
        echo "<span style='font-size: 40px;'>$i</span>, ";
      }else{
        echo $i .",";
      }
      $counter++;
    }
  }else{
    for($i = 1; $i <= $nahodneCislo: $i+=2){
      if($counter % 5 == 0){
        echo "<span style='font-size: {$nahodnaVelkost}px;'>$i</span>,";
      } else {
        echo $i .",";
      }
      $counter++;
    }
  }
  
  ?>

  <p style="color: rgb(40, 20, 200)">peter</p>

  <!--
  Komentár v HTML
  -->
</body>
</html>