let radios = document.forms["forma"].elements["rb"];
let hiddenCode = document.querySelector('.hiddenCode');
let hiddenFile = document.querySelector('.hiddenFile');
for(radio in radios) {
	radios[radio].onclick = function() {
		if(this.value == "Code") {
			hiddenFile.classList.remove('toggleFile');
			hiddenCode.classList.add('toggleCode');
			
		}else if(this.value == "File") {
			hiddenCode.classList.remove('toggleCode');
			hiddenFile.classList.add('toggleFile');					
		}else{
			hiddenFile.classList.remove('toggleFile');
			hiddenCode.classList.remove('toggleCode');
		}
	}
}

