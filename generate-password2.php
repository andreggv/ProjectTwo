<!DOCTYPE html>
<html lang="en">

    <head>
        
        <! Metas>
        
        <meta charset="utf-8"/>
        <meta name="robots" content ="nofollow"/>
        <meta http-equiv="pragma" content="no-cache" />
        
        <! Visual>
        
        <link rel="stylesheet" type="text/css" href="style-standard.css">
        <title>LeSphnix: atumatic generate easy to remember and hard to break passwords</title>
        
    </head>
    <body>
       
        <div id="logo-brand">
        
        
        
        </div>
        
        
        <form action="generate-password.php" method="post">
        
            <p>Number of words: 
                
              <select name="num-words" id="num-words">
                <option value="1" selected='selected'>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" >4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select> <br/>
                
            </p>
            
           <p>
               <span> What is your favourite symbol separator? 
               <input type="text" maxlength="1" name="symbol-separator"/></br> 
               </span>  
              
               <p class = "example">(ex.: $ | * | - | %)</p>
                      
            </p>
            
            <div id="capitals">
                
            <p class="titles">What about capitals...? </br></br>  
    
            <input type="radio" name="capitals" value="beginning-of-words"/></html>     
            Capitalize only first letter of each words
            </br>
            <input type="radio" name="capitals" value="first-letter"/>
            Capitalize only the password's first letter 
            </br>  

            <input type="radio" name="capitals" value="last-letter"/>
            Capitalize only the password's last letter
            </br>
            <input type="radio" name="capitals" value="all-letters"/>
            Capitalize all letters
             

    
            </p>
            
                
    
            </div>
            
            <div class="buttons">
                
                <input type="submit" name="submit" value="Make me a password!" />

            </div>
        
        </form>
        
        
        
    </body>
    
</html>