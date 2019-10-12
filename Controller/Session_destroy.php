<?php

    session_start();
    session_destroy();
    setcookie ("session", "", time() - 3600);
    header("Location: ../login");