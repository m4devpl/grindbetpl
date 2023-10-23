<?php
require_once "config/config.php";

$currentURL = $_SERVER['REQUEST_URI'];
$dbConnection;
$username;
$firstName;
$lastName;
$pictureURL;
$emailAddress;
$themeMode;
$userMgt = new UserManagement();
$projectMgt = new ProjectManagement();
$headerMgt = new HeaderManagement();
$tradingMgt = new TradingManagement();

session_start();

if (isset($_SESSION['login_success']) && $_SESSION['login_success'] == true) {
    $username = $_SESSION['Username'];
    $firstName = $_SESSION['First Name'];
    $lastName = $_SESSION['First Name'];
    $pictureURL = "data:image/jpeg;base64," . base64_encode($_SESSION['Picture']);
    $emailAddress =  $_SESSION['Email Address'];
    $themeMode = $_SESSION['Theme Mode'];
}

function connectToDB()
{
    global $dbConnection, $dbHost, $dbName, $dbPass, $dbUser;
    if (!$dbConnection) $dbConnection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
}

function disconnectFromDB()
{
    global $dbConnection;
    if ($dbConnection) $dbConnection->close();
}

class ProjectManagement
{

    public function __construct()
    {
        connectToDB();
    }

    public function getNoOfMyProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT COUNT(*) FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID`");
        return $result->fetch_assoc()['COUNT(*)'];
    }

    public function getNoOfActiveProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT COUNT(*) FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'In Progress'");
        return $result->fetch_assoc()['COUNT(*)'];
    }

    public function getNoOfCompletedProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT COUNT(*) FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'Completed'");
        return $result->fetch_assoc()['COUNT(*)'];
    }

    public function getNoOfNotStartedProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT COUNT(*) FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'Not Started'");
        return $result->fetch_assoc()['COUNT(*)'];
    }

    public function getNoOfOpenUserTargets()
    {
        global $dbConnection, $username;
    
        $result = $dbConnection->query("SELECT COUNT(*) FROM project_target INNER JOIN project_target_assigned_user ON project_target_assigned_user.Username = '$username' AND project_target.`Project ID` = `project_target_assigned_user`.`Project ID` AND `project_target`.`Target ID` = `project_target_assigned_user`.`Target ID` AND (project_target.Status = 'Yet to Start' OR project_target.Status = 'In Progress');");
        return $result->fetch_assoc()['COUNT(*)'];
    }

    public function getMyProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT * FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID`");

        while ($row = $result->fetch_assoc()) {
            $projectID = $row['ID'];
            $name = $row['Name'];
            $shortDescription = $row['Short Description'];
            $status = $row['Status'];
            $pictureURL = "data:image/jpeg;base64," . base64_encode($row['Picture']);
            $releaseDate = $row['Release Date'];

            echo <<<END
                    <!--begin::Col-->
                    <div class="col-md-6 col-xl-4">
                        <!--begin::Card-->
                        <a href="//grindbet.pl/home/projects/project?project=$projectID"
                            class="card border-hover-primary">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-9">
                                <!--begin::Card Title-->
                                <div class="card-title m-0">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px w-50px bg-light">
                                        <img src="$pictureURL"
                                            alt="image" class="p-3" />
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::Car Title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <span class="badge fw-bold me-auto px-4 py-3 badge-light-info">
                                        $status
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end:: Card header-->
                            <!--begin:: Card body-->
                            <div class="card-body p-9">
                                <!--begin::Name-->
                                <div class="fs-3 fw-bold text-dark">$name</div>
                                <!--end::Name-->
                                <!--begin::Description-->
                                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                                    $shortDescription
                                </p>
                                <!--end::Description-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap mb-5">
                                    <!--begin::Due-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bold">$releaseDate</div>
                                        <div class="fw-semibold text-gray-400">Due Date</div>
                                    </div>
                                    <!--end::Due-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Progress-->
                                <div class="h-4px w-100 bg-light mb-5 d-none" data-bs-toggle="tooltip"
                                    title="This project 10% completed">
                                    <div class="bg-info rounded h-4px" role="progressbar"
                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover">
                END;
                    $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = $projectID");
                
                    while ($userRow = $userResult->fetch_assoc()) {
                        $userFullName = $userRow['First Name']." ".$userRow['Last Name'];
                        $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                        echo<<<END
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle"
                                data-bs-toggle="tooltip" title="$userFullName">
                                <img alt="Pic"
                                    src="$userPictureURL" />
                            </div>
                            <!--end::User-->
                        END;
                    }
                echo<<<END
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end:: Card body-->
                        </a>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                END;
        }
    }

    public function createNewProject($projectCustomer, $projectPicture, $projectName, $projectDescription, $projectReleaseDate) {
        global $dbConnection;

        $query = "INSERT INTO project(`Name`, `Customer Name`, `Short Description`, `Description`, `Picture`, `Release Date`, `Category`) VALUES ('$projectName', '$projectCustomer', '$projectDescription', '$projectDescription', ?, '$projectReleaseDate','');";
        $statement = $dbConnection->prepare($query);
        $statement->bind_param('s', $projectPicture);
        if ($statement->execute())
        {
            return $dbConnection->insert_id;
        } else return "";
    }

    public function assignUserToProject($projectID, $username, $type) {
        global $dbConnection;

        $query = "INSERT INTO project_assigned_user  VALUES ('$projectID', '$username', '$type');";
        if ($result = $dbConnection->query($query))
        {
            return true;
        } else false;
    }
}

class TradingManagement {
    public function addNewTradingPosition($date, $currencypair, $state, $rr, $profit, $note1, $note2, $note3, $note4) {
        global $dbConnection, $username;

        $query = "INSERT INTO investments_tradingplan VALUES (NULL, '$username', '$date', '$currencypair','$state','$rr', '$profit','$note1','$note2','$note3','$note4');";
        $statement = $dbConnection->prepare($query);
        if ($statement->execute())
        {
            return $dbConnection->insert_id;
        } else return "";
    }
}

class Project {
    public $id;
    public $name;
    public $status;
    public $shortDescription;
    public $description;
    public $releaseDate;
    public $projectPicture;
    public $projectStatus;

    public function __construct($projectID) {
        $this->getProject($projectID);
    }

    protected function getProject($projectID) {
        global $dbConnection, $username, $webBaseURL;
        
        // CHECK IF ASSIGNED PROJECT EXISTS
        $query = "SELECT * FROM project INNER JOIN project_assigned_user ON project_assigned_user.`Project ID` = '$projectID' AND project_assigned_user.Username = '$username' AND project.ID = '$projectID'";
        $result = $dbConnection->query($query);

        if ($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $this->id = $projectID;
            $this->name = $row['Name'];
            $this->status = $row['Status'];
            $this->shortDescription = $row['Short Description'];
            $this->description = $row['Description'];
            $this->releaseDate = $row['Release Date'];
            $this->projectPicture = "data:image/jpeg;base64," . base64_encode($row['Picture']);
        } else {
            header("Location: {$webBaseURL}/404/");
            exit();
        }
    }

    public function getNoOfAssignedUsers()
    {
        global $dbConnection;

        $result = $dbConnection->query("SELECT * FROM project_assigned_user WHERE `Project ID` = '$this->id'");
        return $result->num_rows;
    }

}

class ProjectTarget {
    public $targetID;
    public $projectID;
    public $title;
    public $description;
    public $status;
    public $category;
    public $dueDate;
    public $tags;

    public function __construct($projectID, $targetID) {
        $this->getProjectTarget($projectID, $targetID);
    }

    protected function getProjectTarget($projectID, $targetID) {
        global $dbConnection, $username, $webBaseURL;
        
        // CHECK IF ASSIGNED PROJECT TARGET EXISTS
        $query = "SELECT * FROM project_target INNER JOIN project_target_assigned_user ON project_target_assigned_user.`Project ID` = '$projectID' AND project_target_assigned_user.Username = '$username' AND project_target_assigned_user.`Target ID` = '$targetID' AND project_target.`Project ID` = '$projectID' AND project_target.`Target ID` = project_target_assigned_user.`Target ID`";
        $result = $dbConnection->query($query);

        if ($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $this->targetID = $targetID;
            $this->projectID = $projectID;
            $this->title = $row['Title'];
            $this->description = $row['Description'];
            $this->status = $row['Status'];
            $this->category = $row['Category'];
            $this->dueDate = $row['Due Date'];
            $this->tags = $row['Tags'];
        } else {
            header("Location: {$webBaseURL}/404/");
            exit();
        }
    }

}
class UserManagement
{

    public function __construct()
    {
        connectToDB();
        $this->refreshUserDetails();
    }

    public function login($email, $password)
    {
        global $dbConnection;
        $result = $dbConnection->query("SELECT * FROM user WHERE `Email Address`='$email'");

        if ($row = $result->fetch_assoc()) {
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['First Name'] = $row['First Name'];
            $_SESSION['Last Name'] = $row['Last Name'];
            $_SESSION['Picture'] = $row['Picture'];
            $_SESSION['Email Address'] = $row['Email Address'];
            $_SESSION['Theme Mode'] = $row['Theme Mode'];
            $_SESSION['login_success'] = true;
            return true;
        } else return false;
    }

    private function refreshUserDetails()
    {
        global $dbConnection;

        if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
            $username = $_SESSION['Username'];
            $result = $dbConnection->query("SELECT * FROM user WHERE Username='$username'");
            if ($row = $result->fetch_assoc()) {
                $_SESSION['Picture'] = $row['Picture'];
                $_SESSION['Email Address'] = $row['Email Address'];
                $_SESSION['Theme Mode'] = $row['Theme Mode'];
                $_SESSION['login_success'] = true;
            }
        }
    }

    function checkIfUserIsLoggedIn()
    {
        global $webBaseURL;

        if (!isset($_SESSION['login_success']) || !$_SESSION['login_success']) {
            header("Location: {$webBaseURL}/login/");
            exit();
        }
    }

    function redirectHomeIfLoggedIn()
    {
        global $webBaseURL;

        if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
            header("Location: {$webBaseURL}");
            exit();
        }
    }
}

class HeaderManagement
{
    private $homePaths = array("/");
    private $appsPaths = array("/home/projects/");
    private $calendarPaths = array("/home/calendar/");


    public function isHomeActive() {
        global $currentURL;
        if (in_array($currentURL, $this->homePaths)) {
            return "show here";
        } else return "";
    }
    public function isAppsActive() {
        global $currentURL;
        if (in_array($currentURL, $this->appsPaths)) {
            return "show here";
        } else return "";
    }
    public function isCalendarActive() {
        global $currentURL;
        if (in_array($currentURL, $this->calendarPaths)) {
            return "show here";
        } else return "";
    }

    public function isPathActive($pathToCheck) {
        global $currentURL;
        if ($pathToCheck == $currentURL) {
            return "active";
        } else return "";
    }
}
