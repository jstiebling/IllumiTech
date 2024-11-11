<nav class="side-bar">
		    <div class="user-p">
	            <img src="IllumiTech.jpeg"alt="User Image">
                <h4><?=$_SESSION['username']?></h4>
            </div>

            <?php

                if ($_SESSION['role'] == "employee") {
            ?>
            <!-- Employee Nav -->
			<ul>
				<li>
					<a href=#>
						<i class="fa fa-desktop" aria-hidden="true"></i> 
						<span>Clients</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-envelope-o" aria-hidden="true"></i> 
						<span>Pending tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						 <span>Completed tasks</span>
						</a
					</li>
				<li>
					<a href="#">
						<i class="fa fa-comment-o" aria-hidden="true"></i> 
						<span>Equipment</span>
					</a>
				</li>

				<li>
					<a href="logout.php">
						<i class="fa fa-sign-out" aria-hidden="true"></i> 
						<span>Logout</span>
					</a>
				</li>
			</ul>
            <?php } else { ?>
            <!-- Admin Nav -->
			<ul>
				<li>
					<a href="clients.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						 <span>Manage clients</span>
						</a>
					</li>
				<li>
					<a href="#">
						<i class="fa fa-users" aria-hidden="true"></i> 
						<span>Employees</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus" aria-hidden="true"></i>
						 <span>Create Task</span>
						</a>
					</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i> 
						<span>All Tasks</span>
					</a>
				</li>
                <li>
					<a href="#">
						<i class="fa fa-comment-o" aria-hidden="true"></i> 
						<span>Prospective Clients</span>
					</a>
				</li>

				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i> 
						<span>Logout</span>
					</a>
				</li>
			</ul>
            <?php } ?>
		    </nav>