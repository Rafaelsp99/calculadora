<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>CALCULADORA</h1>
    
    <a href="/calculadora/soma">Soma</a> <br> <br>
    <a href="/calculadora/sub">Subtração</a><br><br>
    <a href="/calculadora/div">Divisão</a><br> <br>
    <a href="/calculadora/mult">Multiplicação</a><br> <br>

    


            <form action="/calculadora" method="get">
            <h1>CALCULADORA</h1> 
            <br /> <br />
           
            PRIMEIRO NÚMERO:
            <input name="num1" type="text" />
            <br /> <br />
             
            SEGUNDO NÚMERO:
            <input name="num2" type="text" />
            <br /> <br />
             
            OPERAÇÃO:  
            <select name="calculadora" >
            <option value="/calculadora/soma">+</option>
            <option value="/calculadora/sub">-</option>
            <option value="calculadora/div">*</option>
            <option value="calculadora/mult">/</option>
            
            <br /> <br />

        

        
        </select>
        <br /> <br />
             
            
            </form>
</body>
</html>