<?php
function calculateAge($dateOfBirth) {
    try {
        $dob = new DateTime($dateOfBirth);
    } catch (Exception $e) {
        echo "incorrect date format";
    }
    $today = new DateTime();
    $interval = $today->diff($dob);
    return $interval->y;
}

// displaying the member on the index page.
function displayMember($groupMembers,$index){
	$member = $groupMembers[$index];
	echo $member['personName'].'<br>';
	return	'<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<!-- You may want to use the profilePicture from the member data -->
						<br>
						<img class="picture" src="assets/images/'.$member['profilePicture'].' " alt="'.$member['personName'].' " width="200" height="200">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									'.$member['personName'].' 
								</h1>
								<div class="title mb-3">
									'.$member['wantedTitle'].' 
								</div>
								<!-- If you need to pass any specific data to the detail.php page, modify the link accordingly -->
								<a href="detail.php?index='.$index.'" class="btn btn-secondary">See full profile</a>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<!-- Add any additional info you\'d like here -->
									
							</div><!--//secondary-info-->
						</div><!--//row-->
					</div><!--//col-->
				</div><!--//row-->
		</header>'
	;
}

// Displays work experience card on the detail page
function displayWorkExperience($workEXP) {
	echo '<article class="resume-timeline-item position-relative pb-5">
		<div class="resume-timeline-item-header mb-2">
			<div class="d-flex flex-column flex-md-row">
				<h3 class="resume-position-title font-weight-bold mb-1">'.$workEXP['jobTitle'].'</h3>
				<div class="resume-company-name ms-auto">'.$workEXP['jobCompany'].'</div>
			</div><!--//row-->
			<div class="resume-position-time">'.$workEXP['jobStart'].' - '.$workEXP['jobEnd'].'</div>
		</div><!--//resume-timeline-item-header-->
		<div class="resume-timeline-item-desc">
			<p>'.$workEXP['jobSummary'].'</p>
			<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
			<p>'.$workEXP['jobAchievements'].'</p>
			<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
			<ul class="list-inline">';
	for ($i = 0; $i < count($workEXP['jobTechUsed']); $i++) {
		echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">'.$workEXP['jobTechUsed'][$i].'</span></li>';
	}
	echo '</ul>
		</div><!--//resume-timeline-item-desc-->
		</article><!--//resume-timeline-item-->';
}
