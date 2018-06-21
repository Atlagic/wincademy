let finishCheck = document.getElementById('finishCheck');
let nextEx = document.getElementById('nextEx');
finishCheck.onchange = function() {
  if(finishCheck.checked){
	nextEx.classList.remove('isDisabled');
  }else{
	nextEx.classList.add('isDisabled');
  }
};
nextEx.onclick = function() {
  document.getElementById('finishCheck').checked = false; 
  document.getElementById('nextEx').classList.add('isDisabled');
};
