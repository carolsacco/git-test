<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//Exercicio medias
        
$P1=9;
$M1=8;       
$M2=10;
$Proj1=9;
$Proj2=8;
$Proj3=7;
$Proj4=8;
$TrabF=8;
$Proc=9;
$PF=9;
$MI=(30*$P1 + 10*$M1 + 10*$M2 + 5*$Proj1 + 5*$Proj2 + 5*$Proj3 +5*$Proj4 +10*$TrabF + 20*$Proc)/100;
$MF=0;
if ($MI>=7.5){
  $MF == $MI;
	echo "Aprovado sem prova final. Parabens!!! Boas ferias.";
}

else {

	$MF=($PF + $MI)/2;

if ($MF>=5.0){

	echo "Aprovado com Prova Final. Agora ja pode descansar tranquilo.";
 
}

else { 

	echo " Reprovado,não foi dessa vez. Ano que vem tem mais TWII";

	echo " <p> Media Intermediaria: $MI, Media Final: $MF </p>";
	
	}
}
        echo "<br>
            <br>"
        ?>
        
      
        
        
        
        
        
        
        
      <?php 
//Exercicio 1 tabelas
      
echo "<table width='0' border='1'> 
   <tr>
    <td><b>ID</td>   
    <td><b>NOME</td> 
    <td><b>DESC</td>
  </tr>";
                    
  for($i = 1; $i<7; $i = $i + 1){ 
    echo "
     <tr> 
       <td>id</td>   
       <td>nome</td> 
       <td>desc</td> 
    </tr> 
      "; 
    }
    
    echo"<br>
        <br>
        <br>"
        ?>
        
        
        
        <?php
        //exercicio2
        $numero=0;
        $x=7;
        for($i=1; $i<=$x; $i++){
           if($x%$i==0){
              $numero=$numero+1;
           }
        }
        
           if($numero<=2){
               echo "O numero eh primo.";
           } 
           else{
               echo "O numero nao eh primo.";
           }
        
           
        echo"<br>
            <br>
            <br>"
        ?>
        
        
        
        
        
        
        <?php
        //exercicio3
         $n1=0;
         $n2=1;
         for($n3=0; $n3<9; $n3++){
             $n2=$n2+$n1;
             $n1=$n2-$n1;
             echo $n1. " ";
         }
         
         echo"<br>
             <br>
             <br>"
        ?>
        
    </body>
</html>
