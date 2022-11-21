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
  <form action="{{ url('/admin/newandevent/update/'.$newandevent->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="fname">name</label>
    <input type="text" id="fname" name="name" value="{{$newandevent->name}}" placeholder="Add your new name..">

    <label for="lname">New details</label>
    <input type="text" id="lname" name="detail" value="{{$newandevent->detail}}" placeholder="Add your new Details..">

    <label for="lname">New image</label>
    <input type="file" id="lname" name="image" value="{{$newandevent->image}}" placeholder="Add your new image..">


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


