$(document).ready(function(){
   $("#signupform").submit(function(){
       var userid = "GPP18";
       var firstname = $("#firstname").val();
       var lastname = $("#lastname").val();
       var phonenumber = $("#number").val();
       
       userid = userid + firstname[0] + lastname[0] + phonenumber;
       console.log(userid);
       $("#userid").val(userid);

   }); 
});