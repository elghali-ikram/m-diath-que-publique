// updat collection
const fileInput = document.querySelector(".fileInputupdat");
const icon = document.querySelector(".iconupdat");
const previewImage = document.querySelector(".previewImageupdat");
if (fileInput) {
    fileInput.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.addEventListener("load", function() {
            previewImage.style.display = "block";
            previewImage.setAttribute("src", this.result);
            icon.style.display = "none";
          });
          reader.readAsDataURL(file);
        } else {
          previewImage.style.display = "none";
          previewImage.setAttribute("src", "#");
          icon.style.display = "block";
        }
      });
    
}

// add collection
const fileInputs = document.getElementById("fileInput");
const icons = document.getElementById("icon");
const previewImages = document.getElementById("previewImage");
if (fileInputs) {
    fileInputs.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.addEventListener("load", function() {
            previewImages.style.display = "block";
            previewImages.setAttribute("src", this.result);
            icons.style.display = "none";
          });
          reader.readAsDataURL(file);
        } else {
          previewImages.style.display = "none";
          previewImages.setAttribute("src", "#");
          icons.style.display = "block";
        }
      });
    
}

// HIDE SHOW PASSWORD SIGNUP
 const togglePassword = document.querySelector('#togglePassword');
 const password = document.querySelector('#password');

 togglePassword.addEventListener('click', function () {
   // toggle the type attribute
   const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
   password.setAttribute('type', type);
   // toggle the eye slash icon
   const icon=this.querySelector("i")
   icon.classList.toggle('fa-eye');
});
// HIDE SHOW CONFIRM PASSWORD SIGNUP
const togglePasswordconfirm = document.querySelector('#togglePasswordconfirm');
const passwordconfirm = document.querySelector('#confirmpassword');

togglePasswordconfirm.addEventListener('click', function () {
  // toggle the type attribute
  const type = passwordconfirm.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordconfirm.setAttribute('type', type);
  // toggle the eye slash icon
  const iconconfirm=this.querySelector("i")
  iconconfirm.classList.toggle('fa-eye');
});
// FUNCTION FOR ERROR AND SUCCES
function setErrorFor(element, errorMessage) {
    const parent = element.closest('.formvalid');
    if(parent.classList.contains('formvalid-success')){
        parent.classList.remove('formvalid-success');
    }
    parent.classList.add('formvalid-error');
    const small = parent.querySelector('small');
    small.textContent = errorMessage;
  }
  function setSuccessFor(element){
    const parent = element.closest('.formvalid');
    if(parent.classList.contains('formvalid-error')){
        parent.classList.remove('formvalid-error');
    }
    parent.classList.add('formvalid-success');
    const small = parent.querySelector('small');
    small.textContent = ' ';
  }
// VALIDATION FORM SIGNUP
const form_signup = document.querySelector('#signupform');
const name_signup = document.querySelector('#name');
const cin_signup = document.querySelector("#cin");
const phone_signup = document.querySelector("#phone");
const email_signup = document.querySelector("#email");
const adresse_signup = document.querySelector("#adresse");
const type_signup =document.querySelector('#type');
const nickname_signup =document.querySelector('#nickname');
const birthdate_signup =document.querySelector('#bithdate');
const password_signup =document.querySelector('#password');
const confirmpassword_signup =document.querySelector('#confirmpassword');
form_signup.addEventListener('submit', (event)=>{
  validate_Form_signup();
  console.log(isFormValid_signup());
  if(isFormValid_signup()==true){
      form_signup.submit();
   }else {
       event.preventDefault();
   }

});

function isFormValid_signup(){
  const inputContainers = form_signup.querySelectorAll('.formvalid');
  let result = true;
  inputContainers.forEach((container)=>{
      if(container.classList.contains('formvalid-error')){
          result = false;
      }
  });
  return result;
}

function validate_name()
{
    if(name_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(name_signup);
    } else {
        setErrorFor(name_signup, 'champ obligatoire');
    }
}
function validate_cin()
{
    if(cin_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(cin_signup);
    } else {
        setErrorFor(cin_signup, 'champ obligatoire');
    }
}
function validate_phone()
{
    if(phone_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(phone_signup);
    } else {
        setErrorFor(phone_signup, 'champ obligatoire');
    }
}
function validate_email()
{
    if(email_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(email_signup);
    } else {
        setErrorFor(email_signup, 'champ obligatoire');
    }
}
function validate_adress()
{
    if(adresse_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(adresse_signup);
    } else {
        setErrorFor(adresse_signup, 'champ obligatoire');
    }
}
function validate_type()
{
    if(type_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(type_signup);
    } else {
        setErrorFor(type_signup, 'champ obligatoire');
    }
}
function validate_nickname()
{
    if(nickname_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(nickname_signup);
    } else {
        setErrorFor(nickname_signup, 'champ obligatoire');
    }
}
function validate_birthdate()
{
    if(birthdate_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(birthdate_signup);
    } else {
        setErrorFor(birthdate_signup, 'champ obligatoire');
    }
}
function validate_password()
{
    if(password_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(password_signup);
    } else {
        setErrorFor(password_signup, 'champ obligatoire');
    }
}
function validate_confirmpassword()
{
    if(confirmpassword_signup.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(confirmpassword_signup);
    } else {
        setErrorFor(confirmpassword_signup, 'champ obligatoire');
    }
}
function validate_Form_signup()
{
    validate_name();
    validate_adress();
    validate_birthdate();
    validate_cin();
    validate_email();
    validate_phone();
    validate_type();
    validate_confirmpassword();
    validate_password();
    validate_nickname();

}
