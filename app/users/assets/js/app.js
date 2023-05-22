$(document).ready(function(){
    
    
    function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
  
    navigator.clipboard.writeText(copyText.value);
    alert("Copied the text: " + copyText.value)
  
              };
    
             
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
        $("#userIDError").html("");
        $('#userID').removeClass('input-error');
      
     });
              
              $("#update-user").click(function(j){
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
                  else if($("#phone").val() === ""){
                    $('#phone').addClass('input-error');
                     $("#phoneError").html("* Phone number is required.");
                    return false;         
                  }else{
                      
                        var form = $('#user_update_form')[0];
                         var formData = new FormData(form);
                       $.ajax({  
                            url:"./processor/userUpdate",  
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
                    var userid = document.getElementById("userid").value;
                    $.ajax({  
                        url:"./processor/updatepass",  
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