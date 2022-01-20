
<script src="assets/plugins/jquery/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">  

<script type="text/javascript" charset="utf8" src="assets/plugins/datacables/jquery.dataTables.js"></script>
<script type="text/javascript" src="script/datatables.js"></script>
<?php include('container.php');?>
<div id="shubh" class="container">	
		<table id="developers" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
				<th>Employee</th>
                <th>Client Name</th>
				<th>Description</th>
				<th>date_created</th>
            </tr>
        </thead>       
    </table>
</div>

<div>

<h2>JavaScript Confirm Box</h2>


<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var txt;
  if (confirm(document.getElementById("shubh"))) {
   alert("You pressed OK!");
  } else {
    alert("You pressed Cancel!");
  }
//   document.getElementById("demo").innerHTML = txt;
}
</script>

</div>