$(document).ready(function() {
  
    $('form .req-val').on('input paste change', function() {
    var $required = $('form .req-val');
    //filter required inputs to only ones that have a value.
    var $valid = $required.filter(function() {
        return this.value != '';
    });
        //set disabled prop to false if valid input count is != required input count
    // $('#submit_btn').prop('disabled', $valid.length != $required.length);
    $('#submit_btn_rest').prop('disabled', $valid.length != $required.length);
    });
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }  
      });
      
      
      filter_data();
      
      function filter_data(){
          
          $('.filter_data').html('<div id="loading" style="">  </div>');
          var action = "fetch_date";
          
          var industry = get_filter('industry');
          var location = get_filter('location');
          var jobFunction = get_filter('jobFunction');
          var latest = get_filter('latest');
          var jobtype = get_filter('jobtype');
          
          $.ajax({
              
              url:"./controller/fetch_data",
              method:"POST",
              data:{action:action, industry: industry, location:location, jobFunction:jobFunction, latest:latest, jobtype:jobtype},
              success:function(data){
                  $('.filter_data').html(data);
              }
          })
      }
      
      function get_filter(class_name){
          
          var filter = [];
          $('.'+class_name+':checked').each(function(){
              
              filter.push($(this).value());
              
          });
          
          return filter;
      }

   $('#state').change(function() {
            
            var id = $(this).find(':selected')[0].id;
            $.ajax({
                type:'POST',
                url:'./controller/getzone',
                data:{id:id},
                cache: false,
                success:function(data){
                    $("#zone").html(data);
                }
            });
        });

    $("input").focus(function(){
        $("#fnameError").html(""); 
        $('#fname').removeClass('input-error');
        $("#cnameError").html(""); 
        $('#cname').removeClass('input-error');
        $("#fname2Error").html(""); 
        $('#fname2').removeClass('input-error');
        $("#lnameError").html("");
        $('#lname').removeClass('input-error');
        $("#lname1Error").html("");
        $('#lname1').removeClass('input-error');
        $("#lname2Error").html("");
        $('#lname2').removeClass('input-error');
        $("#emailError").html("");
        $('#email').removeClass('input-error');
        $("#email1Error").html("");
        $('#email1').removeClass('input-error');
        $("#email2Error").html("");
        $('#email2').removeClass('input-error');
        $("#phone2Error").html("");
        $('#phone2').removeClass('input-error');
        $("#phone1Error").html("");
        $('#phone1').removeClass('input-error');
        $("#resaddError").html("");
        $('#resadd').removeClass('input-error');
        $("#phoneError").html("");
        $('#phone').removeClass('input-error');
        $("#passwordError").html("");
        $('#password').removeClass('input-error');
        $("#agentIDError").html("");
        $('#agentID').removeClass('input-error');
        $("#dobError").html("");
        $('#dob').removeClass('input-error');
        $("#nationalityError").html("");
        $('#nationality').removeClass('input-error');
        $("#websiteError").html("");
        $('#website').removeClass('input-error');
        $("#cpersonError").html("");
        $('#cperson').removeClass('input-error');
        $("#cphoneError").html("");
        $('#cphone').removeClass('input-error');
        $("#ccountryError").html("");
        $('#ccountry').removeClass('input-error');
     });
    $("select").focus(function(){
        $("#genderError").html(""); 
        $('#gender').removeClass('input-error');
        $("#locError").html(""); 
        $('#loc').removeClass('input-error');
        $("#gtypeError").html(""); 
        $('#gtype').removeClass('input-error');
        $("#pplanError").html(""); 
        $('#pplan').removeClass('input-error');
        $("#stateError").html(""); 
        $('#state').removeClass('input-error');
        $("#zoneError").html(""); 
        $('#zone').removeClass('input-error');
        $("#qualificationError").html(""); 
        $('#qualification').removeClass('input-error');
        $("#jobfunctionError").html(""); 
        $('#jobfunction').removeClass('input-error');
        $("#yearsofexperienceError").html(""); 
        $('#yearsofexperience').removeClass('input-error');
        $("#availabilityError").html(""); 
        $('#availability').removeClass('input-error');
        $("#position-companyError").html(""); 
        $('#position-company').removeClass('input-error');
        $("#cindustryError").html(""); 
        $('#cindustry').removeClass('input-error');
        $("#nemployeesError").html(""); 
        $('#nemployees').removeClass('input-error');
        $("#caddressError").html(""); 
        $('#caddress').removeClass('input-error');
       
     });
     
     $("text-area").focus(function(){
         
          $("#typeofemployerError").html(""); 
        $('#typeofemployer').removeClass('input-error');
     });

        $("#next-1").click(function(j){
        j.preventDefault();

         if($("#fname").val() === ""){
           $("#fnameError").html("* First name is required");
            $('#fname').addClass('input-error');
          return false;         
        }
        else if($("#lname").val() === ""){
           $("#lnameError").html("* Last name is required");
            $('#lname').addClass('input-error');
          return false;         
        }
        else if($("#email").val() === ""){
            $('#email').addClass('input-error');
            $("#emailError").html("* Email is required.");
            return false;
          }
          else if(!validateEmail($("#email").val())){
            $('#email').addClass('input-error');
            $("#emailError").html("*Work email is not Valid.");
            return false;
          }
            else if($("#position-company").val() === ""){
            $('#position-company').addClass('input-error');
             $("#position-companyError").html("*Position In Company is required.");
            return false;         
          }
        
         else if($("#phone").val() === ""){
            $('#phone').addClass('input-error');
             $("#phoneError").html("* Phone number is required.");
            return false;         
          }else  if($("#password").val() === ""){
            $("#passwordError").html("* Password is required");
             $('#password').addClass('input-error');
           return false;         
         }
         else if($("#password").val().length<6 ){
            $('#password').addClass('input-error');
            $("#passwordError").html("*Password length must be more than 6 characters.");
         return false;  
       }
       else{
            $("#second").show();
            $("#first").hide();
             var element = document.getElementById("p2");
            element.classList.add("bg-gr");
             var element1 = document.getElementById("p1");
            element1.classList.add("bg-light");
            
            element.classList.remove("bg-light");
            element1.classList.remove("bg-gr");
          }
      
   
        function validateEmail($email){
            var emailReg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return emailReg.test($email);
          }
    });
     $("#submit").click(function(j){
        j.preventDefault();
        
        // const fi = document.getElementById('cvfile');
        
        // if (fi.files.length > 0) {
        //             for ( i = 0; i <= fi.files.length - 1; i++) {
         
        //                 const fsize = fi.files.item(i).size;
        //                 const file = Math.round((fsize / 1024));
        //                 // The size of the file.
        //                 if (file >= 10048) {
        //                         $('#error-message').html("File upload size is larger than 10MB");
        //                         $('#error-message').css("display","block");
        //                         $('#error-message').css("color","red");
        //                     return false;  
                            
                          
        //                 } 
        //                 else {
        //                     $('#error-message').css("display","none");
        //                 }
        //             }
        //         }

     if($("#cname").val() === ""){
           $("#cnameError").html("*Company Name is required");
            $('#cname').addClass('input-error');
          return false;         
        }
        else if($("#cindustry").val() === ""){
           $("#cindustryError").html("*Industry is required");
            $('#cindustry').addClass('input-error');
          return false;         
        }
        else if($("#nemployees").val() === ""){
            $('#nemployees').addClass('input-error');
             $("#nemployeesError").html("*Number of employees is required.");
            return false;         
          }
        else if($("#typeofemployer").val() === ""){
            $('#typeofemployer').addClass('input-error');
             $("#typeofemployerError").html("*Type of employers is required.");
            return false;         
          }
        else if($("#website").val() === ""){
            $('#website').addClass('input-error');
            $("#websiteError").html("*Website Name is required.");
            return false;
          }
        else if($("#cperson").val() === ""){
            $('#cperson').addClass('input-error');
            $("#cpersonError").html("*Contact Person is required.");
            return false;
          }
        else if($("#cphone").val() === ""){
            $('#cphone').addClass('input-error');
            $("#cphoneError").html("*Contact phone number is required.");
            return false;
          }
        else if($("#ccountry").val() === ""){
            $('#ccountry').addClass('input-error');
            $("#ccountryError").html("*Country is required.");
            return false;
          }
        else if($("#caddress").val() === ""){
            $('#caddress').addClass('input-error');
            $("#caddressError").html("*Company Address is required.");
            return false;
          }
        else{
           // var acct = $(this).attr("id");
             var form = $('#reg_form')[0];
             var formData = new FormData(form);
           $.ajax({  
                url:"./controller/empreg",  
                method:"POST",
                 processData: false,
                contentType: false,
                data: formData,
                dataType:"json", 
                  beforeSend:function(){  
                           $("#spin").html('<div class="clearfix"><div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div></div>');
                           $('#reg_form').css('opacity', '.5'); 
                           $("#icon").hide();
                        }, 
                success:function(data){  
                    console.log(data);
                    
                   
                  if(data=== 0){
                       $("#reg_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1"><b>There was a problem while registering your account, please try again!</b></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                       $('#reg_form').css('opacity', ''); 
                                     $("#icon").show();
                                     $("#spin").hide();
                                     $("#progressBar").css("width","50%");
                                     $("#progressText").html("Step - 1");
            		             $('#reg_form input[type="text"],textarea,select,input[type="password"]').val('');
            		             $("#second").hide();
                                    $("#first").show();
                  }
                 else if(data=== 2){
                           setTimeout(function(){  
    		                   $("#reg_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1">Email already exist, lost account? click on forgotten password to recover your account</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>')
    		                  
            		              $('#reg_form').css('opacity', ''); 
                                     $("#icon").show();
                                     $("#spin").hide();
                                      $("#progressBar").css("width","50%");
                                     $("#progressText").html("Step - 1");
                                     
                                     
            		          //   $('#reg_form input[type="text"],textarea,select,input[type="password"]').val('');
            		             
            		              $("#second").hide();
                                    $("#first").show();
            		                  
    		                  
    		              }, 4000);
                  }
                  else if(data===1) {
                       setTimeout(function(){  
    		                   $("#reg_error_status").html('<div class="alert alert-success d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1"><b>Registration successful!, please log In <a href="https://www.work24hr.com/employer-login">Log In</a></b></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            		              $('#reg_form').css('opacity', ''); 
                                     $("#icon").show();
                                     $("#spin").hide();
                                     $("#progressBar").css("width","50%");
                                     $("#progressText").html("Step - 1");
            		             $('#reg_form input[type="text"],textarea,select,input[type="password"]').val('');
            		             $("#second").hide();
                                    $("#first").show();
            		             
    		                  
    		              }, 4000); 
    		              
    		                
                           form.reset();
                  }
   
                }
 
           }); 

          }
    });
    $("#prev-2").click(function(){
        $("#second").hide();
        $("#first").show();
        
         var element = document.getElementById("p2");
            element.classList.add("bg-light");
             var element1 = document.getElementById("p1");
            element1.classList.add("bg-gr");
            
            element.classList.remove("bg-gr");
            element1.classList.remove("bg-light");
          });
          
    //login
    $("#submit_btn").click(function(j){
        j.preventDefault();
        
           if($("#email").val() === ""){
            $('#email').addClass('input-error');
            $("#emailError").html("* Email is required.");
            return false;
          }
          else if(!validateEmail($("#email").val())){
            $('#email').addClass('input-error');
            $("#emailError").html("* Email is not Valid.");
            return false;
          }
         else if($("#password").val() === "" ){
            $('#password').addClass('input-error');
            $("#passwordError").html("*Password is required.");
         return false;  
            }
            else{
                var form = $('#log_form')[0];
                var formData = new FormData(form);
             
                        $.ajax({  
                        url:"./controller/rlogprocess",  
                        method:"POST",
                         processData: false,
                        contentType: false,
                        data: formData,
                        dataType:"json", 
                          beforeSend:function(){  
                                //   $("#spin").html('');
                                     $("#spin").show();
                                   $('#log_form').css('opacity', '.5'); 
                                  
                                   $("#icon").hide();
                                }, 
                        success:function(data){  
                            console.log(data);
                         if(data===1) {
                               setTimeout(function(){  
            		                  // $("#log_error_status").html('<div class="alert alert-success d-flex " role="alert"><div class="mb-1"><div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div></div>&nbsp;<div class="text-dark flex-grow-1">Login successful!, redirecting...&nbsp;</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    		             
                    		              $('#log_form').css('opacity', ''); 
                                             $("#icon").show();
                                             $("#spin").hide();
                                        iziToast.success({
                                          messageLineHeight:'70px',
                                         messageColor: '#000',
                                         maxWidth: '400px',
                                         position: 'center',
                                         timeout: 10000,
                                         title: 'Success', 
                                         message: 'Login successful, redirecting....',
                                       });
                    		             $('#log_form input[type="text"],textarea,select,input[type="password"]').val('');
                    		             
                    		              setTimeout(function(){
                    		                  
                    		                   window.location = "./employer/dashboard";  
                    		              }, 4000);
                    		             
            		              }, 3000); 
            		              
            		                
                                   form.reset();
                          }
                          else if(data===0) {
            		              setTimeout(function(){  
            		                  // $("#log_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1">Invalid Login Credentials</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    		             
                    		             
                    		              
                            		          iziToast.error({
                                            messageLineHeight:'70px',
                                             messageColor: 'white',
                                             backgroundColor: 'red',
                                             maxWidth: '400px',
                                             position: 'center',
                                               title: 'Error',
                                               message: 'Invalid Login Credentials',
                                                });
                    		              $('#log_form').css('opacity', ''); 
                                             $("#spin").hide();
                    		             $('#log_form input[type="text"],textarea,select,input[type="password"]').val('');
                    		             
                    		           
                    		                  
            		                  
            		              }, 3000); 
            		           
                          }
                         
                        }
         
                   }); 
            }
        
        function validateEmail($email){
            var emailReg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return emailReg.test($email);
          }
        
           });
    //reset
    $("#submit_btn_rest").click(function(j){
        j.preventDefault();
        
         
         if($("#email").val() == ""){
          $('#email').addClass('input-error');
          $("#emailError").html("* Email is required.");
          return false;
        }
        else if(!validateEmail($("#email").val())){
          $('#email').addClass('input-error');
          $("#emailError").html("* Email is not Valid.");
          return false;
        }
            else{
                var form = $('#reset_form')[0];
                var formData = new FormData(form);
             
                        $.ajax({  
                        url:"./controller/rest",  
                        method:"POST",
                         processData: false,
                        contentType: false,
                        data: formData,
                        dataType:"json", 
                          beforeSend:function(){  
                                //   $("#spin").html('');
                                     $("#spin").show();
                                   $('#reset_form').css('opacity', '.5'); 
                                  
                                   $("#icon").hide();
                                }, 
                        success:function(data){  
                            console.log(data);
                           
                          if(data=== 0){
                              
                               setTimeout(function(){  
                                   
                               $("#reset_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1">There was a problem, please try again!</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>')
                               $('#reset_form').css('opacity', ''); 
                                             
                                             $("#spin").hide();
                    		             $('#reset_form input[type="text"],input[type="email"],textarea,select,input[type="password"]').val('');
                    		             
                               }, 3000); 
                    		            
                          }
                          else if(data===1) {
                               setTimeout(function(){  
            		                   $("#reset_error_status").html('<div class="alert alert-success d-flex " role="alert"><div class="text-dark flex-grow-1">We emailed you a password reset link...&nbsp;</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    		              $('#reset_form').css('opacity', ''); 
                                             $("#icon").show();
                                             $("#spin").hide();
                                        
                    		             $('#reset_form input[type="text"],input[type="email"],textarea,select,input[type="password"]').val('');
                    		           
                    		             
            		              }, 3000); 
            		              
            		                
                                   
                          }
              
                          else if(data===3) {
            		              //   document.getElementById("reg_success").style.display = "block";
            		              
            		                  setTimeout(function(){  
            		                   $("#reset_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1">No email found</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    		              $('#reset_form').css('opacity', ''); 
                                             $("#icon").show();
                                             $("#spin").hide();
                    		             $('#reset_form input[type="text"],input[type="email"],textarea,select,input[type="password"]').val('');
                    		            
                    		                
            		                  
            		              }, 3000); 
            		              
            		                form.reset();
                                
                          }
                          else if(data===4) {
            		              //   document.getElementById("reg_success").style.display = "block";
            		              
            		                  setTimeout(function(){  
            		                   $("#reset_error_status").html('<div class="alert alert-danger d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1">error try again!</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    		              $('#reset_form').css('opacity', ''); 
                                             $("#icon").show();
                                             $("#spin").hide();
                    		             $('#reset_form input[type="text"],input[type="email"],textarea,select,input[type="password"]').val('');
                    		            
                    		          
                    		                  
            		                  
            		              }, 3000); 
            		              
                                  
                          }
                        }
         
                   }); 
            }
         
                function validateEmail($email){
                    var emailReg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    return emailReg.test($email);
        
                  }
        
        
           });

});