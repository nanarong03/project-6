<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<h2>แก้ไขข้อมูล</h2>
  <form action="/action_page.php">
    <label for="fname">Name Product</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Details</label>
    <input type="text" id="lname" name="lastname" placeholder="Your details..">

    <label for="lname">Price</label>
    <input type="text" id="lname" name="lastname" placeholder="Your price..">

    <label for="lname">Image</label>
    <input type="text" id="lname" name="lastname" placeholder="Your image..">

    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> -->
  
    <input type="submit" value="Submit">
  </form>
</div>


</body>
</html>


