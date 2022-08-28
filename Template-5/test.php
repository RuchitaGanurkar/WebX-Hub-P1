
<html>
<head>
    <title>Student Registration Form Using Table in HTML</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<body>
  <form action="connect.php" method="post">
    <h2>Student Registration Form Using Table in HTML</h2>
        <table align="center">
            <!--------------------- First Name ------------------------------------------>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" maxlength="50" placeholder="Ghanendra" />
                    (Max 50 Characters Allowed)
                </td>
            </tr>
            <!------------------------ Last Name --------------------------------------->
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" maxlength="50" placeholder="Yadav" />
                    (Max 50 Characters Allowed)
                </td>
            </tr>
            <!-------------------------- Email ID ------------------------------------->
            <tr>
                <td>Email ID</td>
                <td><input type="email" name="email" maxlength="100" placeholder="yghanendra@gmail.com" /></td>
            </tr>
            <!-------------------------- Mobile Number ------------------------------------->
            <tr>
                <td>Mobile Number</td>
                <td>
                    <input type="text" name="number" maxlength="10" placeholder="7842xxxxxx" />
                    (10 Digits Allowed)
                </td>
            </tr>
            <!---------------------- Gender ------------------------------------->
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male" />
                    Male
                    <input type="radio" name="gender" value="Female" />
                    Female
                </td>
            </tr>
            <!--------------------------Date Of Birth----------------------------------->
            <tr>
                <td>Date of Birth(DOB)</td>
                <td>
                    <select name="BirthDay" id="dob">
                        <option value="-1">Day:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="BirthdayMonth" id="dob">
                        <option value="-1">Month:</option>
                        <option value="January">Jan(1)</option>
                        <option value="February">Feb(2)</option>
                        <option value="March">Mar(3)</option>
                        <option value="April">Apr(4)</option>
                        <option value="May">May(5)</option>
                        <option value="June">Jun(6)</option>
                        <option value="July">Jul(7)</option>
                        <option value="August">Aug(8)</option>
                        <option value="September">Sep(9)</option>
                        <option value="October">Oct(10)</option>
                        <option value="November">Nov(11)</option>
                        <option value="December">Dec(12)</option>
                    </select>
                    <select name="BirthdayYear" id="dob">
                        <option value="-1">Year:</option>
                        <option value="2019">2022</option>
                        <option value="2019">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </select>
                </td>
            </tr>
            <!------------------------- Address ---------------------------------->
            <tr>
                <td>Address<br /><br /><br /></td>
                <td><textarea name="address" rows="10" cols="50"></textarea></td>
            </tr>
            <!-------------------------- City ------------------------------------->
            <tr>
                <td>City</td>
                <td><input type="text" name="city" maxlength="50" placeholder="Bangalore" />
                    (Max 50 Characters Allowed)
                </td>
            </tr>
            <!----- -------------------- Pin Code-------------------------------------->
            <tr>
                <td>Pin Code</td>
                <td><input type="Number" name="pin" maxlength="6" placeholder="560068" />
                    (Max 6 Numbers Allowed)
                </td>
            </tr>
            <!---------------------------- State ----------------------------------->
            <tr>
                <td>State</td>
                <td><input type="text" name="state" maxlength="50" placeholder="Karnataka" />
                    (Max 50 Characters Allowed)
                </td>
            </tr>
            <!------------------------------ Country --------------------------------->
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" placeholder="India" /></td>
            </tr>
            <!------------------------- Hobbies -------------------------------------->
            <tr>
                <td>Hobbies <br /><br /><br /></td>
                <td>
                    <input type="checkbox" name="Drawing" value="Drawing" />
                    Drawing
                    <input type="checkbox" name="Singing" value="Singing" />
                    Singing
                    <input type="checkbox" name="Dancing" value="Dancing" />
                    Dancing
                    <input type="checkbox" name="Cooking" value="Cooking" />
                    Sketching
                    <br />
                    <input type="checkbox" name="Other" value="Other">
                    Others
                    <input type="text" name="Other" maxlength="50" placeholder="Ex- Teaching" />
                    (Max 50 Characters Allowed)
                </td>
            </tr>
            <!-----------------------Qualification---------------------------------------->
            <tr>
                <td>Qualification <br /><br /><br /></td>
                <td>
                    <br />
                    <input type="checkbox" name="High School(10th)" value="High School" />
                    High School(10th)<br>
                    <input type="checkbox" name="Higher School(12th)" value="Higher School" />
                    Higher School(12th)<br />
                    <input type="checkbox" name=" Graduation(Bachelors)" value="Graduation" />
                    Graduation(Bachelors)<br />
                    <input type="checkbox" name="Post Graduation(Masters)" value="Post Graduation" />
                    Post Graduation(Masters)<br />
                    <input type="checkbox" name="Phd" value="Phd">
                    Phd
                </td>
            </tr>
            <!---------------------------- Courses ----------------------------------->
            <tr>
                <td>Courses<br />Applied For</td>
                <td>
                    <input type="radio" name="BCA" value="BCA">
                    BCA(Bachelor of Computer Applications)<br>
                    <input type="radio" name="B.Com" value="B.Com">
                    B.Com(Bachelor of Commerce)<br>
                    <input type="radio" name="B.Sc" value="B.Sc">
                    B.Sc(Bachelor of Science)<br>
                    <input type="radio" name="BA" value="B.A">
                    BA(Bachelor of Arts)<br>
                    <input type="radio" name="MCA" value="BCA">
                    MCA(Master of Computer Applications)<br>
                    <input type="radio" name="M.Com" value="B.Com">
                    M.Com(Master of Commerce)<br>
                    <input type="radio" name="M.Sc" value="B.Sc">
                    M.Sc(Master of Science)<br>
                    <input type="radio" name="MA" value="M.A">
                    MA(Master of Arts)<br>
                </td>
            </tr>
            <!----------------------- Submit and Reset ------------------------------->
          
            <tr>
        
            <td colspan="2" align="center">
                    <input class="textbox" type="submit" value="Submit">
        
                    <input class="textbox" type="reset" value="Reset">
                </td>
          
            </tr>
           
        </table>
        </form>

       <?php
            require ('connect.php');
            
            if (isset($_REQUEST['fname'])) {
                // removes backslashes
                $First_Name = stripslashes($_REQUEST['fname']);
                //escapes special characters in a string
                $fname = mysqli_real_escape_string($con, $fname);
                $lname    = stripslashes($_REQUEST['lname']);
                $lname = mysqli_real_escape_string($con, $lname);
                $email    = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con, $email);
                $number    = stripslashes($_REQUEST['number']);
                $number = mysqli_real_escape_string($con, $number);
                $gender    = stripslashes($_REQUEST['gender']);
                $gender = mysqli_real_escape_string($con, $gender);
                // ---------------------------------------------


                $BirthDay    = stripslashes($_REQUEST['BirthDay']);
                $BirthDay    = mysqli_real_escape_string($con, $BirthDay);
                $BirthdayMonth    = stripslashes($_REQUEST['BirthdayMonth']);
                $BirthdayMonth    = mysqli_real_escape_string($con, $BirthdayMonth);
                $BirthdayYear    = stripslashes($_REQUEST['BirthdayYear']);
                $BirthdayYear    = mysqli_real_escape_string($con, $BirthdayYear);

                $dob = $BirthDay."-".$BirthdayMonth."-".$BirthdayYear;

                //----------------------------------------------------------------------------------



                $address = stripslashes($_REQUEST['address']);
                $address = mysqli_real_escape_string($con, $address);
                
                $city = stripslashes($_REQUEST['city']);
                $city = mysqli_real_escape_string($con, $city);

                $pin = stripslashes($_REQUEST['pin']);
                $pin = mysqli_real_escape_string($con, $pin);

                $state = stripslashes($_REQUEST['state']);
                $state = mysqli_real_escape_string($con, $state);

                $country = stripslashes($_REQUEST['country']);
                $country = mysqli_real_escape_string($con, $country);

                //-------------------------------------------------------------------------------

                $Drawing    = stripslashes($_REQUEST['Drawing']);
                $Singing    = mysqli_real_escape_string($con, $Singing);
                $Dancing    = stripslashes($_REQUEST['Dancing']);
                $Sketching    = stripslashes($_REQUEST['Sketching']);
                $Other   = stripslashes($_REQUEST['Other']);
                

                $hobby = $Drawing."-".$Singing."-".$Dancing."-".$Sketching."-".$Other;


                //-------------------------------------------------------------------------------

                $High School(10th)    = stripslashes($_REQUEST['High School(10th)']);
                $Higher School(12th)  = mysqli_real_escape_string($con, $Higher School(12th));
                $Graduation(Bachelors)    = stripslashes($_REQUEST['Graduation(Bachelors)']);
                $Post Graduation(Masters)    = stripslashes($_REQUEST['Post Graduation(Masters)']);
                $Phd            = stripslashes($_REQUEST['Phd']);
                

                $qualification = $High School(10th)."-".$Higher School(12th)."-".$Graduation(Bachelors)."-".$Post Graduation(Masters)."-".$Phd;

                 //-------------------------------------------------------------------------------

                 $BCA    = stripslashes($_REQUEST['BCA']);
                 $B.Com    = stripslashes($_REQUEST['B.Com']);
                 $B.Sc    = stripslashes($_REQUEST['B.Sc']);
                 $BA    = stripslashes($_REQUEST['BA']);
                 $MCA    = stripslashes($_REQUEST['MCA']);
                 $M.Com    = stripslashes($_REQUEST['M.Com']);
                 $M.Sc    = stripslashes($_REQUEST['M.Sc']);
                 $MA    = stripslashes($_REQUEST['MA']);
                 
 
                 $course = $BCA."-".$B.Com."-".$B.Sc."-".$BA."-".$MCA."-".$M.Com."-".$M.Sc."-".$MA;


                  //-------------------------------------------------------------------------------

                $create_datetime = date("Y-m-d H:i:s");
                $query    = "INSERT into prof (id,fname,lname,gender,email,number,address,country,city,state,pin,course,hobbies,dob,qualification) values(id,$fname,$lname,$gender,$email,$number,$address,$country,$city,$state,$pin,$course,$hobbies,$dob,$qualification)";
                $result   = mysqli_query($con, $query);
                if ($result) {
       
                } else {

                }
            }            
            
            ?>
 

</body>

</html>

