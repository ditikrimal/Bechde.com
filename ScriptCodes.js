var a=0;
function dropDown(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
  }
function passValidation(){
    if (document.getElementById('id_password').value == document.getElementById('id_conPassword').value) {
      document.getElementById('validationSpan').style.color = 'green';
      document.getElementById('validationSpan').innerHTML = 'Password Matched';
    } else {
      document.getElementById('validationSpan').style.color = 'red';
      document.getElementById('validationSpan').innerHTML = 'Password did not match';
      return false;
    }
  }
  function passValidationAlert(){
    if (document.getElementById('id_password').value != document.getElementById('id_conPassword').value) {
      alert("Your Password and Confirm Password didn't Match");
      window.location.replace('Signup.php');
      return false;
    }
  }
function cartSpan(){

 document.getElementById('checkout_items').style= "display: flex;flex-direction: column;justify-content: center;align-items: center;position: absolute;top: -12px;left: 22px;width: 14px;height: 14px;border-radius: 50%;background: #fe4c50;font-size: 8px;color: #ffffff;";
document.getElementById('checkout_items').innerHTML=cartQTY();

}
function cartQTY(){
  
   a=a+1;
   
return a;
}
function dropCart(){
  const toggleMenu = document.querySelector('.dropCart');
  toggleMenu.classList.toggle('active');
}