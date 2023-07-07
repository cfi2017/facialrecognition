<?php
//backup stuff
if (shell_exec("diff /facialrecognition/webapp/dataset/ /home/webapp/dataset/") != NULL){
    shell_exec("cp /facialrecognition/webapp/dataset/* /home/webapp/dataset/");
};
?>


<?php
$myfiles = scandir("/facialrecognition/webapp/dataset/");
for ($i = 2; $i < count($myfiles); $i++) {
    $myfiles[$i] = substr($myfiles[$i], 0, -4);
    echo "<img src='/resources/" . $myfiles[$i] . ".png'>";
}
?>
