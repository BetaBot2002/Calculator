<html>
    <head>
      <style>
        input{
          margin: 10px;
          max-width: 300px;
           max-height: 100px;
           text-align:center;
           font-weight: bold;
           box-shadow: 10px 10px 5px black;
        }
        select{
          margin: 10px;
          max-width: 400px;
           max-height: 400px;
           font-size: 20px;
           box-shadow: 10px 10px 5px black;
        }
        button{
          margin: 10px;
          max-width: 150px;
           max-height: 30px;
           font-size: 20px;
           box-shadow: 10px 10px 5px black;
           font-weight: bold;
        }
        .ip1 {
          max-width: 150px;
           max-height: 30px;
           border: 4px solid blue;
           background-color: rgb(153,255,255);
           border-radius: 4px;
           font-size: 20px;
           margin: 10px;
          }
          .ip2 {
            max-width: 150px;
           max-height: 30px;
           border: 4px solid red;
           border-radius: 4px;
           background-color: rgb(255,153,153);
           font-size: 20px;
          }
          .op {
            max-width: 150px;
           max-height: 30px;
           border: 4px solid yellow;
           border-radius: 4px;
           background-color: rgb(255,255,102);
           font-size: 20px;
          }
        .f1{
          max-width: 400px;
           max-height: 300px;
           border: 4px solid black;
           border-radius: 4px;
           background: linear-gradient(rgba(0,0,0,0.6), rgba(50,0,0,0.6)), url(https://img.freepik.com/free-vector/maths-chalkboard_23-2148178220.jpg);
           background-size: contain;
           box-shadow: 10px 10px 5px black;
           padding: 20px;
           font-size: 20px;
           text-align: center;
           margin: auto;
        }
        body{
          max-width: 2000px;
          background: linear-gradient(rgba(0,109,0,0.6), rgba(0,0,0,102.6)), url(https://wallpapercave.com/wp/PO6cjaY.jpg);
          border: 15px solid green;
          border-radius: 10px;
          text-align:center;
          margin: 10px;
          padding: 5px;
          font-size: 20px;
        }
        h1{
          width: 400px;
          margin: auto;
          border: 15px solid red;
          border-radius: 10px;
          background-color: rgb(255,255,102);
          font-family:"Monaco", monospace;
          font-weight: bold;
          letter-spacing: 5px;
        }
        .ans{
          font-family:"Times New Roman", Times,Serif;
          font-size: 30px;
          color: white;
          text-shadow:1px 1px 2px black, 2px 0 25px blue, 0 0 15px darkblue;
          

        }
    </style>
    </head>
    <?php
    if (isset($_POST['Input1']))
    {
    if($_POST['op']=='+')
    {
      //var_dump($_POST);
        $x=$_POST['Input1']+$_POST['Input2'];
      // echo $x;
    }
    else if($_POST['op']=='-')
    {
      //var_dump($_POST);
        $x=$_POST['Input1']-$_POST['Input2'];
       //echo $x;
    }
    else if($_POST['op']=='*')
    {
      //var_dump($_POST);
        $x=$_POST['Input1']*$_POST['Input2'];
       //echo $x;
    }
    else if($_POST['op']=='/')
    {
      //var_dump($_POST);
        $x=$_POST['Input1']/$_POST['Input2'];
       //echo $x;
    }
    else echo "wrong";
  }
    ?>
    <body>
      <div><h1>Calculator</h1></div><br>
      <fieldset class="f1">
        <form  action="Calculator.php" method=POST>
            <div >
                <input class="ip1" name="Input1" type="number" placeholder="Enter no." value="<?php if (isset($_POST['Input1'])) {echo $_POST['Input1'];}?>">
            </div>
                <select name="op" value="<?php if (isset($_POST['op'])) {echo $_POST['op'];}?>">
                <option disabled selected><?php if (isset($_POST['op'])) {echo $_POST['op'];} else { echo "Choose Operation";}?></option>
                <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    
                  </select>
                  
            </div>
            <div>
                <input class="ip2" name="Input2" type="number" placeholder="Enter no." value="<?php if (isset($_POST['Input2'])) {echo $_POST['Input2'];}?>">
            </div>
           <div><button>Calculate</button></div> 
           
           <div class="ans"> Answer: <input class="op" readonly="readonly" value="<?php if (isset($_POST['Input1'])) {echo $x;}?>"><div>
        </form>
</fieldset>
    </body>

</html>
