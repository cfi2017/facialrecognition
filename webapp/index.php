<?php
if (shell_exec("diff /facialrecognition/webapp/dataset/ /home/webapp/dataset/") != NULL){
    shell_exec("cp /facialrecognition/webapp/dataset/* /home/webapp/dataset/");
};
?>
