<?PHP include_once("lib/header.php"); ?>
   <p><strong> Welcome, please Register </strong></p>
   <p>All Fields are required</p>


        <form method="POST" action="processregister.php">
         
          <p>
             <label>First Name</label><br />
             <input type="text" name="First_name" placeholder="First Name" />
          </p>

          <p>
             <label>Last Name</label><br />
             <input type="text" name="Last_name" placeholder="Last Name" />
          </p>

          <p>
             <label>Email</label><br />
             <input type="text" name="Email" placeholder="Email" />
          </p>

          <p>
             <label>Gender</label><br />
             <select name="desgnation">
             <option>Male</option>     
             <option>Female</option>
             </select>
          </p>

          <p>
             <label>password</label><br />
             <input type="text" name="password" placeholder="password" />
          </p>

          <p>
             <label>Designation</label><br />
             <select name="desgnation">
             <option>Medical Team (MT)</option>     
             <option>Patients</option>
             </select>
          </p>

          <p>
             <label>Department</label><br />
             <input type="text" name="department" placeholder="department" />
          </p>

          <p>
             <button type="submit">Register</button>
          </p>
        </form> 



<?PHP include_once("lib/footer.php"); ?>     
     
 
       