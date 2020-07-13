
<!DOCTYPE html>
<html>
<head>
	<title>Students Management</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
	<script src="https://kit.fontawesome.com/c57be95d0f.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="home"></div>
	<header>
		<a href="#home" class="logo">Students</a>
		<ul>
			<li onclick="document.getElementById('home').scrollIntoView({behavior: 'smooth'});"><a>Home</a></li>
			<li onclick="document.getElementById('management').scrollIntoView({behavior: 'smooth'});"><a>Management</a></li>
			<li onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'});"><a >About</a></li>
		</ul>
	</header>
	<section class="banner">
		<div class="banner-content">	
			<h1>Welcome to website</h1>
			<span>Students Management</span>
			<button onclick="document.getElementById('management').scrollIntoView({behavior: 'smooth'});">Manage Students</button>
		</div>
	</section>
	<section id="management" class="management">
		<div class="title"><h2>Management</h2></div>

		<button id="btn-add" class="btn btn-primary">Thêm sinh viên mới</button>
		<br>
		<br>
		<div class="wrap">
			<table id="table" class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ tên</th>
						<th>Email</th>
						<th>Ngày sinh</th>
						<th>Điện thoại</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</section>

	<section id="about" class="about">
		<div class="title">
			<h2>About</h2>
		</div>
		<div class="card-list">
			<div class="card">
				<div class="card-image">
					<img src="./asset/images/t.jpg">
				</div>
				<div class="card-text">
					<h3>Tân</h3>
					<br>
					<p>Họ và tên: Nguyễn Chế Thanh Tân.<br> Lớp 16CNTT3</p>
				</div>
			</div>
			
			<div class="card">
				<div class="card-image">
					<img src="./asset/images/p.png">
				</div>
				<div class="card-text">
					<h3>Phúc</h3>
					<br>
					<p>Họ và tên: Nguyễn Thanh Phúc.<br> Lớp 16CNTT3</p>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<img src="./asset/images/k.jpg" style="margin-top: -55px;">
				</div>
				<div class="card-text">
					<h3>Khương</h3>
					<br>
					<p>Họ và tên: Trương Công Khương.<br> Lớp 16CNTT3</p>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer-left">
			<span>Students Management</span>
		</div>
		<div class="footer-right">
			<span>Cloud Computing</span>
		</div>
	</footer>

	<div id="my-modal" class="modal">
	    <div class="modal-content">
		      <div class="modal-header">
			        <span class="close" onclick="closeModal(this)">&times;</span>
			        <h2>Thông tin sinh viên mới</h2>
		      </div>
		      <div class="modal-body">
		      		<form id="add-form" method="POST">
		      			<div class="form-group">
			      			<label for="name">Họ Tên</label>
			      			<input type="text" class="form-control" placeholder="Họ tên" id="name" name="name"
			      			maxlength="32" minlength="2" 
			      			required>
		      			</div>
		      			<div class="form-group">
			      			<label for="email">Email</label>
			      			<input type="email" class="form-control" placeholder="name@example.com" id="email" name="email" required>
		      			</div>

		      			<div class="form-group">
			      			<label for="birthday">Ngày sinh</label>
			      			<input type="date" class="form-control"  id="birthday" name="birthday" min="1900-01-01" max="2020-06-30">
		      			</div>

		      			<div class="form-group">
			      			<label for="phone">Số điện thoại</label>
			      			<input type="text" class="form-control" placeholder="Số điện thoại" id="phone" name="phone">
		      			</div>
		      			
		      			<div class="modal-btn" >

				      		<button type="submit" class="btn btn-success" name="add">Thêm</button>
		      			<button type="button" class="btn btn-secondary" onclick="this.closest('form').reset();">Reset</button>
				      		<button type="button" class="btn btn-primary cancel" onclick="closeModal(this)">Đóng</button>
			      		</div>
		      		</form>
		      </div>
		      <div class="modal-footer">
		        <h3></h3>
		      </div>
	    </div>
	 </div>

	<div id="update-modal" class="modal">
	    <div class="modal-content">
		      <div class="modal-header">
			        <span class="close" onclick="closeModal(this)">&times;</span>
			        <h2>Thông tin sinh viên</h2>
		      </div>
		      <div class="modal-body">
		      		<form id="update-form" method="POST">
		      			<input type="text" id="id" name="id" hidden="hidden">
		      			<div class="form-group">
			      			<label for="name">Họ Tên</label>
			      			<input type="text" class="form-control" placeholder="Họ tên" id="name" name="name"
			      			maxlength="32" minlength="2" 
			      			required>
		      			</div>
		      			<div class="form-group">
			      			<label for="email">Email</label>
			      			<input type="email" class="form-control" placeholder="name@example.com" id="email" name="email" required>
		      			</div>

		      			<div class="form-group">
			      			<label for="birthday">Ngày sinh</label>
			      			<input type="date" class="form-control" id="birthday" name="birthday" min="1900-01-01" max="2020-06-30">
		      			</div>

		      			<div class="form-group">
			      			<label for="phone">Số điện thoại</label>
			      			<input type="text" class="form-control" placeholder="Số điện thoại" id="phone" name="phone">
		      			</div>
		      			
		      			<div class="modal-btn" >
				      		<button type="submit" class="btn btn-success ok" name="update">Cập nhật</button>
		      				<button type="button" class="btn btn-secondary" onclick="this.closest('form').reset();">Reset</button>
				      		<button type="button" class="btn btn-primary cancel" onclick="closeModal(this)">Đóng</button>
			      		</div>
		      		</form>
		      </div>
		      <div class="modal-footer">
		        <h3></h3>
		      </div>
	    </div>
	 </div>

	<div id="delete-modal" class="modal">
	    <div class="modal-content">
		      <div class="modal-header">
			        <span class="close" onclick="closeModal(this)">&times;</span>
			        <h2>Xác nhận xóa sinh viên</h2>
		      </div>
		      <div class="modal-body">
		      		<p>Bạn có chắc muốn xóa sinh viên? </p>
		      		<br>
			      	<div class="modal-btn">
			      		<button class="btn btn-danger ok">Xóa</button>
			      		<button class="btn btn-primary cancel" onclick="closeModal(this)">Hủy</button>
		      		</div>
		      </div>
		      <div class="modal-footer">
		        <h3></h3>
		      </div>
	    </div>
	</div>



	<div id="message-modal" class="modal">
	    <div class="modal-content">
		      <div class="modal-header">
			        <span class="close" onclick="closeModal(this)">&times;</span>
			        <h2>MESSAGE</h2>
		      </div>
		      <div class="modal-body">
		      		<p></p>
		      		<br>
			      	<div class="modal-btn" >
			      		<button class="btn btn-primary cancel" onclick="closeModal(this)">Đóng</button>
		      		</div>
		      </div>
		      <div class="modal-footer">
		        <h3></h3>
		      </div>
	    </div>
	</div>

	<div id="loading" class="loading-container">
	    <div class="loading">
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	      <div class="obj"></div>
	    </div>
    </div>

	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
	</script>
	


	<script type="text/javascript" src="./asset/js/action.js"></script>
	<!-- modal -->
	<script type="text/javascript">
		// Get DOM Elements
		const addModal = document.querySelector('#my-modal');
		const modalAddBtn = document.querySelector('#btn-add');

		// Events
		modalAddBtn.onclick = () => {
			const addModal = document.querySelector('#my-modal');
			addModal.style.display = "block";
		}
		window.addEventListener('click', outsideClick);

		// Close
		function closeModal(child) {
			const modal = child.closest(".modal");
		  	modal.style.display = 'none';
		}

		// Close If Outside Click
		function outsideClick(e) {
		  if (e.target == addModal) {
		    addModal.style.display = 'none';
		  }
		}

		function confirmDele(id, name){
			let delModal = document.getElementById('delete-modal');
			let contentPTag = delModal.querySelector(".modal-body>p");

			let okBtn = delModal.querySelector(".modal-btn>.ok");

			window.addEventListener('click', function(e){
				if (e.target == delModal) {
					delModal.style.display = 'none';
				}
			});

			okBtn.onclick = () => {
				del(id);
				delModal.style.display = 'none';
			};

			contentPTag.textContent = `Bạn có chắc muốn xóa sinh viên: ${name} ? `;
			delModal.style.display = 'block';
		}
	</script>
	<script type="text/javascript">
		window.onload = () => {
			updateTable();
		}

		const addForm = document.getElementById('add-form');
		addForm.onsubmit = () => {return add(addForm);};

		const updateForm = document.getElementById('update-form');
		updateForm.onsubmit = () => {return update(updateForm);};


			
			function confirmUpdate(id){
				let updateModal = document.getElementById('update-modal');

				window.addEventListener('click', function(e){
					if (e.target == updateModal) {
						updateModal.style.display = 'none';
					}
				});
				updateModal.style.display = 'block';
				get(id, updateModal);
			}



		function get(id,form){
			let contentPTag = form.querySelector(".modal-body>p");

			let http = new XMLHttpRequest();

			http.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			        if(this.responseText != 'false'){
			        	let student = JSON.parse(this.responseText);
			        	form.querySelector("#id").value = student.id;
			        	form.querySelector("#name").value = student.name;
			        	form.querySelector("#email").value = student.email;
			        	form.querySelector("#birthday").value = student.birthday;
			        	form.querySelector("#phone").value = student.phone;
			        }
		       	}
		    };
		    http.open("GET", "controller/get.php?id="+id, true);
		    http.send();
		}
	</script>
</body>
</html>