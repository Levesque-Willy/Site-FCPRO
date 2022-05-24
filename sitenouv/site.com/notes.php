<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="notes.css">
        <link rel="icon" type="image/png" href="../img/favicon.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

    </head>
    <body>
            
        <form action = "notes2.php" method = "post" class = "form-edit">
            <?php
            
                $id = $_GET["id"] ;
                
                
            echo "<input type=hidden name=id value=$id>";
            ?>
            Nom <input type = "text" name="name" value = ""><br><br>
            <div class="stars">
                <input type = "radio" name="rate" id = "rate-1" value = "1"> 
                <label for class="fa fa-star gold"></label>
                <input type = "radio" name="rate" id = "rate-2" value = "2"> 
                <label for class="fa fa-star gold"></label>
                <input type = "radio" name="rate" id = "rate-3" value = "3"> 
                <label for class="fa fa-star gold"></label>
                <input type = "radio" name="rate" id = "rate-4" value = "4"> 
                <label for class="fa fa-star gold"></label>
                <input type = "radio" name="rate" id = "rate-5" value = "5" display="none"> 
                <label for class="fa fa-star gold"></label>
                <br>
                <div class="textarea-rate">
                <textarea name="review" id="review" cols="40" rows="10" class="form-control" placeholder="Donner votre avis ici..." maxlength="200" required></textarea><br/>
                </div>


            </div>
            <input type="submit" value="envoyer">
        </form>

    </body>
</html>