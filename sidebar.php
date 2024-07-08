<!-- Sidebar content -->

<div class="sidebar-content">

	<!-- Sidebar header -->
	<div class="sidebar-section">
		<div class="sidebar-section-body d-flex justify-content-center">
			<h5 class="sidebar-resize-hide flex-grow-1 my-auto"><?php echo $_SESSION['name'] ?></h5>
			

			<div>
				<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
					<i class="ph-arrows-left-right"></i>
				</button>

				<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
					<i class="ph-x"></i>
				</button>
			</div>
		</div>
	</div>
	<!-- /sidebar header -->


	<!-- Main navigation -->
	<div class="sidebar-section">
		<ul class="nav nav-sidebar" data-nav-type="accordion">

			<!-- Main -->
			<li class="nav-item-header pt-0">
				<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
				<i class="ph-dots-three sidebar-resize-show"></i>
			</li>
			<li class="nav-item">
				<a href="dashboard.php" class="nav-link">
					<i class="ph-house"></i>
					<span>
						Dashboard
						<span class="d-block fw-normal opacity-50"><?php echo $_SESSION['name'] ?></span>
					</span>
				</a>
			</li>


			<!-- Forms -->
			<li class="nav-item-header">
				<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">jobs</div>
				<i class="ph-dots-three sidebar-resize-show"></i>
			</li>
			<li class="nav-item ">
				<a href="job_post_form.php" class="nav-link">
					<i class="ph-note-pencil"></i>
					<span>Post job</span>
				</a>

			</li>
			<li class="nav-item ">
				<a href="job_status.php" class="nav-link">
					<i class="ph-table"></i>
					<span>Job status</span>
				</a>

			</li>


			<!-- /forms -->
			<li class="nav-item-header">
				<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Candidate</div>
				<i class="ph-dots-three sidebar-resize-show"></i>
			</li>
			<li class="nav-item ">
				<a href="candidate_form.php" class="nav-link">
					<i class="ph-note-pencil"></i>
					
					<span>Add Candidate </span>
				</a>
				<a href="candidate_info.php" class="nav-link">
					<i class="ph-table"></i>
					<span>Candidates info</span>
				</a>

			</li>
			

			<!-- Components -->
			<li class="nav-item-header">
				<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Settings</div>
				<i class="ph-dots-three sidebar-resize-show"></i>
			</li>

			<li class="nav-item nav-item">
				<!-- <a href="add_job.php" class="nav-link">
					<i class="ph-buildings"></i>
					<span>Add Post</span>
				</a> -->

			</li>
			<li class="nav-item nav-item">
			<a href="candidate_search.php" class="nav-link">
				<i class="ph-dots-three-circle"></i>
				<span>Candidate Search </span>
			</a>
            </li>

		</ul>
	</div>
	<!-- /main navigation -->

</div>
<!-- /sidebar content -->