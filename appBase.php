<?php
require_once "config/config.php";

$dbConnection;
$username;
$firstName;
$lastName;
$pictureURL;
$emailAddress;
$themeMode;
$userMgt = new UserManagement();
$projectMgt = new ProjectManagement;

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

        $result = $dbConnection->query("SELECT * FROM `project_assigned_user` WHERE `Username`='$username'");
        return $result->num_rows;
    }

    public function getNoOfActiveProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT * FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'In Progress'");
        return $result->num_rows;
    }

    public function getNoOfCompletedProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT * FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'Completed'");
        return $result->num_rows;
    }

    public function getNoOfNotStartedProjects()
    {
        global $dbConnection, $username;

        $result = $dbConnection->query("SELECT * FROM project INNER JOIN project_assigned_user ON project_assigned_user.Username = '$username' AND project.ID = project_assigned_user.`Project ID` AND project.Status = 'Not Started'");
        return $result->num_rows;
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
                        <a href="//grindbet.pl/home/projects/project?project=1"
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
