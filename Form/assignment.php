<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <h1>Form Related Assignment </h1><br>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                 <label for="name"> Name:</label>
                 <input type="text" class='form-control' name="name" id="">
                 <label for="email"> Email:</label>
                 <input type="text" class='form-control'  name="email" id="">
                 <label for="age"> Age:</label>
                 <input type="text" class='form-control' name="age" id="">
                 <label for="phone"> Phone:</label>
                 <input type="text" class='form-control' name="phone" id="">
                 <input type="submit" class='form-control bg-primary mt-1' value="Submit">
                
            </form>
            </div>
            <div class="col-xl-6 ">
                <h1>Form Data Reslut</h1>
                <?php 
                    $name = $email = $age =$phone = '';
                    $name_err = $email_err = $age_err =$phone_err = '';
                    if($_SERVER['REQUEST_METHOD']=='GET'){
                        if(empty($GET['name'])){
                             $name_err = "নাম দিতে হবে";
                        }
                        else{
                            $name = clean_input($GET['name']);
                            if(!preg_match('/[a-zA-Z]*/u', $name)){
                                 $name_err =  "শুধু অক্ষর ও স্পেস দেয়া যাবে";
                            }
                        }
                    }
                    if ($name_err == "") {
        echo "✅ সব কিছু সঠিক!<br>";
        echo "নাম: $name<br>";
        echo "ইমেইল: $email<br>";
        echo "বয়স: $age<br>";
    } else {
        echo "❌ কিছু ভুল হয়েছে:<br>";
        echo "$name_err<br>$name_err<br>$name_err";
    }

                    function clean_input($data) {
                        $data = trim($data); // সামনে-পেছনের ফাঁকা জায়গা বাদ
                        $data = stripslashes($data); // ব্যাকস্ল্যাশ বাদ
                        $data = htmlspecialchars($data); // XSS প্রতিরোধ
                        return $data;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>