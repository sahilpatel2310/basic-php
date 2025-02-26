<?php
    include 'config.php';
    $id = $_REQUEST['id'];

    $fet = "SELECT * FROM try1 WHERE id = $id  ";
    $result = $conn -> query($fet);
    $fetch = $result -> fetch_object();
?>

<form method="post" enctype="multipart/form-data">
    <input type="email" name="email" value="<?php echo $fetch -> email ?>" placeholder="Email">
    <input type="password" name="password"value="<?php echo $fetch -> password ?>" placeholder="Password">
    <input type="file" name="Image"value="<?php echo $fetch -> img ?>">
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="Male">:Male
    <input type="radio" name="gender" value="Female">:Female
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
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $country = $_REQUEST['country'];
        $image = $_FILES['Image']['name'];
        $temp_image = $_FILES['Image']['tmp_name'];
        $path = "img/".$image;
        move_uploaded_file($temp_image,$path);

        $update = "UPDATE try1 SET email = '$email', password='$password', img='$image', gender='$gender', country='$country' WHERE id = $id";
        $result = $conn -> query($update);

        if($result == true){
            header('location:fetch.php');
        }else{
            echo "Data Update Failed";
        }
    }
?>