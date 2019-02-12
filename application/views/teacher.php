<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
</style>
</head>
<body>

<p>search ^^:</p>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>


<table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>รหัสนักศึกษา</th>
                  <th>รหัสวิชา</th>
                  <th>ปีการศึกษา</th>
                  <th>เทอม</th>
                  <th>เกรด</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
              </thead>
            </table>

            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>

</body>
</html>
