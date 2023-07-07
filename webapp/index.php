<?php
//backup stuff
if (shell_exec("diff /facialrecognition/webapp/dataset/ /home/webapp/dataset/") != NULL){
    shell_exec("cp /facialrecognition/webapp/dataset/* /home/webapp/dataset/");
};
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #222;
            color: #fff;
        }

        h1 {
            color: #ccc;
            margin-bottom: 20px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .image-container img {
            width: 200px;
            height: 200px;
        }

        p {
            color: #aaa;
            margin-top: 40px;
        }
    </style>
</head>
<body>
<h1 style="color: red">TOP SECRET</h1>
    <h1>Facial Recognition Dataset</h1>

    <p>You just accessed Portable Ops' very secret dataset used for facial recognition. Authorized eyes only. This dataset is pulled every minute directly from the facial recognition git repository.</p>
    <div class="image-container">
        <?php
        $myfiles = scandir("/facialrecognition/webapp/dataset/");
        $myfiles = array_slice($myfiles, 2);
        shuffle($myfiles); 
        for ($i = 0; $i < count($myfiles); $i++) {
            $myfiles[$i] = substr($myfiles[$i], 0, -4);
            echo "<img src='/resources/" . $myfiles[$i] . ".png'>";
        }

        ?>
    </div>
</body>
</html>





