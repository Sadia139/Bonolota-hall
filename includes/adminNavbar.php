<nav class="navbar navbar-light bg-light">
 
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BONOLOTA HALL ADMINISTRATOR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="adminIndex.php">Home</a>
      </li>
	 
  <li class="dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">View
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="view_allotment_list.php">View Allotment</a></li>
          <li><a href="view_complaints.php">View Complaints</a></li>
          <li><a href="view_feedback.php">View Feedback</a></li>
		  <li><a href="view_meal_stetus.php">View Meal Status</a></li>
		  <li><a href="view_meal_charge.php">View Meal Charge</a></li>
        </ul>
      </li>
       
	    <li class="nav-item">
        <a class="nav-link" href="register.php">Add Student</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="view_meal_chart.php">Meal Chart</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="view_hall_dues.php">Hall Dues</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="view_house_tutor.php">House Tutor</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="view_meal_generate.php">Meal Generate</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="month_create.php">Month Create</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="month_meal_charge.php">Meal Charge</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="OnlineNoticeBoard/index.php">OnlineNoticeBoard</a>
      </li>
    </ul>


     <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"><i
                        class="fa fa-user fa-2x"></i></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="userLogout" href="adminLogout.php">Log out</a>
                </div>
            </li>
        </ul>

  </div>
</nav>
