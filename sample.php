<?php
require_once('DBconnect.php');

			$school_id = '1';

			$section_id = '39';


			$select_pk = "	SELECT * FROM section 
							WHERE school_id = '$school_id' 
							AND section_id = '$section_id'  ";

			$query = mysql_query($select_pk) or die (mysql_error());



			
			while ($row = mysql_fetch_array($query)) {

						$public_key = $row['public_key'];
								
							}

							

						if ($public_key) {

							
				    $leng_public_key = strlen($public_key);
				    $priv_key_extract = "";
				    $array_pki = array();



				    for ($i=0; $i <=$leng_public_key-1 ; $i++) {
				        array_push($array_pki,$public_key[$i]);
				    }
				    foreach ($array_pki as $key  => $value) {
				        //Changed condition below $key % 2 ==0 => replaced with $key % 2 == 1
				        if($key % 2 == 1) {
				            // Changed concatenation operator , += replaced with .=
				            $priv_key_extract .= $public_key[$key];
				        } /*else {
				            //Commented this as it is getting overwritten
				            $priv_key_extract ="haiiizzz";
				        }*/
				    }
				}
				echo $priv_key_extract;


				
						

?>