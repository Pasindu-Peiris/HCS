
//Password confirmation


var pass_check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('password_warning').style.color = 'green';
      document.getElementById('password_warning').innerHTML = 'Password matching';
    } else {
      document.getElementById('password_warning').style.color = 'red';
      document.getElementById('password_warning').innerHTML = 'not matching';
    }
  }

  const errorElement = document.getElementById('error')

  form.addEventListener('submit', (e) => {
  let messages = []
 
  if(password.value.length <= 6) {
  messages.push('Password must be longer than 6 characters')
  }
  if(messages.length > 0) {
  e.preventDefault()
  errorElement.innerText =messages.join(', ')
  }
  })
