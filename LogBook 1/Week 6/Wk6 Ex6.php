<?php
	include("functions.inc");
	html_header("My second function demo");
    echo "I pay £ "  . calculatetax(15000,22) .  " tax";
	//echo "I pay £ "  . calculatetax(15000) .  " tax";
    //echo "I pay £ "  . calculatetax(15000,22, 4800) .  " tax";
	html_footer();
?>