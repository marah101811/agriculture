<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Application Form</title>
    <style>
       
    </style>
</head>
<body>
    <div class="form-container">
        <h2>ANI AT KITA<br>RSBSA ENROLLMENT FORM</h2>
        <br>
        <h4><b>Contact Information<b></h4>
        <form action="#" method="post">
        	
            <!-- Form fields here -->
         
            <label>Mobile Number:</label>
            <input type="text" id="mobile_num" name="mobile_num" required>
            <br>
            <label>Landline Number</label>
            <input type="text" id="landline_num" name="landline_num" required>
            <br>
            <label>Date of Birth</label>
            <input type="date" id="b_date" name="b-date" required>

            <label>Place of Birth</label>
            <input type="text" id="birth_place" name="birth_place" required>

            <label>Highest Formal Education</label>
            <select>
                <option>Pre-School</option>
                <option>Elementary</option>
                <option>High School non (non K-12)</option>
                <option>Junior School (K-12)</option>
                <option>Senior School (K-12)</option>
                <option>College</option>
                <option>Vocational</option>
                <option>Post-graduate</option>
                <option>None</option>
            </select>


            <label>Religion</label>
            <select>
                <option>Christianity</option>
                <option>Islam</option>
                <option>Other's, specify__________________.</option>
            </select>

            <label>Civil Status</label>
            <select>
                <option>Single</option>
                <option>Married</option>
                <option>Widowed</option>
                <option>Separated</option>
            </select>

            <label>Person With Disability (PWD)</label>
            <select>
                <option>Yes</option>
                <option>No</option>
            </select>

            <label>4P's  Beneficiary?</label>
                <select>
                    <option>Yes</option>
                    <option>No</option>
                </select>

            <label>Member of an <b>Indigenous Group?</b></label>
                <select>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            <label>If yes, specify</label>
            <input type="text" name="group"> 

            <label>NAME OF SPOUSE IF MARRIED</label>
            <input type="text" name="partner">

            <label>MOTHER'S MAIDEN NAME</label>
            <input type="text" name="mother" placeholder="input your mother's name">

            <label>With <b>Government ID?</b></label>
                <select>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            <label>If yes, specify <b>ID Type:</b></label>
            <input type="text" name="gov_idtype">
            <label><b>ID Number</b></label>
            <input type="text"  name="id_num">

              

            <input type="submit" value="next">
        </form>
    </div>
</body>
</html>
