<?php
shell_exec("/home/pi/BirdNET-Pi/scripts/restart_caddy.sh");
header('Location: http://birdnetpi.local/scripts/index.html?success=true');
?>