<?php
                        
                        $allAnoun = "";
						$allHW = "";
						$allProj = "";
						$anoun = array();
						$HW = array();
						$proj = array();
						
            include "studfunctions.php";
            openConnect();
						$groupNameRow = mysql_query("SELECT * FROM master_group WHERE username = '".$_SESSION['loggedin']."';") 
						or die(mysql_error()); 
						while($groupNameArray = mysql_fetch_array( $groupNameRow )) { 
							$groupName = $groupNameArray['group_name'];
							$groupType = $groupNameArray['group_type'];
							
							if($groupType = "class"){
								$userRow = mysql_query("SELECT * FROM class WHERE username = '".$_SESSION['loggedin']."' and class_name = '".$groupName."'") 
								or die(mysql_error()); 
								while($userData = mysql_fetch_array( $userRow )) { 
									if ($userData['announcement']){
										array_push($anoun,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['announcement'].'</div>');
									}
									if ($userData['homework']){
										array_push($HW,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['homework'].'</div>');
									}
									if ($userData['project']){
										array_push($proj,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['project'].'</div>');
									}

									$allAnoun .= $userData['announcement'];
									$allHW .= $userData['homework'];
									$allProj .= $userData['project'];
									
								}
							}
							
							
							if($groupType = "club"){
								$userRow = mysql_query("SELECT * FROM club WHERE username = '".$_SESSION['loggedin']."' and club_name = '".$groupName."'") 
								or die(mysql_error()); 
								while($userData = mysql_fetch_array( $userRow )) { 
									if ($userData['announcement']){
										array_push($anoun,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['announcement'].'</div>');
									}
									if ($userData['homework']){
										array_push($HW,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['homework'].'</div>');
									}
									if ($userData['project']){
										array_push($proj,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['project'].'</div>');
									}

									$allAnoun .= $userData['announcement'];
									$allHW .= $userData['homework'];
									$allProj .= $userData['project'];									
								}
							}
							if($groupType = "sport"){
								$userRow = mysql_query("SELECT * FROM sport WHERE username = '".$_SESSION['loggedin']."' and sport_name = '".$groupName."'") 
								or die(mysql_error()); 
								while($userData = mysql_fetch_array( $userRow )) { 
									if ($userData['announcement']){
										array_push($anoun,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['announcement'].'</div>');
									}
									if ($userData['homework']){
										array_push($HW,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['homework'].'</div>');
									}
									if ($userData['project']){
										array_push($proj,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['project'].'</div>');
									}
									$allAnoun .= $userData['announcement'];
									$allHW .= $userData['homework'];
									$allProj .= $userData['project'];									
								}
							}
							if($groupType = "study"){
								$userRow = mysql_query("SELECT * FROM study WHERE username = '".$_SESSION['loggedin']."' and study_name = '".$groupName."'") 
								or die(mysql_error()); 
								while($userData = mysql_fetch_array( $userRow )) { 
									if ($userData['announcement']){
										array_push($anoun,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['announcement'].'</div>');
									}
									if ($userData['homework']){
										array_push($HW,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['homework'].'</div>');
									}
									if ($userData['project']){
										array_push($proj,'<div class="lead"> <b>'.$groupName.'</b>: '.$userData['project'].'</div>');
									}
									$allAnoun .= $userData['announcement'];
									$allHW .= $userData['homework'];
									$allProj .= $userData['project'];									
								}
							}
							
							
						}
						if (!$allAnoun){
							array_push($anoun, "<div class='lead'> Nothing here</div>");
						}
						if (!$allHW){
							array_push($HW, "<div class='lead'>Nothing here</div>");
						}
						if (!$allProj){
							array_push($proj, "<div class='lead'>Nothing here</div>");
						}
					
					
					
						echo '    <h1>Announcements</h1>';
						foreach ($anoun as &$anouncement)
    						echo $anouncement;
						echo '</div>';
						echo '<div class="row"> <div class="span6"> <h2>Homework</h2>';
						foreach ($HW as &$homework)
    						echo $homework;
						echo '</div>';
						echo '<div class="row"> <div class="span6"> <h2>Projects</h2>';
						foreach ($proj as &$project)
    						echo $project;
						echo '</div></div>';
						

?>
