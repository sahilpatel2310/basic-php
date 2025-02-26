<?php
include 'config.php';
$fetch = "SELECT * FROM try1";
$result = $conn -> query($fetch);
?>

<table>
    <thead>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th> Image </th>
        <th> Gender </th>
        <th> Country </th>
    </thead>

    <tbody>
        <?php while($fetch = $result -> fetch_object()){ ?>
        <tr>
            <td><?php echo $fetch -> id; ?></td>
            <td><?php echo $fetch -> email ?> </td>
            <td><?php echo $fetch -> password ?> </td>
            <td><img src="img/<?php echo $fetch -> img; ?>" height="100px" width="100px"> </td> 
            <td><?php echo $fetch -> gender ?> </td>
            <td><?php echo $fetch -> country ?></td>
            <td> <a href="delete.php?id= <?php echo $fetch -> id; ?>">Delete</a></td> 
            <td> <a href="update.php?id=<?php echo $fetch -> id; ?>">Edit</a></td> 
            
        </tr>
        <?php } ?>
    </tbody>
</table>