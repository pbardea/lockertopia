 <?php  if ($_SESSION['loggedin'] != "@loggedout" and isset($_SESSION['loggedin'])){
				  echo '
              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
			  
              <li class="dropdown">
				<a href="account.php" class="dropdown-toggle" data-toggle="dropdown"><img src="images/notify.png" /><b class="caret"></b></a>
					<ul class="dropdown-menu">';
						$allAnoun = "";
						$allHW = "";
						$allProj = "";
						$anoun = array();
						$HW = array();
						$proj = array();
						
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
										array_push($anoun,'<li><a>'.$groupName.': '.$userData['announcement'].'</a></li>');
										array_push($HW,'<li><a>'.$groupName.': '.$userData['homework'].'</a></li>');
										array_push($proj,'<li><a>'.$groupName.': '.$userData['project'].'</a></li>');
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
										array_push($anoun,'<li><a>'.$groupName.': '.$userData['announcement'].'</a></li>');
										array_push($HW,'<li><a>'.$groupName.': '.$userData['homework'].'</a></li>');
										array_push($proj,'<li><a>'.$groupName.': '.$userData['project'].'</a></li>');
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
										array_push($anoun,'<li><a>'.$groupName.': '.$userData['announcement'].'</a></li>');
										array_push($HW,'<li><a>'.$groupName.': '.$userData['homework'].'</a></li>');
										array_push($proj,'<li><a>'.$groupName.': '.$userData['project'].'</a></li>');
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
										array_push($anoun,'<li><a>'.$groupName.': '.$userData['announcement'].'</a></li>');
										array_push($HW,'<li><a>'.$groupName.': '.$userData['homework'].'</a></li>');
										array_push($proj,'<li><a>'.$groupName.': '.$userData['project'].'</a></li>');
									}
									$allAnoun .= $userData['announcement'];
									$allHW .= $userData['homework'];
									$allProj .= $userData['project'];									
								}
							}
							
							
						}
						if (!$allAnoun){
							array_push($anoun, "<li><a>Nothing here</a></li>");
						}
						if (!$allHW){
							array_push($HW, "<li><a>Nothing here</a></li>");
						}
						if (!$allProj){
							array_push($proj, "<li><a>Nothing here</a></li>");
						}
						
						echo '<li class="nav-header"><b>Announcements</b></li>';
						foreach ($anoun as &$anouncement)
    						echo $anouncement;
						echo '<li class="divider"></li><li class="nav-header"><b>Homework</b></li>';
						foreach ($HW as &$homework)
    						echo $homework;
						echo '<li class="divider"></li><li class="nav-header"><b>Projects</b></li>';
						foreach ($proj as &$project)
    						echo $project;

						
            closeConnect();
						
						
					echo '</ul>
				</li>
				';
				}?>
