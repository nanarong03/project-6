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
<h2>เพิ่มข้อมูล</h2>
<form action="{{ route('adminpage.product.add') }}"method="POST"class="forms-sample">
  @csrf
    <label for="fname">Product name</label>
    <input type="text" id="fname" name="Product name" placeholder="Add your product name.."name="name"><br>

    <label for="lname">Details</label>
    <input type="text" id="lname" name="details" placeholder="Add your details.."name="name">

    <label for="lname">Price</label>
    <input type="text" id="lname" name="price" placeholder="Add your price.."name="name">

    <label for="lname">Image</label>
    <input type="text" id="lname" name="image" placeholder="Add your image.."name="name">

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


