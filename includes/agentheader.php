<?php
$servername = "localhost";
$dbname = "clientrdtmarkets_coin";
$username = "clientrdtmarkets_coin";
$password = "clientrdtmarkets_coin";
$conn = new mysqli($servername, $username, $password, $dbname);

$userId = $_SESSION['userId'];
$queryUser = mysqli_query($conn, "select * from users where id='" . $userId . "'");
$user = mysqli_fetch_array($queryUser);

$firstName = $user['firstName'];
$lastName = $user['lastName'];
$userName = $firstName . '&nbsp;' . $lastName;
$profileName = strtoupper(substr($firstName, 0, 1)) . strtoupper(substr($lastName, 0, 1));

$messages = [];
$queryMessages = "SELECT messages.*, users.email, users.firstName, users.lastName, users.profilePath 
    from messages left join users on messages.senderUserId = users.id 
    WHERE isDraft=0 and isDeleteReceiver=0 and messages.receiverUserId = " . $userId . 
    " ORDER BY messageDate desc limit 4";
$result = $conn->query($queryMessages);

$queryLastLogin = "SELECT * from loginhistory WHERE userId='$userId' order by id DESC LIMIT 1,1";
$resultLastLogin = mysqli_query($conn,$queryLastLogin);
$rowLastLogin = mysqli_fetch_assoc($resultLastLogin);

if ($result->num_rows) {
    while ($row = $result->fetch_assoc()) {
        $row['messageDate'] = date('j M Y H:i:s', strtotime($row['messageDate']));
        if ($row['profilePath'] == '') {
            $row['hasPhoto'] = 0;
            $row['userPhoto'] = strtoupper(substr($row['firstName'], 0, 1)) . strtoupper(substr($row['lastName'], 0, 1));
        } else {
            $row['hasPhoto'] = 1;
            $row['userPhoto'] = $row['profilePath'];
        }
        array_push($messages, ((object) $row));
    }
}

$queryNewMessage = mysqli_query($conn, "SELECT count(id) as newCount from messages where receiverUserId = $userId and isNew = 1 and isDraft=0");
$newMessage = mysqli_fetch_array($queryNewMessage)['newCount'];
?>

<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="./index.html" class="logo-link">
                    <img class="logo-light logo-img" src="./assets/images/logouserdash.png" srcset="./assets/images/logouserdash.png" alt="logo">
                    <img class="logo-dark logo-img" src="./assets/images/logouserdash.png" srcset="./assets/images/logouserdash.png" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-tools" style="padding: 10px 0">
                <ul class="nk-quick-nav">
                    <?php
                    if ($rowLastLogin['loginDate']!='' && $user['isSaveLoginHistory']==1){
                    ?>
                        <li><p><strong>Last Login: </strong><?php echo($rowLastLogin['loginDate']); ?></p></li>
                    <?php
                    }
                    ?>
                    <li class="dropdown chats-dropdown hide-mb-xs">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown" style="font-size: 2rem">
                            <div class="icon-status <?php if ($newMessage > 0) echo ('icon-status-info'); else echo ('icon-status-na');?>">
                                <em class="icon ni ni-emails"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Email</span>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <?php foreach($messages as $key => $row) {?>
                                    <li class="chat-item">
                                        <a class="chat-link" href="/messages">
                                            <div class="chat-media user-avatar">
                                                <?php 
                                                if ($row->hasPhoto == 1) {
                                                    echo ("<img src=". $row->userPhoto. ">");
                                                } else {
                                                    echo ("<span>". $row->userPhoto ."</span>");
                                                }
                                                ?>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name"><?php echo ($row->department);?></div>
                                                    <span class="time"><?php echo $row->messageDate?></span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text"><?php echo $row->title?></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="/messages">View All</a>
                            </div>
                        </div>
                    </li>
                   <!--<li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown" style="font-size: 2rem">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li> -->
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="chat-media user-avatar md">
                                    <?php 
                                    if ($user['profilePath'] == '') {
                                        echo ("<span>". $profileName ."</span>");
                                    } else {
                                        echo ("<img src=". $user['profilePath']. ">");
                                    }
                                    ?>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <?php if($user['kyc_aml_approve']=='yes'){?>
                                    <div class="user-status user-status-verified" style="font-size: 16px;">Verified</div>
                                    <?php } else {?>
                                    <div class="user-status user-status-unverified" style="font-size: 16px">Unverified</div>
                                    <?php }?>
                                    <div class="user-name dropdown-indicator" style="font-size: 18px"><?php echo $userName?></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="chat-media user-avatar">
                                        <?php 
                                        if ($user['profilePath'] == '') {
                                            echo ("<span>". $profileName ."</span>");
                                        } else {
                                            echo ("<img src=". $user['profilePath']. ">");
                                        }
                                        ?>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?php echo $userName?></span>
                                        <span class="sub-text"><?php echo $user['email']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="/logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>