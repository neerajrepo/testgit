<script type="text/javascript" src="jquery.js"></script>
<?php
$teststring = "neeraj'\"@#$%^&*";
//$data = $_POST["name"];
//print_r((json_decode($_POST["name"],true)));
$var1 = htmlspecialchars("neeraj'\"@#$%^&*");
//echo $var1."<BR><BR>";
$var2 = htmlentities ("neeraj'\"@#$%^&*");
//echo $var2."<BR><BR>";

$var3 = htmlspecialchars("http://localhost/test/query.php?param1=1&param2=2");
//echo $var3."<BR><BR>";
$var4 = htmlentities ("http://localhost/test/query.php?param1=1&param2=2");
//echo $var4;

?>

<script language="javascript">   
$.ajax({
    // dataType: html (default: Intelligent Guess (xml, json, script, or html))
    // type: post (get, post)
    // data: data to be sent
    url: "server.php",

    error: function(){
        alert("server.php not found")
    },
    success: function(){
        alert("success")
    },
    complete:function(){
        alert("complete")
    },
    timeout: 3000
});
</script>
<script language="javascript">
    //alert("test");
    //var str = "neeraj'\"@#$%^&*";
    //var newstr1 = addslashes(str);
    
function addslashes(string) {
    return string.replace(/\\/g, '\\\\').
        replace(/\u0008/g, '\\b').
        replace(/\t/g, '\\t').
        replace(/\n/g, '\\n').
        replace(/\f/g, '\\f').
        replace(/\r/g, '\\r').
        replace(/'/g, '\\\'').
        replace(/"/g, '\\"').
        replace(/&/, "&amp;");
}
</script>

