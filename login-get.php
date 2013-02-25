<?php 
session_start();

include_once('DBconnect.php'); 

$username = $_POST['username'];
$password = $_POST['password'];

$hash_password = sha1($password);

  $query= "SELECT b.account_type_id,
                  a.school_password,
                   a.school_username,
                   a.school_id,
                   a.school_admin_id
           FROM school_admin a

           LEFT JOIN account_classification b ON (a.account_type_id = b.account_type_id)

           WHERE a.school_username='$username' AND a.school_password ='$hash_password' ";

          $result = mysql_query($query);
               if(@!$result){
                die('error header'.mysql_error());
              }

           $count =  mysql_num_rows($result);

             $accnt_type = ""; /* this will avoid JSON.parse problem for being undefined character*/

            while($row = mysql_fetch_array($result)){

             $accnt_type = $row['account_type_id'];
             $school_id = $row['school_id'];
              $user_id_regis = $row['school_admin_id'];

            }

       
         
        


           if($count != "1"){

                $query2= "SELECT b.account_type_id,
                                a.password,
                                a.username,
                                a.school_id,
                                a.faculty_id
                         FROM school_faculty a
                         LEFT JOIN account_classification b ON (a.account_type_id = b.account_type_id)
                         LEFT JOIN status_availability c ON (a.status_id = c.status_id)

                         WHERE a.username='$username'  AND a.password ='$hash_password' AND c.status = 'Active' ";

                          $result2 = mysql_query($query2);
                               if(@!$result2){
                                die('error header'.mysql_error());
                              }

                           $count2 =  mysql_num_rows($result2);

                             $accnt_type2= ""; /* this will avoid JSON.parse problem for being undefined character*/

                            while($row = mysql_fetch_array($result2)){

                             $accnt_type2 = $row['account_type_id'];
                             $school_id = $row['school_id'];
                             $user_id_fac = $row['faculty_id'];

                            }

                           

                            

                             if($count2 != "1"){

                                     $query3= "SELECT b.account_type_id,
                                                      a.deped_password,
                                                      a.deped_username,
                                                      a.deped_id,
                                                      a.school_id
                                     FROM deped_accounts a
                                     LEFT JOIN account_classification b ON (a.account_type_id = b.account_type_id)

                                     WHERE a.deped_username='$username' AND a.deped_password ='$hash_password' ";

                                      $result3 = mysql_query($query3);
                                           if(@!$result3){
                                            die('error header'.mysql_error());
                                          }

                                       $count3 =  mysql_num_rows($result3);

                                         $accnt_type3= ""; /* this will avoid JSON.parse problem for being undefined character*/

                                        while($row = mysql_fetch_array($result3)){

                                         $accnt_type3 = $row['account_type_id'];
                                 
                                         $school_id = $row['school_id'];

                                         $deped_account_id = $row['deped_id'];
                                        }



                                        if($count3 != "1"){
                                            $return['error'] =true;

                                        }

                                        else{

                                          $_SESSION['accnt_typ_admin'] = $accnt_type3 ;
                                          $_SESSION['school_id'] = $school_id;
                                          $_SESSION['deped_account_id'] = $deped_account_id;

                                          $return['error'] = false;
                                          $return['deped']=true;
                                        }


                                        
                             }

                             else{
                                 $_SESSION['accnt_typ_fac'] = $accnt_type2 ;
                                 $_SESSION['school_id'] = $school_id;
                                 $_SESSION['user_id_fac'] = $user_id_fac;
                                $return['error'] = false;
                                $return['teacher']=true;  

                             }     

                
                      }


                    else{

                        $_SESSION['accnt_typ'] = $accnt_type ;
                        $_SESSION['school_id'] = $school_id;
                         $_SESSION['user_id_regis'] = $user_id_regis;
                        $return['error'] = false;
                        $return['registrar']=true;
                        
                    }

           
            
echo json_encode($return);
  
?>