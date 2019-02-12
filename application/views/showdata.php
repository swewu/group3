<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Show</title>
</head>
<body>
  <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-1 ml-auto">
          <div class="input-group">
            <div class="input-group">
              <a href="<?php echo base_url() ?>Welcome/getdata"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Student</h4>
              <a href="<?php echo base_url() ?>Welcome/studentinsert" class="btn btn-success">Insert</a>
            </div>
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
              <tbody id="herbs">
                <?php
                    $i = 1;
                    foreach ($subjecthistory->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->studentid.'</td>';
                        echo '<td>'.$row->courseid.'</td>';
                        echo '<td>'.$row->year.'</td>';
                        echo '<td>'.$row->term.'</td>';
                        echo '<td>'.$row->grade.'</td>';
                        echo '<td>';
                        echo '<a href="<?php echo base_url() ?>Welcome/update" class="delete_data btn btn-danger"'.$row->historyid.'">';
                        echo '<i class="far fa-edit">Edit</i>';
                        echo '</a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a href="#" class="delete_data btn btn-danger" id="'.$row->historyid.'">';
                        echo '<i class="fa fa-trash">Delete</i>';
                        echo '</a>';
                        echo '</td>';
                        echo '</tr>';
                        $i++;
                    }
                    ?>
 
              </tbody>
            </table>

            <!-- PAGINATION -->
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
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Mhunprai
          </p>
        </div>
      </div>
    </div>
  </footer>
</body> -->

<script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Hello Group 3"))  
                {  
                     window.location="<?php echo base_url(); ?>views/updatestudent/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
      });
      </script>
    
</body>
</html>