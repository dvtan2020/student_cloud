const messageModal = document.getElementById('message-modal');
const loading = document.getElementById('loading');
const messageContent = messageModal.querySelector(".modal-body>p");
const table = document.getElementById('table');
const tbody = table.getElementsByTagName('tbody')[0];

function updateTable(){
	loading.style.display = "block";
	let http = new XMLHttpRequest();
	http.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            tbody.innerHTML = this.responseText;
	            setTimeout(function() {
				  	loading.style.display = "none";
				}, 500);
       }
    };
    http.open("GET", "controller/getall.php", true);
    http.send();
}

function add(form){
	let name = form.querySelector("#name").value;
	let email = form.querySelector("#email").value;
	let birthday = form.querySelector("#birthday").value;
	let phone = form.querySelector("#phone").value;

	loading.style.display = "block";

	let http = new XMLHttpRequest();

	http.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	            messageContent.textContent = this.responseText;
	            updateTable();
	            setTimeout(function() {
					loading.style.display = "none";
					messageModal.style.display = "block";
				}, 500);
				return false;
       	}
    };
    http.open("POST", "controller/store.php", true);
 	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.send('name='+name+'&email='+email+'&birthday='+birthday+'&phone='+phone+"&add=add");

    form.closest(".modal").style.display = "none";

	return false;
}

function del(id){
	loading.style.display = "block";
	let http = new XMLHttpRequest();
	http.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            messageContent.textContent = this.responseText;
	            updateTable();
	            setTimeout(function() {
					loading.style.display = "none";
					messageModal.style.display = "block";
				}, 500);
       }
    };
    http.open("POST", "controller/delete.php", true);
 	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.send('id='+id+'&delete=delete');
}

function update(form){
	let id = form.querySelector("#id").value;
	let name = form.querySelector("#name").value;
	let email = form.querySelector("#email").value;
	let birthday = form.querySelector("#birthday").value;
	let phone = form.querySelector("#phone").value;

	loading.style.display = "block";
	let http = new XMLHttpRequest();
	http.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            messageContent.textContent = this.responseText;
	            updateTable();
	            setTimeout(function() {
					loading.style.display = "none";
					messageModal.style.display = "block";
				}, 500);
       }
    };
    http.open("POST", "controller/update.php", true);
 	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('id='+id+'&name='+name+'&email='+email+'&birthday='+birthday+'&phone='+phone+'&update=update');
    let updateModal = document.getElementById('update-modal');
	updateModal.style.display = "none";
    return false;
}