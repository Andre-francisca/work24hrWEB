$(document).ready(function() {
    
     $('form .req-val').on('input paste change', function() {
    var $required = $('form .req-val');
    //filter required inputs to only ones that have a value.
    var $valid = $required.filter(function() {
        return this.value !== '';
    });
        //set disabled prop to false if valid input count is != required input count
    $('#submit_btn').prop('disabled', $valid.length != $required.length);
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
      
       const imgDiv = document.querySelector('.upload');
        const img = document.querySelector('#photo');
        var file = document.querySelector('#image');
        const uploadBtn = document.querySelector('#uploadBtn')
        
        
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
        $("#fname1Error").html(""); 
        $('#fname1').removeClass('input-error');
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
            $("#emailError").html("* Email is not Valid.");
            return false;
          }
            else if($("#loc").val() === ""){
            $('#loc').addClass('input-error');
             $("#locError").html("*Location is required.");
            return false;         
          }
        else if($("#gender").val() === ""){
            $('#gender').addClass('input-error');
             $("#genderError").html("* Gender is required.");
            return false;         
          }
         else if($("#phone").val() === ""){
            $('#phone').addClass('input-error');
             $("#phoneError").html("* Phone number is required.");
            return false;         
          } else if($("#dob").val() === ""){
            $('#dob').addClass('input-error');
             $("#dobError").html("* Date of birth is required.");
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
       else  if($("#nationality").val() === ""){
            $("#nationalityError").html("*Nationality is required");
             $('#nationality').addClass('input-error');
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
    
     $("#passwordupdate").click(function(e){
                e.preventDefault();
                $(".cpasserror").html("");
                $(".npasserror").html("");
                $(".vpasserror").html(""); 
            
                 $('#cpass').removeClass('input-error');  
                 $('#npass').removeClass('input-error');
                 $('#vpass').removeClass('input-error');
            
                  if($("#cpass").val() == ""){
                  $('#cpass').addClass('input-error');
                   $(".cpasserror").html("* Current password is required.");  
                   return false;
                }       
                  if($("#npass").val() == ""){
                  $('#npass').addClass('input-error');
                   $(".npasserror").html("* new password is required.");  
                   return false;
                } 
                else if($("#npass").val().length<6 ){
                    $('#npass').addClass('is-invalid');
                     $(".npasserror").html("* New password length must be more than 6 characters.");
                  return false;  
                }
                else if($("#vpass").val() == ""){
                  $('#vpass').addClass('input-error');
                   $(".vpasserror").html("* confirm password is required.");  
                   return false;
                }      
                if($("#npass").val() !== $("#vpass").val() ){
                     $('#vpass').addClass('input-error');
                     $(".vpasserror").html("* Confirm password did not match with new password!.");
                  return false;  
                }  
                else{
                    var cpass = $("#cpass").val();
                    var npass = $("#npass").val();
                    var userid = document.getElementById("userid1").value;
                    $.ajax({  
                        url:"./controller/updatepass",  
                        method:"POST",  
                        data:{userid:userid,cpass:cpass,npass:npass},  
                        dataType:"json", 
                        beforeSend:function(){  
                          
                        
                                        $("#passwordupdate").html('Updating...');
                                       $('#form-datapass').css('opacity', '.5');
                        }, 
                        success:function(data){  
                        if(data=="cpasserror"){
                                      $("#passwordupdate").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Save');
                                      $('#form-datapass').css('opacity', ''); 
                            setTimeout(function(){  
                                iziToast.error({
                                    position: 'topCenter',
                                    messageLineHeight:'70px',
                                    messageColor: 'white',
                                    backgroundColor: '#e16468',
                                    maxWidth: '400px',
                                    timeout: 10000,
                                    title: 'Error', 
                                    message: 'Incorrect current password, try again!',
                                }); 
                               
                                $("#passwordupdate").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Save');
                                      $('#form-datapass').css('opacity', '');  
                                $("#form-datapass")[0].reset();
            
                            }, 3000);     
                                          
                        }
                        else if(data=="success") {
                                   
                            setTimeout(function(){  
                                iziToast.success({
                                    position: 'topCenter',
                                    messageColor: '#000',
                                    maxWidth: '400px',
                                    timeout: 10000,
                                    title: 'success', 
                                    message: 'Password successfully updated',
                                });
                                $("#passwordupdate").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Save');
                                      $('#form-datapass').css('opacity', ''); 
                                $("#form-datapass")[0].reset();
                                 
            		          setTimeout(function(){
		            		       	window.location.reload(true);
		            		       	},5000);
                               
                               
                            }, 3000); 
                           
                        }
                    }
            
                }); 
            
                }
            
             });
             
                  
                  
                  $("#app_n").click(function(j){
                     j.preventDefault();
                     
                      iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'Please login to apply for this job.',
                                    });
                     
                        setTimeout(function(){
                    		                  
                    		  window.location = "./login";  
                    		  
                    	 }, 7000);
        
        
                  });
                          
     $("#app_sub").click(function(j){
        j.preventDefault();
        
           var imgVal = $('[type=file]').val(); 
         
      
         const fi = document.getElementById('cvfile');
        
        if (fi.files.length > 0) {
                    for ( i = 0; i <= fi.files.length - 1; i++) {
         
                        const fsize = fi.files.item(i).size;
                        const file = Math.round((fsize / 1024));
                        // The size of the file.
                        if (file >= 10048) {
                                $('#error-message').html("File upload size is larger than 10MB");
                                $('#error-message').css("display","block");
                                $('#error-message').css("color","red");
                            return false;  
                            
                          
                        } 
                        else {
                            $('#error-message').css("display","none");
                        }
                    }
                }
        if(imgVal == ''){
            swal ({ 
                 title: "Error",
                  text: "Please upload your CV",
                icon: "error",
                button: true,
                // timer: 5000,
                dangerMode: true,
                  });
            return false;
        }
                else{
                      
                        var form = $('#apply_form')[0];
                         var formData = new FormData(form);
                       $.ajax({  
                            url:"./controller/apply-process",  
                            method:"POST",
                             processData: false,
                            contentType: false,
                            data: formData,
                            dataType:"json", 
                              beforeSend:function(){  
                                       $("#app_sub").html('Applying...');
                                       $('#apply_form').css('opacity', '.5'); 
                                       
                                    }, 
                            success:function(data){  
                               
                              if(data=== 0){
                                  iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'There was a problem submiting your application, please try again!.',
                                    });
                                 $("#app_sub").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Apply');
                                  $('#apply_form').css('opacity', ''); 
                                              
                              }
                             else if(data=== 1){
                                       setTimeout(function(){  
                		                  iziToast.success({
                                          position: 'topCenter',
                                          messageLineHeight:'70px',
                                          timeout: 7000,
                                          title: 'Success', 
                                          message: 'Application successfully sent',
                                        });
                        		          $("#app_sub").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Apply');        
                        		          $('#apply_form').css('opacity', ''); 
                        		          
                        		          //setTimeout(function(){
            		            		       	// window.location.reload(true);
            		            		       	// },5000);
                		                  
                		              }, 3000);
                              }
                              else if(data===2) {
                                   setTimeout(function(){  
                		                 iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'Error uploading CV, please try again!.',
                                    });
                                     $("#app_sub").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update');
                                      $('#apply_form').css('opacity', ''); 
                                      
                                      
                		                  
                		              }, 3000); 
                		              
                		                
                                    //   form.reset();
                              }
                              else if(data===3) {
                                   setTimeout(function(){  
                		                 iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'Application already sent',
                                    });
                                     $("#app_sub").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Apply');
                                      $('#apply_form').css('opacity', ''); 
                                      
                                      
                		                  
                		              }, 3000); 
                		              
                		                
                                    //   form.reset();
                              }
               
                            }
             
                       }); 
                }
        
     });
             
     $("#submit").click(function(j){
        j.preventDefault();
        
        const fi = document.getElementById('cvfile');
        
        if (fi.files.length > 0) {
                    for ( i = 0; i <= fi.files.length - 1; i++) {
         
                        const fsize = fi.files.item(i).size;
                        const file = Math.round((fsize / 1024));
                        // The size of the file.
                        if (file >= 10048) {
                                $('#error-message').html("File upload size is larger than 10MB");
                                $('#error-message').css("display","block");
                                $('#error-message').css("color","red");
                            return false;  
                            
                          
                        } 
                        else {
                            $('#error-message').css("display","none");
                        }
                    }
                }

     if($("#qualification").val() === ""){
           $("#qualificationError").html("*Qualification is required");
            $('#qualification').addClass('input-error');
          return false;         
        }
        else if($("#jobfunction").val() === ""){
           $("#jobfunctionError").html("*Job Function is required");
            $('#jobfunction').addClass('input-error');
          return false;         
        }
        else if($("#yearsofexperience").val() === ""){
            $('#yearsofexperience').addClass('input-error');
             $("#yearsofexperienceError").html("* Years Of Experience is required.");
            return false;         
          }
        else if($("#availability").val() === ""){
            $('#availability').addClass('input-error');
            $("#availabilityError").html("*Availability is required.");
            return false;
          }
        else{
           // var acct = $(this).attr("id");
             var form = $('#reg_form')[0];
             var formData = new FormData(form);
           $.ajax({  
                url:"./controller/clientreg",  
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
    		                   $("#reg_error_status").html('<div class="alert alert-success d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1"><b>Registration successful!, please log In <a href="./login">Log In</a></b></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
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
          
          
           $("#update-user").click(function(j){
	                j.preventDefault();
	 
	              const fi = document.getElementById('image');
                    // Check if any file is selected.
                    if (fi.files.length > 0) {
                        for ( i = 0; i <= fi.files.length - 1; i++) {
             
                            const fsize = fi.files.item(i).size;
                            const file = Math.round((fsize / 1024));
                            // The size of the file.
                            if (file >= 2048) {
                                    $('#error-message').html("File upload size is larger than 2MB");
                                    $('#error-message').css("display","block");
                                    $('#error-message').css("color","red");
                                return false;  
                            } 
                            else {
                                // document.getElementById('size').innerHTML = '<b>'
                                // + file + '</b> KB';
                                $('#error-message').css("display","none");
                            }
                        }
                    }
	        
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
                    $("#emailError").html("* Email is not Valid.");
                    return false;
                  }
                  else if($("#phone").val() === ""){
                    $('#phone').addClass('input-error');
                     $("#phoneError").html("* Phone number is required.");
                    return false;         
                  }else{
                      
                        var form = $('#user_update_form')[0];
                         var formData = new FormData(form);
                       $.ajax({  
                            url:"./controller/userUpdate",  
                            method:"POST",
                             processData: false,
                            contentType: false,
                            data: formData,
                            dataType:"json", 
                              beforeSend:function(){  
                                       $("#update-user").html('Updating...');
                                       $('#user_update_form').css('opacity', '.5'); 
                                       
                                    }, 
                            success:function(data){  
                                console.log(data);
                                
                               
                              if(data=== 0){
                                  iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'There was a problem updating your details, please try again!.',
                                    });
                                 $("#update-user").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update');
                                  $('#user_update_form').css('opacity', ''); 
                                              
                              }
                             else if(data=== 1){
                                       setTimeout(function(){  
                		                  iziToast.success({
                                          position: 'topCenter',
                                          messageLineHeight:'70px',
                                          timeout: 7000,
                                          title: 'Success', 
                                          message: 'Account details successfully updated!',
                                        });
                        		          $("#update-user").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update');        
                        		          $('#user_update_form').css('opacity', ''); 
                        		          
                        		          setTimeout(function(){
            		            		       	window.location.reload(true);
            		            		       	},5000);
                		                  
                		              }, 3000);
                              }
                              else if(data===2) {
                                   setTimeout(function(){  
                		                 iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'Error uploading image, please try again!.',
                                    });
                                     $("#update-user").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update');
                                      $('#user_update_form').css('opacity', ''); 
                                      
                                      
                		                  
                		              }, 3000); 
                		              
                		                
                                    //   form.reset();
                              }
               
                            }
             
                       }); 
                      
                  }
        	       
        	        function validateEmail($email){
                        var emailReg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                        return emailReg.test($email);
                      }
	       
	       
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
                        url:"./controller/logprocess",  
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
                    		                  
                    		                   window.location = "./index";  
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