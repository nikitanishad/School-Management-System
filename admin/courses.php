<?php include('header.php') ?>
<?php include('sidebar.php') ?>


  <div>
    <div class="col-sm-6">
     <h1 class="m-0 text-dark">Manage Courses </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
         <li class="breadcrumb-item"><a href="#">Admin</a></li>
         <li class="breadcrumb-item active">Courses</li>
        </ol>
      </div>
   </div>

<section class="content">
  <div class="container-fluid">
        <!-- Info boxes -->
    <div class="card">
      <div class="card-header ">
        <h3 class="card-title">Add New Course</h3>
      </div>
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" name="name" placeholder="Course Name" required class="form-control">
          </div>
          <div class="form-group">
            <label for="category">Course Category</label>
            <select name="category" id="category" class="form-control">
              <option value="">Select Category</option>
              <option value="web-design-and-development">Web Design & Development</option>
              <option value="app-developement">App Development</option>
            </select>
          </div>
          <div class="form-group">
            <label for="duration">Course Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Course Duration" required>
          </div>
          <div class="form-group">
            <input type="file" name="thumbnail" id="thumbnail" required>
          </div>
          <button name="submit" class="btn-success">Submit</button>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header py-2">
        <h3 class="card-title">Courses</h3>
        <div class="card-tools">
          <a href="?action=add-new" class=""><i class="fa fa-plus mr-2"></i>Add New</a>
        </div>
      </div>
      <div class="card-body">
        <div class="">
          <table class="">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
             <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php') ?>