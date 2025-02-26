<form method="post" enctype="multipart/form-data">
    <div>
    <input type="email" name="email" placeholder="Email">
    </div>
    <div>
    <input type="password" name="password" placeholder="Password">
    </div>
    <div>
    <input type="file" name="Image">
    </div>
    <div>
        <label for="gender">Gender</label>
            <input type="radio" name="gender" value="Male">:Male
            <input type="radio" name="gender" value="Female">:Female
    </div>
    <div>
        <label> Select Country </label>
        <select name="country">
            <option value=""> Select Country </option>
            <option value="india">india</option>
            <option value="usa">usa</option>
            <option value="uk"> uk </option>
        </select>
    </div>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    include 'config.php';

    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $country = $_REQUEST['country'];

        $image = $_FILES['Image']['name'];
        $temp_image = $_FILES['Image']['tmp_name'];
        $path = "img/".$image;
        move_uploaded_file($temp_image,$path);
    

    $ins = "INSERT INTO try1 (email,password,img,gender,country) VALUES('$email','$password','$image','$gender','$country')";
    $result = $conn -> query($ins);

    if($result == true){
        echo "Data Insert Succesfully";
    }
    else{
        echo "Data Insert Failed";
    }
}
?>