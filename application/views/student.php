<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <style>
    div.background{
      background-color:rgba(247, 253, 255, 0.9);
      padding: 30px;
      margin: 80px;
      border-radius: 40px;
      width: 50%;
    }
    </style>
</head>
<body background="8478.jpg" style="background-size: 100%;">

      <div class="background">
        <div class="container">

<form action="<?php echo site_url('Welcome/insert') ?>" method="post">

<div class="container">
			<div class="card-header">
				<h3>กรอกข้อมูลบันทึกรายวิชา</h3>
			</div>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสนักศึกษา</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="studentid" name="studentid" placeholder="รหัสนักศึกษา">
				    </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">ชื่อนักศึกษา</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อนักศึกษา">
				    </div>
				  </div>
				
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">รหัสวิชา</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="courseid" name="courseid" placeholder="รหัสวิชา">
			    </div>
			  </div>
				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">ชื่อวิชา</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="coursename" name="coursename" placeholder="ชื่อวิชา">
				    </div>
				  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ปีการศึกษา</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ภาคการศึกษา</label>
			    <div class="col-sm-9">
					<input type="radio" name="term" value="1"> ภาคการศึกษาที่ 1
  				<input type="radio" name="term" value="2"> ภาคการศึกษาที่ 2
  				<input type="radio" name="term" value="3"> ภาคการศึกษาที่ 3 
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
			    <div class="col-sm-9">
					<select name="grade">
    				<option value="D">D</option>
    				<option value="D+">D+</option>
    				<option value="W">W</option>
    				<option value="F">F</option>
  				</select>
			    </div>
			  </div>

			  	<div class="form-group">
						<input type="submit" value="บันทึก" class="btn float-right login_btn">
					</div>
				</form>
				
			</div>
			
		</div>
	</div>
</div>
</form>

</body>
</html>