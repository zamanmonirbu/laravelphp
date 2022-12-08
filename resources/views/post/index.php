<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <table border='1px'>

        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php foreach($post as $post) { ?>
            <tr>
                <td><?php echo $post->id ;?></td>
                <td><?php echo $post->Title ;?></td>
                <td><?php echo $post->Details ;?></td>
                <td>
                    <a href="<?php echo url('post/show',$post->id) ;?>">Show Details</a>
                    ||Edit||Delete
                </td>
            </tr>


            <?php  } ?>  
         </table>

</body>

</html>