//Validate Email Function 

function validateEmail(email) {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if (filter.test(email)) {
    return true;
  } else {
    return false;
  }
}

function updateUser(e){
  e.preventDefault();
  let name = $('#name').val();
  let email = $('#email').val();

  if(name == ''){
    $('#errorName').html("Name Can't be Blank");
  }
  if(email == ''){
    $('#errorEmail').html("Email Can't be Blank");
  } else if(!validateEmail(email)){
    $('#errorEmail').html("Email Is Not Valid");
  } else {
    $.ajax({
        url: './includes/updateuser.process.php',
        method: "POST",
        data: $('#updateUserForm').serialize(),
        beforeSend: function () {
          $('#updateUserBtn').text('Sending..');
        }

      })
      .done(function (data) {
        $('#name').val(name);
        $('#email').val(email);
        $('#responseUser').html('<spna class="text-success">' + data + '</span>');
        
        console.log(data);
        setTimeout(function () {
          $('#responseUser').fadeOut('slow');
          $('#updateUserBtn').text('Save Changes');
          $('#updateUserBtn').css({
            "background-color": '#00C851 !important'
          });
        }, 3000);
      })
      .fail(function () {
        console.log('Error!');
      })
  }
  return false;
}
function changePassword(e) {
  e.preventDefault();
  let oldpwd = $('#oldpwd').val();
  let newpwd = $('#newpwd').val();

  if (oldpwd == '') {
    $('#errorOldPwd').html("Enter Old Password To Varify");
  }
  if (newpwd == '') {
    $('#errorNewPwd').html("Password Can't be Blank");
  } else {
    $.ajax({
        url: './includes/changepassword.process.php',
        method: "POST",
        data: $('#changePasswordForm').serialize(),
        beforeSend: function () {
          $('#changePasswordBtn').text('Sending..');
        }

      })
      .done(function (data) {
        $('#responsePwd').html('<spna class="text-success">' + data + '</span>');
        
        console.log(data);
        setTimeout(function () {
          $('#responsePwd').fadeOut('slow');
          $('#changePasswordBtn').text('Save Changes');
          $('#changePasswordBtn').css({
            "background-color": '#00C851 !important'
          });
        }, 3000);
      })
      .fail(function () {
        console.log('Error!');
      })
  }
  return false;
}
function sendContactForm(e){
  e.preventDefault();
  let name = $('#name').val();
  let phone = $('#phone').val();
  let email = $('#email').val();
  let message = $('#message').val();

  if(name == ''){
    $('#errorName').html('<spna class="text-danger"> Name Can Not Be Blank </span>');
    return false;
  }
  if(phone == ''){
    $('#errorPhone').html('<spna class="text-danger"> Phone Can Not Be Blank </span>');
    return false; 
  }
  if(email == ''){
    $('#errorEmail').html('<spna class="text-danger"> Email Can Not Be Blank </span>'); 
    return false;
  }
  if(message == ''){
    $('#errorMessage').html('<spna class="text-danger"> Message Can Not Be Blank </span>');
    return false; 
  } 

    $.ajax({
        url: './includes/contact.process.php',
        method: "POST",
        data: $('#contactForm').serialize(),
        beforeSend: function () {
          $('#sendContactFormBtn').text('Sending..');
        }

      })
      .done(function (data) {
        $('#errorName').html(' ');
        $('#errorPhone').html(' ');
        $('#errorEmail').html(' ');
        $('#errorMessage').html(' ');
        $('#responseContactForm').html(data);
        
        console.log(data);
        setTimeout(function () {
          $('#responseContactForm').fadeOut('slow');
          $('#errorName').fadeOut('slow');
          $('#errorPhone').fadeOut('slow');
          $('#errorEmail').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
          $('#sendContactFormBtn').text('Sent');
        }, 3000);
      })
      .fail(function () {
        console.log('Error!');
      })
  return false;
}

// Script For Tabs
$(document).ready(function(){
  $('#myTab a').on('click', function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  // ADD Event Listener
  $('#updateUserBtn').on('click', updateUser);
  $('#changePasswordBtn').on('click', changePassword);
  $('#sendContactFormBtn').on('click', sendContactForm);
});