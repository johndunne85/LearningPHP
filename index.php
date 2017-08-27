<head>
    <style>
        #first_form{
            padding: 7px;
            border: 3px solid black;
            border-color: green;
            border-width:medium;
            width: 13%;
        }
        #second_form{
            padding: 7px;
            border: 3px solid black;
            border-color: red;
            border-width:medium;
            width: 13%;
        }
        #third_form{
            padding: 7px;
            border: 3px solid black;
            border-color: blue;
            border-width:medium;
            width: 13%;
        }
        #form_get{
            padding: 7px;
            border: 3px solid black;
            border-color: pink;
            border-width:medium;
            width: 13%;
        }
        #text_output{

            text-align: center;
        }

    </style>


</head>
<body>
    <?php
            $people = array(
                "john_profession"=>"engineer","john_salary"=>"€52,000","john_address"=>"Kildare",
                "liam_profession"=>"bank manager","liam_salary"=>"€56,000","liam_address"=>"Sydney",
                "Aisling_profession"=>"solicitor","Aisling_salary"=>"€65,000","Aisling_address"=>"Dublin",
                "sam_profession"=>"nurse","sam_salary"=>"€34,000","sam_address"=>"New York",
                "paul_profession"=>"doctor","paul_salary"=>"€57,000","paul_address"=>"Dublin"
            );

            class Address{
                public $street_address_1;
                public $street_address_2;
                public $city_name;
                public $subdivision_name;
                public $postal_code;
                public $country_name;

                function display(){
                    $output = '';

                    $output .=$this->street_address_1;
                    if($this->street_address_2){
                        $output .='<br/>'.$this->street_address_2;
                    }

                    $output .= '<br/>';
                    $output .= $this->city_name.', '.$this->subdivision_name;
                    $output .=' '.$this->postal_code;

                    $output .='<br/>';
                    $output .=$this->country_name;
                    $output .='<br/>';


                    return $output;
                }


            }

            $address1 = new Address;
            $address2 = new Address;
              echo '<h2>Empty Address</h2>';
              echo '<tt><pre>'.var_export($address1,TRUE).'</tt></pre>';
              echo '<tt><pre>'.var_export($address2,TRUE).'</tt></pre>';

              echo'<h2>Setting the properties</h2>';
              $address1->street_address_1 = '108 the drive';
              $address1->street_address_2 = 'Castletown';
              $address1->city_name = 'Celbridge';
              $address1->subdivision_name = 'Co.Kildare';
              $address1->postal_code = '12345';
              $address1->country_name= 'Ireland';

              $address2->street_address_1 = '54 street';
              $address2->street_address_2 = 'South Street';
              $address2->city_name = 'Astoria';
              $address2->subdivision_name = 'New York';
              $address2->postal_code = '22333';
              $address2->country_name= 'United States';

              echo '<tt><pre>'.var_export($address1, TRUE).'</pre></tt>';

              echo $address1->display();
              echo'<br/>';

              echo $address2->display();



    ?>


<h2>PHP work out</h2>

<h4 id="text_output">
<?php if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['sub_first'])){

    echo "The person was ".$_POST['firstName']." last name ".$_POST['secondName'].".";
}
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['sub_second'])){

    echo "The animal was ".$_POST['animal']." from  ".$_POST['farm']." farm.";
}
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['sub_third'])){

    echo "The climbs name is ".$_POST['climbName'].", the grade is ".$_POST['grade'].".";
}
if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['sub_get'])){

    if(strtolower($_GET['name'])=="john dunne"){
    echo " John is a ".$people["john_profession"]." in ".$people["john_address"]." on a salary of ".$people["john_salary"].".";
}
elseif(strtolower($_GET['name'])=="liam dunne"){
echo " Liam is a ".$people["liam_profession"]." in ".$people["liam_address"]." on a salary of ".$people["liam_salary"].".";
}
elseif(strtolower($_GET['name'])=="Aisling lee"){
echo " Denise is a ".$people["Aisling_profession"]." in ".$people["Aisling_address"]." on a salary of ".$people["Aisling_salary"].".";
}
elseif(strtolower($_GET['name'])=="sam wade"){
echo " Paul is a ".$people["sam_profession"]." in ".$people["sam_address"]." on a salary of ".$people["sam_salary"].".";
}
elseif(strtolower($_GET['name'])=="paul crothers"){
echo " Sam is a ".$people["paul_profession"]." in ".$people["paul_address"]." on a salary of ".$people["paul_salary"].".";
}
else{
    echo "The name entered is not in the data base!";
}
}


?>
<pre>
    <!-- <?php print_r($array) ?> -->
</pre>

</h4>


<div id="form_box">

<form action="index.php" id ="first_form" name="firstForm" method="POST">
    First Name:<br>
     <input type="text" name="firstName" placeholder="First Name"><br>
    Second Name: <br>
    <input type="text" name="secondName" placeholder="Second Name"><br>
    Address: <br>
    <input type="text" name="address" placeholder="Address"><br>
    Profession: <br>
    <input type="text" name="profession" placeholder="Profession"><br>
    Amount:<br>
     <input type="number" name="amount" placeholder="Amount">
     <input type="submit" name="sub_first" value="submit">
</form>

</div>

<div id="form_box2">

<form action="index.php" id ="second_form" name="firstForm" method="POST">
     Animal:<br>
     <input type="text" name="animal" placeholder="Animal"><br>
    Farm: <br>
    <input type="text" name="farm" placeholder="Farm"><br>
    Address: <br>
    <input type="text" name="address" placeholder="Address"><br>
    Price: <br>
    <input type="text" name="price" placeholder="Price"><br>
    Amount:<br>
     <input type="number" name="amount" placeholder="Amount">
     <input type="submit" name="sub_second" value="submit">
</form>

</div>

<div id="form_box3">

<form action="index.php" id ="third_form" name="firstForm" method="POST">
     Climb Name:<br>
     <input type="text" name="climbName" placeholder="Climb Name"><br>
    Grade: <br>
    <input type="text" name="grade" placeholder="Grade"><br>

     <input type="submit" name="sub_third" value="submit">
</form>

</div>

<div id="form_get">

<form action="index.php" id ="get_form" name="getForm" method="GET">
     Name:<br>
     <input type="text" name="name" placeholder="name"><br>
    Profession: <br>
    <input type="text" name="profession" placeholder="Profession"><br>

     <input type="submit" name="sub_get" value="submit">
</form>

</div>


</body>
