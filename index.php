<?php include('header.php') ?>

    <!--hero sections  -->
     <div class="landing-page">
       <div class="page">
        <div class="row">
          <div class="left-row">
            <h1 class="heading">Addmission Open <br>for 
              2024-2025</h1>
            <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aperiam sim
            <br>
            iste molestiae dignissimos odit voluptat
            </p>
            <button class="btn">
            <a href="#">CALL TO  ACTION</a>
            </button>
          </div>
          <div class="right-row">
            <div class="inquery-form">
               <div>
                <h3>Inquiry Form</h3>
                <form action="" method="post" class="form">
                  <div>
                    <input type="text" class="form-control" >
                    <label for="">Your Name</label>
                  </div>
                  <div>
                    <input type="email" class="form-control" >
                    <label for="">Your Email</label>
                  </div>
                  <div>
                    <input type="text" class="form-control">
                    <label for="">Your Number</label>
                  </div>
                  <div>
                  <textarea name="" id="" cols="20" rows="3" class="form-control"></textarea>
                    <label for="">Your Query</label>
                  </div> 
                  <input type="submit" class="submit-btn">
                </form>
               </div>
            </div>
          </div>
        </div>
       </div>
     </div>
       
       <!-- About sections -->
     <div>
      <div class="about">
        <div class="about-info">
          <div class="information">
            <h2>About <br>
            School Management System 
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quod rem ab nobis, velit fugiat unde iste dolores dolorem perferendis pariatur cupiditate quibusdam nulla, amet voluptatum sint quia quae non?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta alias amet sapiente. Assumenda, necessitatibus. Delectus, reiciendis. Porro, soluta perferendis! Nemo velit, ipsa vitae amet praesentium aut quis eius fuga commodi.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis modi ducimus repudiandae id repellendus aperiam voluptatum deserunt iure ut doloribus? Nostrum repellendus quo omnis optio mollitia nobis illo dolores provident.
            </p>
             <button class="know-more-btn"><a href="#">KNOW MORE </a></button>
          </div>
          <div class="information-img">
            <img src="images/study.jpg" alt="">
          </div>
        </div>
      </div>
     </div>
     
     <!-- courses -->


     <section class="courses">
       <div class="course-text">
        <h2>Our Courses</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque eum eaque molestias architecto eveniet reiciendis sint quo accusantium debitis corrupti voluptates.
        </p>
       </div>
     
      
        <div class="row-section">
         <?php  for($i=1; $i<5; $i++){ ?>
          <div class="card1">
            <div class="card">
              <div>
                <img src="images/uploads/business-1031754_1280.jpg" alt="" class="course-image">
              </div>
              <div class="card-body">
                <b>HTML</b>
                <p class="card-text">
                  <b>Duration: </b> 2 Hour <br>
                  <b>Price: </b> 2000/- Rs
                </p>
                <button class="enroll-btn">Enroll Now</button>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="row-section">
         <?php  for($i=1; $i<5; $i++){ ?>
          <div class="card1">
            <div class="card">
              <div>
                <img src="images/uploads/business-1031754_1280.jpg" alt="" class="course-image">
              </div>
              <div class="card-body">
                <b>HTML</b>
                <p class="card-text">
                  <b>Duration: </b> 2 Hour <br>
                  <b>Price: </b> 2000/- Rs
                </p>
                <button class="enroll-btn">Enroll Now</button>
              </div>
            </div>
          </div>
          <?php }?>
        </div>


     </section>

      <!-- Teacher sections -->

     <section class="tech-section">
        <div class="course-text ">
           <h2>Our Teachers</h2>
           <p>
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque eum eaque molestias architecto eveniet reiciendis sint quo accusantium debitis corrupti voluptates.
           </p>
        </div>

        <div class="teachers-container">
            <?php for($i=1; $i<4; $i++) {?>
            <div class="teachers-row">
             <div class="tech-card">
               <div class="cards">
                 <div class="tech-img-card">
                   <img src="images/placeholder.jpg" alt="">
                 </div>
                 <div class="tech-info">
                   <h5>Teacher's Name</h5>
                   <p>
                     <b>Courses: PHP</b>
                     <br>
                     <br>
                     <b>Rating:</b>
                       <i class="fa fa-star text-warning"></i>
                       <i class="fa fa-star text-warning"></i>
                       <i class="fa fa-star text-warning"></i>
                       <i class="fa fa-star text-warning"></i>
                       <i class="fa fa-star text-warning"></i>
                   </p>
                 </div>
               </div>
             </div>
            </div>
             <?php }?>
          </div>
          <div class="teachers-container">
            <?php for($i=1; $i<4; $i++) {?>
           <div class="teachers-row">
            <div class="tech-card">
              <div class="cards">
                <div class="tech-img-card">
                  <img src="images/placeholder.jpg" alt="">
                </div>
                <div class="tech-info">
                  <h5>Teacher's Name</h5>
                  <p>
                    <b>Courses: PHP</b>
                    <br>
                    <br>
                    <b>Rating:</b>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                  </p>
                </div>
              </div>
            </div>
           </div>
           <?php }?>
        </div>      
      </section>

       <!-- Acheivements sections -->

      <section class="acheivement-section">
        <div class="achiv-container">
          <div class="achiv-row">
            <div class="achiv-text">
              <h2>Acheivements</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatum quas, libero repudiandae nulla repellendus illo quis ipsa voluptatibus nostrum cum maxime iste totam dolores aliquid molestiae animi quaerat dolore.
              </p>
              <img src="images/study.jpg" alt="">
            </div>

            <div class="achiv-qulifections">
               <?php for($i=1; $i<3; $i++){ ?>
              <div class="education">
                <div class="educ-card">
                  <span><i class="fas fa-graduation-cap fa-2x"></i></span>
                  <h2>334</h2>
                  <hr>
                  <h4>Graduates</h4>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>

        <!-- pepole saye -->

        <section>
          <div>
            
          </div>
        </section>

        <!-- footer -->
      <?php include('footer.php') ?>