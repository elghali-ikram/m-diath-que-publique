const form_addcollection = document.querySelector('.myFormadd');
const title_addcollection = document.querySelector('.titleadd');
const author_addcollection = document.querySelector(".authoradd");
const editiondate_addcollection = document.querySelector(".editiondateadd");
const datepurchase_addcollection = document.querySelector(".datepurchaseadd");
const state_addcollection = document.querySelector(".stateadd");
const status_addcollection =document.querySelector('.statusadd');
const type_addcollection =document.querySelector('.typeadd');
if(form_addcollection)
{
    form_addcollection.addEventListener('submit', (event)=>{
        validate_Form_addcollection();
        console.log(isFormValid_addcollection());
        if(isFormValid_addcollection()==true){
            form_addcollection.submit();
         }else {
             event.preventDefault();
         }
      
      });

}


function isFormValid_addcollection(){
  const inputContainers = form_addcollection.querySelectorAll('.formvalid');
  let result = true;
  inputContainers.forEach((container)=>{
      if(container.classList.contains('formvalid-error')){
          result = false;
      }
  });
  return result;
}

function validate_title_addcollection()
{
    if(title_addcollection.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(title_addcollection);
    } else {
        setErrorFor(title_addcollection, 'champ no valid');
    }
}
function validate_author_addcollection()
{
    if(author_addcollection.value.match(/[a-zA-Z]{3,30}/g)) {
        setSuccessFor(author_addcollection);
    } else {
        setErrorFor(author_addcollection, 'champ no valid');
    }
}
function validate_editiondate_addcollection()
{
    if(editiondate_addcollection.value.match(/^\d{4}-\d{2}-\d{2}$/g)) {
        setSuccessFor(editiondate_addcollection);
    } else {
        setErrorFor(editiondate_addcollection, 'champ no valid');
    }
}
function validate_datepurchase_addcollection()
{
    if(datepurchase_addcollection.value.match(/^\d{4}-\d{2}-\d{2}$/g)) {
        setSuccessFor(datepurchase_addcollection);
    } else {
        setErrorFor(datepurchase_addcollection, 'champ no valid');
    }
}
function validate_state_addcollection()
{
    if(state_addcollection.selectedIndex>0) {
        setSuccessFor(state_addcollection);
    } else {
        setErrorFor(state_addcollection, 'champ valid valid');
    }
}
function validate_type_addcollection()
{
    if(type_addcollection.selectedIndex>0) {
        setSuccessFor(type_addcollection);
    } else {
        setErrorFor(type_addcollection, 'champ no valid');
    }
}
function validate_status_addcollection()
{
    if(status_addcollection.selectedIndex>0) {
        setSuccessFor(status_addcollection);
    } else {
        setErrorFor(status_addcollection, 'champ no valid');
    }
}

function validate_Form_addcollection()
{
    validate_title_addcollection();
    validate_state_addcollection();
    validate_author_addcollection();
    validate_datepurchase_addcollection();
    validate_editiondate_addcollection();
    validate_type_addcollection();
    validate_status_addcollection();
}

