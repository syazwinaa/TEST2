<html>
<head>
<title> Form Feedback </title>
</head>
<body>
<?php #Script handle form>

if (strlen($_POST["name"]) >0) {
    $_POST["name"] = $_POST["name"];
}
else{
    $_POST["name"]= null;

    echo '<p><b> You Forgot to Enter Your Name! </b></p>';
}


if (strlen($_POST["comments"]) >0) {
    $_POST["comments"] = $_POST["comments"];
}
else{
    $_POST["comments"]= null;

    echo '<p><b> You Forgot to Enter Your Comments! </b></p>';
}


if (!(strlen($_POST["email"]) >0)) {
$_POST["email"] = null;
echo '<p><b> You Forgot to Enter Your Emails! </b></p>';
}



if(isset($_POST["gender"])) {
    if($_POST["gender"] == 'M') {
        $message = '<b><p>Good Day, Sir </b></p>';
    }
    if($_POST["gender"] == 'F') {
        $message = '<b><p>Good Day, Madam. Registration successful!

        Thank you for registering for the Virtual Run Event!
        
        Your name, email and contact number have been successfully stored in the database. </b></p>';
    }
}else{
    $_POST["gender"] = null;
    echo '<p><b> You Forgot to Choose Your Gender! </b></p>';
}


if ($_POST["name"] && $_POST["comments"] && $_POST["email"] && $_POST["gender"]) {
    echo "Thank you," .$_POST["name"]. "for the following comments: <br /> <tt>" . 
    $_POST["comments"]. " </tt> <p> Your email address is <i>" . $_POST["email"] . 
    "</i></p>";
    echo $message;
}



    