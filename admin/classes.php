<?php  include('header.php') ?>
<?php  include('sidebar.php') ?>

<!-- <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manage Classes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Admin</a></li>
          <li class="breadcrumb-item active">Classes</li>
        </ol>
      </div>
    </div>
  </div>
</div> -->
<section class="">
  <div class="container-fl ">
       <!-- Info boxes --> 
      <div class="card">
        <div class="card-header py-2">
          <h3 class="card-title">Add New class</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" placeholder="Title" required class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Sections</label>
              <div>
               <label for="">
                 <input type="checkbox" name="section[]" id="" value="" placeholder="section">
               </label>
              </div> 
            </div>
            <button name="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>
      <div class="class-card">
        <div class="class-card-header">
          <h3 class="card-title">Classes</h3>
          <div class="card-tools">
            <a href="?action=add-new" class="class-btn"><i class="fa fa-plus mr-2"></i>Add New</a>
          </div>
        </div>
        <div class="class-card-body">
          <div class="">
            <table class="class-table">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>section</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                 <td></td>
                 <td>Class </td>
                 <td>Class</td>
                 <td>Class</td>
                 <td>Class</td>
               </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</section>

<?php  include('footer.php') ?>