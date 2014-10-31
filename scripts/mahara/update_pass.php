<?php
echo substr_replace(crypt('[[plain_pass]]', '$2a$12$' . substr(md5('[[passwordsaltmain]]' . '[[salt]]'), 0, 22)), '', 7, 22);
unlink('update_pass.php');
?>