<?php
$rootDir = "../../";
require_once "$rootDir/appBase.php";
$userMgt->checkIfUserIsLoggedIn();

$projectType = htmlentities($_POST['project_type'], ENT_QUOTES);
$projectCustomer = htmlentities($_POST['settings_customer'], ENT_QUOTES);
$projectPicture = file_get_contents($_FILES['settings_picture']['tmp_name']);
$projectName = htmlentities($_POST['settings_name'], ENT_QUOTES);
$projectDescription = htmlentities($_POST['settings_description'], ENT_QUOTES);
$projectReleaseDate = htmlentities($_POST['settings_release_date'], ENT_QUOTES);
$targetTitle = htmlentities($_POST['target_title'], ENT_QUOTES);
$targetDueDate = htmlentities($_POST['target_due_date'], ENT_QUOTES);
$targetDetails = htmlentities($_POST['target_details'], ENT_QUOTES);
$targetTags = htmlentities($_POST['target_tags'], ENT_QUOTES);

switch ($projectType) {
    case 1:
        $projectType = "Personal";
        break;
    case 2:
        $projectType = "Team";
        break;
}

$newProjectID = $projectMgt->createNewProject($projectCustomer, $projectPicture, $projectName, $projectDescription, $projectReleaseDate);

if ($projectMgt->assignUserToProject($newProjectID, $username, 'Owner')) {
    header("Location: {$webBaseURL}/home/projects");
    exit();
}
