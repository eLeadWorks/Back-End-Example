<footer>
    <div class="last-modified">Document last modified on <span id="last_modified"></span> .</div>
</footer>


<!-- i know not to load js from the footer although my functions.php currently isnt enqueing the script, ill debug later -->
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;
            
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            } 
            });
            }
    </script>

<?php wp_footer(); ?>
