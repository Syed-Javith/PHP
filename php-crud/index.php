<style>
    form div{
        margin-top : 2rem;
    }
</style>

<body>
    
<?php

$con = new mysqli("localhost","root","root123","employee_management");
if($con->connect_error){
    echo $con->connect_error;
}else{
    $query = "SELECT * FROM employee";
    $result = $con->query($query);
    if($result->num_rows > 0){
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Department</th><th>Salary</th><th>Delete</th></tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row['id'] ."</td><td>". $row['name'] . "</td><td>" . $row['department'] . "</td><td>". $row['salary'] . "</td><td>" . "<form action='delete.php' method='POST'><input type='hidden' name='id' value='". $row['id'] ."' ><input type='submit' value='Delete' /></form>" .  "</td></tr>";
        }
        echo "</table>";
    }
}

?>
<a href="./delete.php">delete</a>

<button onclick="insertForm()">Insert</button>
<button onclick="updateForm()">Update</button>
<form id='insert' action='./insert.php' method='POST'>
     <div>
        <label for="id">ID : </label>
        <input type="number" name="id" id="id">
     </div> 
    <div>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name">
    </div> 
    <div>
        <label for="department">Department : </label>
        <input type="text" name="department" id="department">
    </div>
    <div>
        <label for="salary">Salary : </label>
        <input type="number" name="salary" id="salary">
    </div>
    <input type="submit" value="insert">
</form>

<form id='update' action='./update.php' method='POST'>
     <div>
        <label for="id">ID : </label>
        <input type="number" name="id" id="id">
     </div> 
    <div>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name">
    </div> 
    <div>
        <label for="department">Department : </label>
        <input type="text" name="department" id="department">
    </div>
    <div>
        <label for="salary">Salary : </label>
        <input type="number" name="salary" id="salary">
    </div>
    <input type="submit" value="update">
</form>

<script>
    const iForm = document.getElementById('insert');
    function insertForm() {
        iForm.style.visibility = '';
        iForm.style.height = 'auto';
    }
    iForm.style.visibility = 'hidden';
    iForm.style.height = 0;
    const uForm = document.getElementById('update');
    function updateForm() {
        uForm.style.visibility = '';
        uForm.style.height = 'auto';
    }
    uForm.style.visibility = 'hidden';
    uForm.style.height = 0;
</script>
</body>