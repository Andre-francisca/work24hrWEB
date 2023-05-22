$(document).ready(function(){
    
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
    
    function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
  
    navigator.clipboard.writeText(copyText.value);
    alert("Copied the text: " + copyText.value)
  
              }
    
       const imgDiv = document.querySelector('.upload');
        const img = document.querySelector('#photo');
        var file = document.querySelector('#image');
        const uploadBtn = document.querySelector('#uploadBtn')
        
         jQuery("input:file").change(function(event){
            const choosedFile = this.files[0];
             
             if(choosedFile){
                 
                 const reader = new FileReader();
                 
                 reader.addEventListener('load', function(){
                     img.setAttribute('src', reader.result)
                 });
                 
                 reader.readAsDataURL(choosedFile)
             }
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
              
      $("input").focus(function(){
        $("#fnameError").html(""); 
        $('#fname').removeClass('input-error');
        $(".cpasserror").html(""); 
        $('#cpass').removeClass('input-error');
        $(".npasserror").html(""); 
        $('#npass').removeClass('input-error');
        $(".vpasserror").html(""); 
        $('#vpass').removeClass('input-error');
        $("#lnameError").html("");
        $('#lname').removeClass('input-error');
        $("#amountError").html("");
        $('#amount').removeClass('input-error');
        $("#amount1Error").html("");
        $('#amount1').removeClass('input-error');
        $("#amount2Error").html("");
        $('#amount2').removeClass('input-error');
        $("#amount3Error").html("");
        $('#amount3').removeClass('input-error');
        $("#amount4Error").html("");
        $('#amount4').removeClass('input-error');
        $("#emailError").html("");
        $('#email').removeClass('input-error');
        $("#phoneError").html("");
        $('#phone').removeClass('input-error');
        $("#passwordError").html("");
        $('#password').removeClass('input-error');
        $("#jtitleError").html("");
        $('#jtitle').removeClass('input-error');
     
      
     });
     
       $("select").focus(function(){
        $("#aopeningsError").html(""); 
        $('#aopenings').removeClass('input-error');
        $("#jobfunctionError").html(""); 
        $('#jobfunction').removeClass('input-error');
        $("#wtypeError").html(""); 
        $('#wtype').removeClass('input-error');
        $("#cindustryError").html(""); 
        $('#cindustry').removeClass('input-error');
        $("#locError").html(""); 
        $('#loc').removeClass('input-error');
        $("#eyearsError").html(""); 
        $('#eyears').removeClass('input-error');
        $("#joblevelError").html(""); 
        $('#joblevel').removeClass('input-error');
        $("#scurrencyError").html(""); 
        $('#scurrency').removeClass('input-error');
        $("#msalaryError").html(""); 
        $('#msalary').removeClass('input-error');
        
       });
       $("textarea").focus(function(){
       
          $("#jobsummaryError").html("");
        $('#jobsummary').removeClass('input-error');
        
       });
       
       
    $(document).on('click', '.remark_data', function(){  
          var jobappid = $(this).attr("id");  
          $.ajax({  
               url:"./processor/fetchjob",  
               method:"POST",  
               data:{jobappid:jobappid},  
               dataType:"json",  
               success:function(data){  
                  $('#applicant').val(data.firstname);
                  $('#email').val(data.email);
                  $('#adate').val(data.date_applied);
                  $('#status').val(data.statusapp);
                    $('#appid').val(jobappid);  
                    $('#job_Modal').modal('show');  
                       }  
                  });  
                }); 
                
     $('#reply_form').on("submit", function(event){  
            event.preventDefault();  
                
        
                // Create variables from the form
              var message = $("#m").val();
              var appid = $("#appid").val();
            $.ajax({  
                        url:"./processor/updateapplication",  
                        method:"POST",  
                        data:{message:message,appid:appid},  
                        dataType:"json",  
                        beforeSend:function(){  
                          $("#loader2").html('<img src="./assets/images/process.gif" width="100px" />');
                        $('.modal-body').css('opacity', '.5');
                        },  
                        success:function(data){  
                        
                        if(data=='success'){
                            
                             
                          setTimeout(function(){  
                            iziToast.success({
                                position: 'center',
                                messageColor: '#000',
                                maxWidth: '400px',
                                timeout: 7000,
                                title: 'success', 
                                message: 'Application replied',
                            });

                                setTimeout(function(){
                                  window.location = "./job-applications"
                                },7000);
                                $("#loader2").html('');
                                $('#job_Modal').modal('hide'); 

                              },3000);

                        }
                        else if(data=='error'){
                          
                          iziToast.error({
                              position: 'center',
                              messageLineHeight:'70px',
                              messageColor: 'white',
                              backgroundColor: '#e16468',
                              maxWidth: '400px',
                              timeout: 10000,
                              title: 'Error', 
                              message: 'Try Again',
                          }); 
                          $('#withdraw_Modal').modal('hide'); 
                        }
                            
                        }  
                  }); 
         

   

}); 
       
            $("#submitJob").click(function(j){
	                j.preventDefault();
	 
	 
	                     $('input').each(function() {
                            if(!$(this).val()){
                                
                                 iziToast.error({
                                    position: 'topCenter',
                                    messageLineHeight:'70px',
                                    messageColor: 'white',
                                    backgroundColor: '#e16468',
                                    maxWidth: '400px',
                                    timeout: 10000,
                                    title: 'Error', 
                                    message: 'All Fields are required',
                                }); 
                                
                               return false;
                            }
                        });
	                    
	                       if($("#jtitle").val() === ""){
                               $("#jtitleError").html("* Job title is required");
                                $('#jtitle').addClass('input-error');
                              return false;         
                            }
                            else if($("#aopenings").val() === ""){
                               $("#aopeningsError").html("*Available openings is required");
                                $('#aopenings').addClass('input-error');
                              return false;         
                            }
                            else if($("#jobfunction").val() === ""){
                               $("#jobfunctionError").html("*Job function is required");
                                $('#jobfunction').addClass('input-error');
                              return false;         
                            }
                            else if($("#cindustry").val() === ""){
                               $("#cindustryError").html("*Industry is required");
                                $('#cindustry').addClass('input-error');
                              return false;         
                            }
                            else if($("#wtype").val() === ""){
                               $("#wtypeError").html("*Work type is required");
                                $('#wtype').addClass('input-error');
                              return false;         
                            }
                            else if($("#loc").val() === ""){
                               $("#locError").html("*Location is required");
                                $('#loc').addClass('input-error');
                              return false;         
                            }
                            else if($("#loc").val() === ""){
                               $("#locError").html("*Location is required");
                                $('#loc').addClass('input-error');
                              return false;         
                            }
                            else if($("#mqualification").val() === ""){
                               $("#mqualificationError").html("*Minimum qualification is required");
                                $('#mqualification').addClass('input-error');
                              return false;         
                            }
                            else if($("#mqualification").val() === ""){
                               $("#mqualificationError").html("*Minimum qualification is required");
                                $('#mqualification').addClass('input-error');
                              return false;         
                            }
                            else if($("#eyears").val() === ""){
                               $("#eyearsError").html("*Years of experience is required");
                                $('#eyears').addClass('input-error');
                              return false;         
                            }
                            else if($("#eyears").val() === ""){
                               $("#eyearsError").html("*Years of experience is required");
                                $('#eyears').addClass('input-error');
                              return false;         
                            }
                            else if($("#joblevel").val() === ""){
                               $("#joblevelError").html("*Job level is required");
                                $('#joblevel').addClass('input-error');
                              return false;         
                            }
                            else if($("#scurrency").val() === ""){
                               $("#scurrencyError").html("Salary currency is required");
                                $('#scurrency').addClass('input-error');
                              return false;         
                            }
                            else if($("#msalary").val() === ""){
                               $("#msalaryError").html("*Monthly salary is required");
                                $('#msalary').addClass('input-error');
                              return false;         
                            }
                            else if($("#jobsummary").val() === ""){
                               $("#jobsummaryError").html("*Job summary is required");
                                $('#jobsummary').addClass('input-error');
                              return false;         
                            }
                            else if($("#jobdesc").val() === ""){
                               $("#jobdescError").html("*Job description is required");
                                $('#jobdesc').addClass('input-error');
                              return false;         
                            }else{
                      
                        var form = $('#post-job-form')[0];
                         var formData = new FormData(form);
                       $.ajax({  
                            url:"./processor/post-job",  
                            method:"POST",
                             processData: false,
                            contentType: false,
                            data: formData,
                            dataType:"json", 
                              beforeSend:function(){  
                                       $("#submitJob").html('Posting...');
                                       $('#post-job-form').css('opacity', '.5'); 
                                       
                                    }, 
                            success:function(data){  
                                console.log(data);
                                
                               
                              if(data=== 0){
                                  iziToast.error({
                                      position: 'topCenter',
                                      messageLineHeight:'70px',
                                      timeout: 7000,
                                      title: 'Error', 
                                      message: 'There was a problem posting job, please try again!.',
                                    });
                                 $("#submitJob").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Post');
                                  $('#post-job-form').css('opacity', ''); 
                                              
                              }
                             else if(data=== 1){
                                       setTimeout(function(){  
                		                  iziToast.success({
                                          position: 'topCenter',
                                          messageLineHeight:'70px',
                                          timeout: 7000,
                                          title: 'Success', 
                                          message: 'Job successfully posted',
                                        });
                        		          $("#submitJob").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Post');        
                        		          $('#post-job-form').css('opacity', ''); 
                        		          
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
                                     $("#submitJob").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update');
                                      $('#post-job-form').css('opacity', ''); 
                                      
                                      
                		                  
                		              }, 3000); 
                		              
                		                
                                    //   form.reset();
                              }
               
                            }
             
                       }); 
                      
                  }
	 
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
                  }
                  else if($("#country").val() === ""){
                    $('#country').addClass('input-error');
                     $("#countryError").html("* Country is required.");
                    return false;         
                  }
                  
                  else{
                      
                        var form = $('#user_update_form')[0];
                         var formData = new FormData(form);
                       $.ajax({  
                            url:"./processor/employerUpdate",  
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
                    var emid = document.getElementById("emid").value;
                    $.ajax({  
                        url:"./processor/updatepass",  
                        method:"POST",  
                        data:{emid:emid,cpass:cpass,npass:npass},  
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
             
             
             
             $("#ulogo").click(function(e){
                 e.preventDefault();
            
            
                
                    const fi = document.getElementById('image');
                    // Check if any file is selected.
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
                                // document.getElementById('size').innerHTML = '<b>'
                                // + file + '</b> KB';
                                $('#error-message').css("display","none");
                            }
                        }
                    }
                    
                 if($("#emid").val() == ""){
                  $('#emid').addClass('input-error');
                   $(".emid").html("* Current password is required.");  
                   return false;
                } 
                  else{
           
            var form = $('#uploadlogo_form')[0];
             var formData = new FormData(form);
           $.ajax({  
                url:"./processor/logoupload",  
                method:"POST",
                 processData: false,
                contentType: false,
                data: formData,
                dataType:"json", 
                  beforeSend:function(){  
                           $("#ulogo").html('Uploading...');
                           $('#uploadlogo_form').css('opacity', '.5'); 
                           
                        }, 
                success:function(data){  
                    console.log(data);
                    
                   
                  if(data=== 0){
                      iziToast.error({
                          position: 'topCenter',
                          messageLineHeight:'70px',
                          timeout: 7000,
                          title: 'Error', 
                          message: 'There was a problem uploading your company logo, please try again!.',
                        });
                     $("#ulogo").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;NEXT');
                      $('#uploadlogo_form').css('opacity', ''); 
                                  
                  }
                 else if(data=== 1){
                           setTimeout(function(){  
    		                  iziToast.success({
                              position: 'topCenter',
                              messageLineHeight:'70px',
                              timeout: 7000,
                              title: 'Success', 
                              message: 'Company logo uploaded successful!',
                            });
            		          $("#ulogo").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;NEXT');
                                 $('#uploadlogo_form').css('opacity', ''); 
            		          setTimeout(function(){
		            		       	window.location.reload(true);
		            		       	},5000);
    		                  
    		              }, 3000);
                  }
                  else if(data===2) {
                       setTimeout(function(){  
    		                 iziToast.error({
                          position: 'topRight',
                          messageLineHeight:'70px',
                          timeout: 7000,
                          title: 'Error', 
                          message: 'Please select your logo',
                        });
                        $("#ulogo").html('<span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;NEXT');
                      $('#uploadlogo_form').css('opacity', ''); 
                          
                          
    		                  
    		              }, 3000); 
    		              
    		                
                        //   form.reset();
                  }
   
                }
 
           }); 
           
          }
            
            
            
             });
             
             
            $("#primary").click(function(e){
            e.preventDefault();

            $("#amountError").html("");
            $('#amount').removeClass('input-error');
             

            if($("#amount").val() == ""){
                $("#amountError").html("* Amount  is required.");
                 $('#amount').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-starter')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){  
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-starter")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-starter")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Primary Plan is 30$ - 199$',
                                    });
                                      $("#form-starter")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-starter")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
    
            $("#standard").click(function(e){
            e.preventDefault();

            $("#amount1Error").html("");
            $('#amount1').removeClass('input-error');
             

            if($("#amount1").val() == ""){
                $("#amount1Error").html("* Amount  is required.");
                 $('#amount1').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-standard')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-standard")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-standard")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Standard Plan is 200$ - 4999$',
                                    });
                                      $("#form-standard")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-standard")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
    
            $("#expert").click(function(e){
            e.preventDefault();

            $("#amount2Error").html("");
            $('#amount2').removeClass('input-error');
             

            if($("#amount2").val() == ""){
                $("#amount2Error").html("* Amount  is required.");
                 $('#amount2').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-expert')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-expert")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-expert")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Expert Plan is 5,000$ - 24,999$',
                                    });
                                      $("#form-expert")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-expert")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
            $("#ultimate").click(function(e){
            e.preventDefault();

            $("#amount3Error").html("");
            $('#amount3').removeClass('input-error');
             

            if($("#amount3").val() == ""){
                $("#amount3Error").html("* Amount  is required.");
                 $('#amount3').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-ultimate')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-ultimate")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-ultimate")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Ultimate Plan is 25,000$ - 49,999$',
                                    });
                                      $("#form-ultimate")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Ultimate Plan!',
                                    });
                                      $("#form-ultimate")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
            $("#master").click(function(e){
            e.preventDefault();

            $("#amount4Error").html("");
            $('#amount4').removeClass('input-error');
             

            if($("#amount4").val() == ""){
                $("#amount4Error").html("* Amount  is required.");
                 $('#amount4').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-master')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-master")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-master")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Master Plan is 50,000$ - Unlimited',
                                    });
                                      $("#form-master")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-master")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
            $("#savings").click(function(e){
            e.preventDefault();

            $("#amount5Error").html("");
            $('#amount5').removeClass('input-error');
             

            if($("#amount5").val() == ""){
                $("#amount5Error").html("* Amount  is required.");
                 $('#amount5').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-savings')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-savings")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-savings")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Savings Plan is 20$ - $49999',
                                    });
                                      $("#form-savings")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-savings")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
        
            $("#mortgage").click(function(e){
            e.preventDefault();

            $("#amount6Error").html("");
            $('#amount6').removeClass('input-error');
             

            if($("#amount6").val() == ""){
                $("#amount6Error").html("* Amount  is required.");
                 $('#amount6').addClass('input-error');
               return false;         
             }
              
             else{
                        var form = $('#form-mortgage')[0];
                         var formData = new FormData(form); 
                $.ajax({  
                        url:"./processor/packageprocess",  
                        method:"POST",
                        processData: false,
                        contentType: false,
                        data: formData,  
                        dataType:"json",  
                        success:function(data){
                            
                                if(data=="error"){
                                    iziToast.error({
                                        position: 'center',
                                        messageLineHeight:'70px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'Error', 
                                        message: 'Try Again',
                                    }); 
                                      $("#form-mortgage")[0].reset();                        
                                }
                                else if(data=="success") {
                                    iziToast.success({
                                        position: 'center',
                                        messageColor: '#000',
                                        maxWidth: '400px',
                                        timeout: 10000,
                                        title: 'success', 
                                        message: 'Investment Plan successfully activated',
                                    });
                                      $("#form-mortgage")[0].reset();
                                      setTimeout(function(){
                                        window.location = "./investment-plans"
                                     },10000);
                                }
                                
                                else if(data=="errorlimit") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white', 
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Investment Limit for Mortgage Plan is 20,000$ - Unlimited',
                                    });
                                      $("#form-mortgage")[0].reset();
                                }
                              
                               
                                else if(data=="errorinsufficient") {
                                    iziToast.error({
                                        position: 'center',
                                        maxWidth: '400px',
                                        messageColor: 'white',
                                        backgroundColor: '#e16468',
                                        timeout: 10000,
                                        title: '', 
                                        message: 'Insufficient fund, Deposit fund into your wallet to Start Plan!',
                                    });
                                      $("#form-mortgage")[0].reset();
                                }
                     }
        
                    }); 
             }


        });
        
        
         $(document).on('click', '.withdraw_data', function(){  
          var planid = $(this).attr("id");  
          $.ajax({  
               url:"./processor/fetchpackage",  
               method:"POST",  
               data:{planid:planid},  
               dataType:"json",  
               success:function(data){  
                  $('#plantype').val(data.investType);
                  $('#withamount').val(data.totalProfit);
                    $('#uid').val(data.userId);  
                    $('#pid').val(planid);  
                    $('#withdraw_Modal').modal('show');  
                       }  
                  });  
                }); 
                
         $('#withdrawal_form').on("submit", function(event){  
            event.preventDefault();  
                
        
                // Create variables from the form
              var uid = $("#uid").val();
              var amount = $("#withamount").val();
              var planid = $("#pid").val();
            $.ajax({  
                        url:"./processor/planwithdrawal",  
                        method:"POST",  
                        data:{uid:uid,amount:amount,planid:planid},  
                        dataType:"json",  
                        beforeSend:function(){  
                          $("#loader2").html('<img src="./assets/images/process.gif" width="100px" />');
                        $('.modal-body').css('opacity', '.5');
                        },  
                        success:function(data){  
                        
                        if(data=='success'){
                            
                             
                          setTimeout(function(){  
                            iziToast.success({
                                position: 'center',
                                messageColor: '#000',
                                maxWidth: '400px',
                                timeout: 7000,
                                title: 'success', 
                                message: 'Package Withdrawal Successful, Amount Withdrawn has been added to your Wallet',
                            });

                                setTimeout(function(){
                                  window.location = "./investments"
                                },7000);
                                $("#loader2").html('');
                                $('#withdraw_Modal').modal('hide'); 

                              },3000);

                        }
                        else if(data=='errorfund'){
                          
                          iziToast.error({
                              position: 'center',
                              messageLineHeight:'70px',
                              messageColor: 'white',
                              backgroundColor: '#e16468',
                              maxWidth: '400px',
                              timeout: 10000,
                              title: 'Error', 
                              message: 'No Fund to withdraw',
                          }); 
                          $('#withdraw_Modal').modal('hide'); 
                        }
                        else if(data=='savingerror'){
                          
                          iziToast.error({
                              position: 'center',
                              messageLineHeight:'70px',
                              messageColor: 'white',
                              backgroundColor: '#e16468',
                              maxWidth: '400px',
                              timeout: 10000,
                              title: 'Error', 
                              message: 'Savings Plan withdrawal is monthly!',
                          }); 
                          $('#withdraw_Modal').modal('hide'); 
                        }
                        else if(data=='mortgageerror'){
                          
                          iziToast.error({
                              position: 'center',
                              messageLineHeight:'70px',
                              messageColor: 'white',
                              backgroundColor: '#e16468',
                              maxWidth: '400px',
                              timeout: 10000,
                              title: 'Error', 
                              message: 'Mortgage Plan Withdrawal is not due',
                          }); 
                          $('#withdraw_Modal').modal('hide'); 
                        }
                        else if(data=='error'){
                          
                          iziToast.error({
                              position: 'center',
                              messageLineHeight:'70px',
                              messageColor: 'white',
                              backgroundColor: '#e16468',
                              maxWidth: '400px',
                              timeout: 10000,
                              title: 'Error', 
                              message: 'Try Again',
                          }); 
                          $('#withdraw_Modal').modal('hide'); 
                        }
                            
                        }  
                  }); 
         

   

}); 

    
});