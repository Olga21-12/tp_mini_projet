<footer class="footer">
        <nav class="nav-footer">

            <ul class="nav-footer-list">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./debug.php">DEBUG</a></li>
                <li><a href="./reset.php">RESET</a></li>
                
            </ul>

        </nav>

        

        <div class="footer-date">
        <?php 
        echo date("H:i:s d - m - Y", time() + 3600);
        ?>
        </div>

        <span class="text-muted">&copy; 2024 Olga&Co, Inc</span>
    </footer>
</html