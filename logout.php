<?php
    session_start();
    // untuk logout
    if (session_destroy()){
        echo "
            <script>
                alert('berhasill');
                location.href = 'index.php';
            </script>
        ";
    }

?>