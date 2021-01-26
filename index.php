<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kovian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .glavni
        {
            background-color: black;
            height: 100px;
            font-family: Trebuchet MS;
            font-size: 1.2em;
            font-weight: bold;
            color: white;
            margin-left: -10px;
            margin-top: -10px;
            margin-right: -8px;
        }
        
        td
        {
            padding-left: 50px;
            padding-right: 50px;
            width: 0px;
            transition: 0.7s;
        }
        
        body
        {
            background-image: url('slike/ozadjeee.PNG');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        td:hover
        {
            width: 45px;
            border-radius: 5px;
            background-color: pink;
            cursor: pointer;
            height: 45px;
            vertical-align: middle;
            background-color: rgb(216, 154, 78);
            transition: 0.7s;
        }
        
        table
        {
            margin-top: 20px;
            float: right;
            padding-right: 15px;
            height: 60px;
            transition: 0.5s;
        }
        
        .napisek
        {
            font-family: Verdana, sans-serif;
            font-size: 4.1em;
            font-weight: bold;
            color: white;
            text-align: center;
            margin-top: 180px;
            margin-left: 50%;
        }
        
        .gumb1
        {
            border-radius: 5px;
            background-color: rgb(216, 154, 78);
            color: white;
            font-family: Verdana, sans-serif;
            font-weight: bold;
            border: none;
            width: 180px;
            height: 70px;
            transition: 0.7s;
            font-size: 1.1em
        }
        
        .gumb1:hover
        {
            background-color: rgb(163, 107, 39);
            cursor: pointer;
            transition: 0.7s;
        }
    </style>
    <body>
        <div class="glavni">
            <div>
                <table>
                    <tr>
                        <td>
                        Kontakt
                    </td>
                    <td>
                       Domov
                    </td>
                    <td>
                        Prijava
                    </td>
                    <td>
                        Registracija
                    </td>
                </td>
                </tr>
                </table>
            </div>
        </div>
        <div>
            <div>
                <b class="napisek">Kavica za vas,<br>
                 &nbsp;vedno sveža</b>
            </div>           
        </div>
        <div>
            <div>
                <form action="#" method="POST">
                    <input type="submit" class="gumb1" name="gumb" value="Naročite zdaj">
                    <input type="submit" class="gumb2" name="gumbb" value="Preglejte ponudbo">
                </form>
            </div>
        </div>
    </body>
</html>
