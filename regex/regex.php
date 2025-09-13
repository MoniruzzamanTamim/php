



<?php 

//RegEX Example ....


$pattern = "/^Tamim/";
$text = "Tamim";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};

// → Case Sensetive (i)

$pattern = "/^TaMim/i"; // Case Sensetive
$text = "tamim";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};


$pattern = "/^TaMim$/i"; // Case Sensetive
$text = "tamim";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};


//→ 2. OR Operator (|)  
$pattern = "/^(I Love Bangladesh|I Love Pakisthan)$/i"; 
$text = "I Love Bangladesh";  // Try changing this
$result = preg_match($pattern, $text);

if($result){
    echo "pattern MATCH SUCCESSFULLY<br>";
}else{
    echo "pattern Not Found<br>";
}

//(.) Dot
$pattern = "/^I .... Bangladesh$/i"; 
$text = "I Love Bangladesh";  // Dot 
$text = "I Hate Bangladesh";  // Dot
$result = preg_match($pattern, $text);

if($result){
    echo "pattern MATCH SUCCESSFULLY<br>";
}else{
    echo "pattern Not Found<br>";
}

// → (.*) Dot Star 
$pattern = "/^I .* Bangladesh$/i"; 
$text = "I Love Bangladesh And Bangadesh is a Beutyful Country , So Love You Bangladesh";  // Dot 

$result = preg_match($pattern, $text);

if($result){
    echo "pattern MATCH SUCCESSFULLY<br>";
}else{
    echo "pattern Not Found<br>";
}


//→ Character Class ([])
$pattern = "/^I Love [a-zA-Z]*$/i"; // Multiple Text
$text = "I Love Bangladesh";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};

//→ Character Class with Quantifire ([]{})
$pattern = "/^[a-z]{5,20}[0-9]{2,3}@gmail.[a-z]{3}$/";
$text = "tamimiqbal896@gmail.com";
$result = preg_match($pattern, $text);
if($result){
	echo " Your Email AddRess Right ......"; echo "<br>";
}else{
	echo "Email Not Match"; echo "<br>";
};

 //→ Charecter Class with Negation ([^])

$pattern = "/^I Love[^a-zA-Z]*$/i"; 
$text = "I Love";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};

//→ (*)Regex এ * হলো একটা Quantifier

$pattern = "/^[a-zA-Z0-9]*/";
$text = "I Love";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};

//→ (+)Regex এ * হলো একটা Quantifier

$pattern = "/^[0-9]+/";
$text = "I Love";
$result = preg_match($pattern, $text);

if($result){
	echo "pattern mATCH SUCCESSfULLY" ; echo "<br>";
}else{
	echo "pattern Not Fund"; echo "<br";
};
?>
