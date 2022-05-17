<?php
include "config.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <title>Anymigo Creative Brief</title>

    <script type="text/javascript">
        function noenter() {
          return !(window.event && window.event.keyCode == 13);
        }
    </script>

</head>
<body>
    <div class="lang-container">
        <form class="lang-form" action="" method='get'>
            <input type="hidden" name='client' value="<?php print $_SESSION['client'];?>">
            <input type="hidden" name='lang' value='nl'>
            <input class="lang-button <?php echo $lang['nl-active'];?>" type="submit" value='NL'>
        </form>
        |
        <form class="lang-form" action="" method='get'>
            <input type="hidden" name='client' value="<?php print $_SESSION['client'];?>">
            <input type="hidden" name='lang' value='en'>
            <input class="lang-button <?php echo $lang['en-active'];?>" type="submit" value='EN'>
        </form>
    </div>
    <form data-sheet-best="https://sheet.best/api/sheets/1e258265-04b4-4b07-851a-8c0175e8b74e">
        <div id="title">
            <h1><?php 
                echo $lang['groet'] . " ";
                if (isset($_GET['client'])) {
                    echo $_GET['client'];
                } else {
                    echo "NO CLIENT REGISTERED";
                };
                ?>
            </h1>
            <input type="hidden" name="klant" value="<?php 
                if (isset($_GET['client'])) {
                    echo $_GET['client'];
                } else {
                    echo "NO CLIENT REGISTERED";
                };
                ?>">
        </div>
        
        <h1 class='question'>1. <?php echo $lang['type']; ?></h1>
        <p class='question-description'><?php echo $lang['type-beschrijving']; ?></p>
        <div class='col-container'>
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['animatie']; ?>
                    <input type="radio" id="animatie" name="type" value="Animatie">
                    <span class='custom-checkbox'></span>
                </div>
            </div>
            
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['afbeelding']; ?>
                    <input type="radio" id="afbeelding" name="type" value="Afbeelding">
                    <span class='custom-checkbox'></span>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <h1 class='question'>2. <?php echo $lang['onderwerp']; ?></h1>
        <p class='question-description'><?php echo $lang['onderwerp-beschrijving']; ?></p>

        <textarea name="onderwerp" onkeypress="return noenter()"></textarea>

        <h1 class='question'>3. <?php echo $lang['inhoud']; ?></h1>
        <p class='question-description'><?php echo $lang['inhoud-beschrijving']; ?></p>
        <textarea name="inhoud" onkeypress="return noenter()"></textarea>

        <h1 class='question'>4. <?php echo $lang['doel']; ?></h1>
        <p class='question-description'><?php echo $lang['doel-beschrijving']; ?></p>
        <textarea name="doel" onkeypress="return noenter()"></textarea>

        <h1 class='question'>5. <?php echo $lang['kanaal']; ?></h1>
        <p class='question-description'><?php echo $lang['kanaal-beschrijving']; ?></p>
        <div class='col-container'>
            <div class='col-col'>
                <div class="col">
                    <div class='checkbox-container'>Facebook
                        <input type="checkbox" id="kanaal-facebook" name="facebook" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    
                    <div class='checkbox-container'>LinkedIn
                        <input type="checkbox" id="kanaal-linkedin" name="linkedin" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'>Twitter
                        <input type="checkbox" id="kanaal-twitter" name="twitter" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                </div>
                <div class="col">
                    <div class='checkbox-container'>YouTube
                        <input type="checkbox" id="kanaal-youtube" name="youtube" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'>Instagram
                        <input type="checkbox" id="kanaal-instagram" name="instagram" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'>Instagram story
                        <input type="checkbox" id="kanaal-instagram-story" name="instagram story" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                </div>
            </div>
            <div class="col-col">
                <div class="col">
                    <div class='checkbox-container'>WhatsApp
                        <input type="checkbox" id="kanaal-whatsapp" name="whatsapp" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'><?php echo $lang['email']; ?>
                        <input type="checkbox" id="kanaal-email" name="email" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'>Vimeo
                        <input type="checkbox" id="kanaal-vimeo" name="vimeo" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                </div>
                <div class="col">
                    <div class='checkbox-container'><?php echo $lang['presentaties']; ?>
                        <input type="checkbox" id="kanaal-presentaties" name="presentaties" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'>Narrowcasting
                        <input type="checkbox" id="kanaal-narrowcasting" name="narrowcasting" value="X">
                        <span class='custom-checkbox'></span>
                    </div>
                    <div class='checkbox-container'><?php echo $lang['anders']; ?>
                        <input type='text' id="kanaal-anders" name="anders" disabled="disabled" onkeypress="return noenter()">
                        <input type="checkbox" onclick="var input = document.getElementById('kanaal-anders'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        <span class='custom-checkbox'></span>
                    </div>
                </div>
            </div>
        </div>
        
        <h1 class='question'>6. <?php echo $lang['data']; ?></h1>
        <p class='question-description'><?php echo $lang['data-beschrijving']; ?></p>

        <div class='col-container'>
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['handmatig']; ?>
                    <input type="radio" id="handmatig" name="data" value="Handmatig">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['handmatig-beschrijving']; ?></p>
                </div>
                
            </div>
            
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['data-bestand']; ?>
                    <input type="radio" id="databestand" name="data" value="Data bestand">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['data-bestand-beschrijving']; ?></p>
                </div>
            </div>
            
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['live-stream']; ?>
                    <input type="radio" id="livestream" name="data" value="Live stream">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['live-stream-beschrijving']; ?></p>
                </div>
            </div>
        </div>
        
        <h1 class='question'>7. <?php echo $lang['geluid']; ?></h1>
        <p class='question-description'><?php echo $lang['geluid-beschrijving']; ?></p>

        <div class='col-container'>
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['custom-muziek']; ?>
                    <input type="radio" id="custommuziek" name="geluid" value="Custom muziek">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['custom-muziek-beschrijving']; ?></p>
                </div>
            </div>
              
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['stock-muziek']; ?>
                    <input type="radio" id="stockmuziek" name="geluid" value="Stock muziek">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['stock-muziek-beschrijving']; ?></p>
                </div>
            </div>
    
            <div class="col">
                <div class='checkbox-container'><?php echo $lang['sound-effects']; ?>
                    <input type="checkbox" id="soundeffects" name="sound effects" value="X">
                    <span class='custom-checkbox'></span>
                    <p><?php echo $lang['sound-effects-beschrijving']; ?></p>
                </div>
            </div>
        </div>
        
        <h1 class='question'>8. <?php echo $lang['frequentie']; ?></h1>
        <p class='question-description'><?php echo $lang['frequentie-beschrijving']; ?></p>
        
        <textarea name="frequentie" onkeypress="return noenter()"></textarea>
        
        <h1 class='question'>9. <?php echo $lang['opmerkingen']; ?></h1>
        <p class='question-description'><?php echo $lang['opmerkingen-beschrijving']; ?></p>
        <textarea name="opmerkingen" onkeypress="return noenter()"></textarea>

        <div class='submit-container'>
            <button onclick=redirect() name='submit' type="submit"><?php echo $lang['verstuur']; ?></button>
        </div>
    </form>


    <script src="https://sbt.0soft.dev/sheet-best-templates.min.js"></script>
    <script>
        function redirect(){
            setTimeout( function() {
                window.location = 'success.php?client=<?php echo urlencode($_GET['client']);?>&lang=<?php echo $_GET['lang'];?>';
            },1000);
        }
    </script>
</body>
</html>