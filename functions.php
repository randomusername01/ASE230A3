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
