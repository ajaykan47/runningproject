$(document).ready(function(){$("#verifyEmailId").validate({rules:{user_emailid:{required:true,email:true}},messages:{user_emailid:{required:"Enter the email id",email:"Enter the valid email id"}}});$("#verifyNo").validate({rules:{verify_contact_number:{required:true,intlTelNumber:true,}},messages:{user_contact_number:{required:"Enter the contact number"}}});$.validator.addMethod("intlTelNumber",function(b,a){return this.optional(a)||$(a).intlTelInput("isValidNumber")},"Please enter a valid Number");$("#verifyOTP").validate({rules:{verify_OTP:{required:true}},messages:{verify_OTP:{required:"Enter the OTP"}}})});$(document).ready(function(){$("#showQuotationForm").click(function(){$(".visibleQuotationForm").show()});$(".quotationFormHide").click(function(){$(".visibleQuotationForm").hide()})});