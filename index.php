<?php
// including functions.php
	require 'functions.php';
// Array of group member information.
$groupMembers = [
	// Group Member 1: pam pepper
	[
		'personName'=>'Pam Pepper',
		'wantedTitle'=>'Software Developer',
		'email'=>'pepperp1@nku.edu',
		'phoneNumber'=>'(517) 745 - 9745',
		'github'=>'https://github.com/echocall',
		'linkedIn'=>'https://www.linkedin.com/in/pam-pepper-977483222/',
		'website'=>'#',
		'summary'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
		'profilePicture'=>'pamprofile.jpg',
		'languages'=>['English','German'],
		'hobbies'=>['Reading','Piano','Video Games','Drawing'],
		'jobHistory'=>[
			[
				'jobTitle'=>'IT Technician',
				'jobCompany'=>'E.C. Shaw Company',
				'jobEmploymentDates'=>'2018 - 2023',
				'jobStart' => 'Jan 2018',
				'jobEnd' => 'August 2023',
				'jobDescription'=>'Maintanence, documentation, and creation of several technology related processes such as: multi-sever backup schedule with air gapped offsite storage, critical hardware replacements, daily use workflows, data archival procedures, hardware both on site and in secondary location, and policies governing technology use.',
				'achivementSummary'=>'I helped to significantly decrease downtime with quick research and implementation of solutions to problems on the fly, and estabilishing a schedule for preventative maintenance. I also played a major role in debugging, streamlining, and designing several workflows to streamline production.',
				'jobTechUsed'=>['FileMaker', 'Regex','SQL','Office 365','Fortinet EMS Suite','WordPress']
			],
			[
				'jobTitle'=>'Shift Lead',
				'jobCompany'=>'Walgreens',
				'jobStart' => '2015',
				'jobEnd' => '2018',
				'jobDescription'=>'Assigning duties and tasks to other members of team and ensuring timely completion. Diagnosing and addressing customer concerns and complaints. Tracking and managing inventory levels.',
				'achivementSummary'=>'I contributed to smooth operation of the store including assisting customers with better understanding products and what would fit their needs. Independently managed a small team on the floor and assisted many times with pharmacy.',
				'jobTechnology'=>['AS400','Point of Sale system','Walgreen Scheduling System','Walgreen Photo Kiosks']
			],
			[
				'jobTitle'=>'Photo Technician',
				'jobCompany'=>'Walgreens',
				'jobStart' => '2013',
				'jobEnd' => '2015',
				'jobDescription'=>'Assisted customers with operation of photo kiosk machines, operated and maintained the photography lab equipment which included changing of chemicals and troubleshooting issues with the machines on the fly. ',
				'achivementSummary'=>'I contributed to smooth operation of the store including assisting customers with better understanding products and what would fit their needs. Independently managed a small team on the floor and assisted many times with pharmacy.',
				'jobTechnology'=>['AS400','Hand held Scanner','Point of Sale system','Walgreen Photo Kiosks']
			]
		],
		'educationHistory'=>[
			[
				'degreeName'=>'Applied Software Engineering BSc',
				'degreeSchool'=>'Northern Kentucky University',
				'degreeDates'=>'2022 - Current',
			],
			[
				'degreeName'=>'Programming ASc',
				'degreeSchool'=>'Cincinnati State Technical College',
				'degreeDates'=>'2017-2020',
			]
		],
		'skills'=>['C#','SQL','JavaScript','Node.js','HTML/CSS','Java'],
		'others'=>['Git','Visual Studio','Visual Studio Code','XAMPP','MongoDB','Python','Eclipse','Microsoft SQL Server','PuTTY']
	],
	// Group Member 2: Jacob Nelson
	[
		'personName' => 'Jacob Nelson',
		'wantedTitle' => 'Software Developer',
		'email' => 'nelsonj18@nku.edu',
		'phoneNumber' => '123456789',
		'github' => 'https://github.com/randomusername01',
		'linkedIn' => 'https://www.linkedin.com/in/jacobnelson367/',
		'website' => 'JacobWebsite',
		'summary' => 'JacobSummary',
		'profilePicture' => 'JacobProfilePic.png',
		'languages' => ['English', 'Japanese'],
		'hobbies' => ['Reverse Engineering', '3D Printing', 'Video Games', 'Carpentry'],
		'jobHistory' => [
			[
				'jobTitle' => 'merchandising execution team',
				'jobCompany' => 'Home Depot',
				'jobStart' => 'Oct 2021',
				'jobEnd' => 'Present',
				'jobSummary' => 'Executing projects throughout the store, and driving heavy equipment.',
			],
		],
		'educationHistory' => [
			[
				'degree' => 'Applied Software Engineering',
				'school' => 'Northern Kentucky University',
				'graduationDate' => '2024'
			],
		],
		'myProjects' => [
			[
				'projectName' => 'ClassicMS',
				'projectDescription' => 'Reverse engineered classic maplestory from 2007',
				'projectLink' => 'classicms.net',
			],
			// ... Additional projects for Jacob
		],
		'skills' => [
			'PHP',
			'Reverse Engineering',
			'C'
		],
		'others' => [
			'Ghidra',
			'IDA',
			'NeoVim'
		],
	],

// Group Member 3: Eric Jackman
	[
		'personName' => 'Eric',
		'wantedTitle' => 'Software Engineer',
		'email' => 'jackmane1@nku.edu',
		'phoneNumber' => '(859) 630 - 1249',
		'github' => 'github.com/ericjjackman',
		'linkedIn' => 'linkedin.com/in/eric-jackman-7b25a3260',
		'website' => 'ericjjackman@gmail.com',
		'summary' => 'I am a motivated computer science student looking to gain hands-on experience developing software. I am pursuing a bachelor\'s degree in computer science with a minor in data science. I have experience with mobile app development, including IOS, Android, and cross platform apps.',
		'profilePicture' => 'eric_profile.jpg',
		'languages' => ['English'],
		'hobbies' => ['Esports/Gaming', 'Music Production', 'Weight Lifting'],
		'jobHistory' => [
			[
				'jobTitle' => 'Mobile Software Engineering Intern',
				'jobCompany' => 'Divisions Maintenance Group',
				'jobStart' => 'May 2023',
				'jobEnd' => 'August 2023',
				'jobSummary' => 'I worked on the mobile development team for the DMG Pro mobile app. I gained experience writing cross platform apps using React Native, Typescript, and Redux. Additionally, I gained experience writing native mobile apps using both Kotlin and Swift.',
				'jobAchievements' => 'I singlehandedly designed and started development on the DMG Pro App Clip, which is build to be lightweight, have a simple UI, and increase downloads for the full app',
				'jobTechUsed' => ['React', 'React Native', 'Swift', 'Kotlin', 'Typescript', 'Redux'],
			],
			[
				'jobTitle' => 'Student Researcher',
				'jobCompany' => 'Northern Kentucky University',
				'jobStart' => 'January 2021',
				'jobEnd' => 'May 2021',
				'jobSummary' => 'I collaborated with students and professors on the Know Rivalry Project. I worked to design the Neo4j database, and worked to move the data there from an excel sheet. I grained experience writing Python scripts and wokring with no-SQL databases.',
				'jobAchievements' => 'Cleaned over 10,000 survey responses using Python and helped to improve the design of the database in Neo4j.',
				'jobTechUsed' => ['Python', 'MySQL', 'Neo4j'],
			],
		],
		'educationHistory' => [
			[
				'degree' => 'Computer Science',
				'school' => 'Northern Kentucky University',
				'graduationDate' => 'December 2023'
			],
		],
		'myProjects' => [
			[
				'projectName' => 'Hospital Admin App',
				'projectDescription' => 'Created a demo of a console-based hospital administration app using C++.',
				'projectLink' => 'https://github.com/ericjackman/Hospital-Administration-Console-App',
				'projectImage' => 'eric_project1.png',
			],
			[
				'projectName' => 'Fidelity Data Visualization',
				'projectDescription' => 'Used Python to mine data and create a web app to visualize the conclusions.',
				'projectLink' => '',
				'projectImage' => 'eric_project2.jpg',
			],
		],
		'skills' => [
			'React',
			'Typescript',
			'Python',
			'Swift',
			'Kotlin',
		],
		'others' => [
			'Git',
			'Unit Testing',
			'Leadership',
			'Teamwork',
			'Problem Solving',
		],
		'awards' => [
			[
				'awardName' => 'Deans\' List',
				'awardDescription' => 'Achieved a GPA of 3.5+ in every semester.',
			],
			[
				'awardName' => 'Captain of Esports Team',
				'awardDescription' => 'Given leadership role in NKU\'s varsity esports program.',
			],
		],
	]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our amazing team</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Index of team members' resume profiles.">
	<meta name="author" content="Jacob Nelson, Eric Jackman, and Pam Pepper">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php foreach ($groupMembers as $i=>$member): 
			// calls the displayMember function from functions.php, passes in $i and $groupMembers
				echo displayMember($groupMembers,$i);
			endforeach; ?>
		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by
			<?= $groupMembers[0]['personName'] . ', ' . $groupMembers[1]['personName'] . ', and ' . $groupMembers[2]['personName'] ?>
		</small>
	</footer>



</body>

</html>