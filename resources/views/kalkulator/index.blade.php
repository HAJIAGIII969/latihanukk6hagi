<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:0;
        background-color:black;
        background-image:linear-gradient(to right,red,white);
        
    }
    table{
        border:5px solid white;
        margin-left:auto;
        margin-right:auto;
        border-radius:10px;
        box-shadow:5px 5px 5px rgba(red,green,blue,alpha);
        background-color:rgba(0 , 0, 0, 0.5);
    }



    input[type="button"]{
        width:10%;
        padding:20px 40px;
        font-size:large;
        background-color:red;
        color:white;
        font-weight:bold;
        border:none;
        border-radius:10px;
        box-shadow:5px 5px 5px rgba(red,green,blue,alpha);
        outline-color:white;
        border:3px solid white;
    }


    input[type="button"]:hover{
        background-color:rgba(0, 0, 0, 0.5);
    }

    input[type="text"]{
        width: 17%;
        padding:20px 20px;
        font-size:large;
        background-color:rgba(0, 0, 0, 0.5);
        font-weight:bold;
        border:none;
        border-radius:7px;
        box-shadow:5px 5px 5px rgba(red,green,blue,alpha);
        outline-color:white;
        border:3px solid white;


    }

    input[type="reset"]{
        width:6%;
        padding:20px 40px;
        font-size:large;
        background-color:red;
        color:white;
        font-weight:bold;
        border:none;
        border-radius:7px;
        box-shadow:5px 5px 5px rgba(red,green,blue,alpha);
        outline-color:white;
        border:3px solid white;

    }
 
    
</style>
<body>
    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form name="form1" action="" method="post">
            <tr>
                <td>
                    <h1><center><font color="white">KALKULATOR SEDERHANA</font></center></h1>
                </td>
            </tr>
            <input type="text" name="text1" id="">
            <input type="reset" value="c" onClick="form1.text1.value+=''">
            <table>
                <tr>
                    <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
                    <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
                    <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
                    <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
                    <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
                    <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
                    <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
                    <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
                    <td><input type="button" value="^"onClick="form1.text1.value+='000'"></td>
                    <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
                </tr>
                <tr>
                    <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
                    <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
                    <td><input type="button" value="x" onClick="form1.text1.value+='*'"></td>
                    <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
                   
                </tr>
                <table>
                <tr>
                    <td colspan="4">
                     <center><font color="white">   
                        NAMA : HAGGIE AUBERTA<br>
                        KELAS: XII PPLG 2<br>
                        LATIHAN UKK
                     </center></font>
                </tr>
</table>

            </table>
    </center>

    
    
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   