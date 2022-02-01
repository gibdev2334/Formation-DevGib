<form method="POST" action="">
<!--il faut mettre control / pour écrire un commentaire sur une ligne avec phpstorm et /* sur plusieurs lignes-->
<!-- il ne faut rien mettre dans action car ca ne marche pas alors il faut le laisser vide " "-->

    <label for="min">Minimum</label>
    <input type="number" id="min" name="min">
   

                                                   
     <label for="max">Maximum</label>             
     <input type="number" id="max" name="max">  
    

                                                    
      <label for="nombreValeurs">Nb valeurs</label>             
      <input  min="1" type="number" id="nombreValeurs" 
        name="nombreValeurs"  value="1" >  
    

    <input type="submit">
</form>

