<script>
function echoHello(){
 alert("<?PHP hello(); ?>");
 }
</script>

<?PHP
FUNCTION hello(){
 echo "Call php function on onclick event.";
 }

?>

<button onclick="echoHello()">Say Hello</button>