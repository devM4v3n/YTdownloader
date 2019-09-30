<?php
	session_start();
?>
<?php
	if (isset($_POST['url'])) {
		$flag = 1;
		$url = $_POST['url'];
		$cmd = 'youtube-dl -F ' . escapeshellarg($url);
		exec($cmd, $output, $ret);
		if($ret == 0){
			$pattern = preg_split("/=/", $url);
			if(isset($pattern[1])) {
				$filename = $pattern[1].".mp4";
			}
			$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');
			$fp = fopen("log.txt", 'a');
			$data = date("H:i:s d/m/Y")." ".$filename." ".$ip."\n\r";
			fwrite($fp, $data);
			fclose($fp);
			if(isset($output[2])) {
				$cmd = "youtube-dl -f best -o $filename " . escapeshellarg($url) . "ffmpeg";
				exec($cmd, $res, $ret);			
				if($ret == 0){
					$flag = 0;
				}	
			}
			if($flag == 1) {
				echo "<div class='w3-container w3-yellow'>";
				echo "<p class='w3-xlarge'>Sorry!</p>";
				echo "<p>The video is not available.</p>";
				echo "</div>";
			}	
			else {
				echo "<div class='w3-panel w3-green'>";
				echo "<p class='w3-xlarge'>Success!</p>";
				echo "<p>The video is successfully saved.</p>";
				echo "</div>";
				$_SESSION["fname"] = $filename;
				echo "<a href='download.php'  style='text-decoration: none;' class='w3-hover-text-pink w3-text-blue'>Click here to start downloading</a>";
			}
		}
		else {
			echo "<div class='w3-container w3-yellow'>";
			echo "<p class='w3-xlarge'>Sorry!</p>";
			echo "<p>The url provided is not supported.</p>";
			echo "</div>";
		}	
	}
?>