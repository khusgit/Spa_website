<!DOCTYPE HTML>
<html>

<head>
    <title>Dimension by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
       <form action="Spainfo.php" method="post">
    <!-- Wrapper -->
    <div id="wrapper">
        <div class="container">
            <section>
                <h3 class="major">Treatment Request Form</h3>
                  <form action="Spainfo.php" method="post">
                 <div class="field">
                       <div class="field half">
                            <label for="from1">From</label>
                            <select name="from1" id="from1">
                                        <option value="">-</option>
                                        <option value="Sulekha">Sulekha</option>
                                        <option value="Radhika">Radhika</option>
                                        <option value="Tanu">Tanu</option>
                                        <option value="Archita">Archita</option>
                                    </select>
                        </div>
                         <form action="Spainfo.php" method="post">
          
                    <div class="fields">
                        <div class="field half">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="" placeholder="Jane Doe" />
                        </div>
              
                        <div class="field half">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="" placeholder="Jane Doe" />
                        </div>

                        <div class="form-field">
                            <p>Date  of Birth</p>
                            <input type="date" name="dob" id="dob">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="" placeholder="jane@untitled.tld" />
                        </div>
                    
                            <div class="field half">
                                <h5>Gender</h5>
                            <input type="radio" id="choice1" name="gender" value="male">
                            <label for="choice1">Male</label>
                            <input type="radio" id="choice2" name="gender" value="female">
                                 <label for="choice2">Female</label>
                            <input type="radio" id="choice3" name="gender" value="other">
                                 <label for="choice3">Other</label>
                           </div> 

                           <div class="field half">
                            <label for="therapist">Therapist</label>
                            <select name="therapist" id="therapist">
                                        <option value="">-</option>
                                        <option value="1">Therapist1</option>
                                        <option value="1">Therapist2</option>
                                        <option value="1">Therapist3</option>
                                        <option value="1">Therapist4</option>
                                    </select>
                        </div>
                       

                        <div class="field half">
                            <label for="phone_number">Phone Number</label>
                            <input  type="text" name="phone_number" id="phone_number">
                        </div>
                     
                        <div class="field half ">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" value="" placeholder="Jane Doe" />
                        </div>
                     
                        <div class="field half">
                            <label for="therapy">Therapy</label>
                            <select name="therapy" id="therapy">
                                        <option value="">-</option>
                                        <option value="Traditional Thai Massage(Dry Massage)">Traditional Thai Massage(Dry Massage)</option>
                                        <option value="Aroma Therapy Massage(Oil Massage)">Aroma Therapy Massage(Oil Massage)</option>
                                        <option value="Foot Reflexology">Foot Reflexology</option>
                                        <option value="Specific Massage: Back & Shoulder">Specific Massage: Back & Shoulder</option>
                                         <option value="Specific Massage: Head & Shoulder">Specific Massage: Head & Shoulder</option>
                                          <option value="Herbal Ball Compression<">Herbal Ball Compression</option>
                                           <option value="Deep Tissue Massage">Deep Tissue Massage</option>
                                            <option value="Gel Therapy Massage">Gel Therapy Massage</option>
                                             <option value="Facial">Facial</option>
                                              <option value="Swedish/Scrubs/Polish">Swedish/Scrubs/Polish</option>
                                               <option value="Other">Other</option>
                                    </select>
                        </div>
                      
                       
                        <div class="field half">
                            <h5>Minutes</h5>
                            <input type="radio" id="choice4" name="times" value="60 min" onchange="getSelectedValue();" >
                            <label for="choice4">60 min</label>
                            <input type="radio" id="choice5" name="times" value="90 min" onchange="getSelectedValue();" >
                                 <label for="choice5">90 min</label>
                             </div>
                           
                             <div class="form-field">
                                <p>Appointment From</p>
                                <input type="time" name="meeting_time" id="meeting_time">
                            </div>
                            <div class="form-field">
                                <p>Appointment To</p>
                                <input type="time" name="meeting_time1" id="meeting_time1">
                            </div>
                             <div>
            
                              <label for="payment">Payment</label>
                            <select name="payment" id="payment">
                                        <option value="">-</option>
                                        <option value="1">Gpay</option>
                                        <option value="1">PayTm</option>
                                        <option value="1">Cash</option>
                                        <option value="1">Card</option>
                                    </select>
                   </div>
                         <div class="field">
                            <label for="amount">Amount</label>
                            <input  type="text" name="amount" id="amount">
                        </div>
                       
                      <div class="field ">
                            <label for="discount">Discount</label>
                            <input  type="text" name="discount" id="discount">
                        </div>
                
                        <button type="submit" formmethod="post" formaction="Spainfo.php">Submit</button>
                     
                        
                </form>
            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

<script >

    function getSelectedValue()
    {
        //alert("Call");
       var selectedValue = document.getElementById("therapy").value;
       // console.log(selectedValue);
        var amount=0;
       var time=0 ;
       //alert("Time amountset");
     if(document.getElementById("choice4").checked)
       {
            time=60;
       }
       if(document.getElementById("choice5").checked)
       {
            time=90;
       }
   
        //alert("Selected"+selectedValue);
        //alert("Time is"+time);

        if(selectedValue == "Traditional Thai Massage(Dry Massage)" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Traditional Thai Massage(Dry Massage)" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Aroma Therapy Massage(Oil Massage)" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Aroma Therapy Massage(Oil Massage)" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Foot Reflexology" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Foot Reflexology" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Specific Massage: Back & Shoulder" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Specific Massage: Back & Shoulder" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Specific Massage: Head & Shoulder" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Specific Massage: Head & Shoulder" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Herbal Ball Compression" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Herbal Ball Compression" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Deep Tissue Massage" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Deep Tissue Massage" && time==90)
        {
            amount=2200;
        }
            if(selectedValue == "Deep Tissue Massage" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Deep Tissue Massage" && time==90)
        {
            amount=2200;
        }
          if(selectedValue == "Gel Therapy Massage" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Gel Therapy Massage" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Facial" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Facial" && time==90)
        {
            amount=2200;
        }
           if(selectedValue == "Swedish/Scrubs/Polish" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Swedish/Scrubs/Polish" && time==90)
        {
            amount=2200;
        }
         if(selectedValue == "Other" && time==60)
        {
            amount=1500;
        }
        if(selectedValue == "Other" && time==90)
        {
            amount=2200;
        }
        

document.getElementById("amount").value = amount;


        alert("AMount"+amount);
 }
</script>
  