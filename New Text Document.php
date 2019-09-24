<!DOCTYPE html>
<html>
<style>
#container {
  width: 400px;
  height: 50px;
  position: relative;
  background: yellow;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
}
</style>
<body>

<p><button onclick="myMove()">Click Me</button></p>

<div id ="container">
  <div id ="animate" ><button onclick="myMove()">Click Me</button> </div>
</div>

<script>
function myMove() {
  var elem = document.getElementById("animate");
  var pos = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++;
      elem.style.left = pos + "px";
      elem.style.right = pos + "px";
      elem.text="xyz";
    }
  }
}
</script>

</body>
</html>
