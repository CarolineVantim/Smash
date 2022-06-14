<?php

require 'db/Conexao.php';

if(isset($_SESSION['id']) && !empty($_SESSION['id'])):?>
<?php else: header("Location: home.php"); endif;?>
<?php
require_once 'header.php';

require_once 'footer.php';