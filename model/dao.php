<?php 

	class DAO {
		private $dsn = 'mysql:dbname=students;host=127.0.0.1';
		private $user = 'root';
		private $password = 'root';
		private $pdo = null;

		function __construct(){
			try {
			    $this->pdo = new PDO($this->dsn, $this->user, $this->password);
			} catch (PDOException $e) {
			    echo 'Connection failed: ' . $e->getMessage();
			}
		}
		
		function select($sql){
			$stmt = $this->pdo->query($sql);
			return $stmt->fetchAll();
		}

		function getById($id){
			$stmt = $this->pdo->prepare("SELECT * FROM students WHERE id=:id");
			$stmt->execute(['id' => $id]); 
			return $stmt->fetch();
		}

		function store($name, $email, $birthday, $phone){
			$name = empty(trim($name)) ? null : $name;
			$email = empty(trim($email)) ? null : $email;
			$birthday = empty(trim($birthday)) ? null : $birthday;
			$phone = empty(trim($phone)) ? null : $phone;
			$sql = "INSERT INTO students(name, email, birthday, phone) VALUES (?,?,?,?)";
			$q = $this->pdo->prepare($sql);
			try {
				$q->execute(array($name, $email, $birthday, $phone));

				if($q->rowCount())
					echo 'Thêm sinh viên thành công!';
				else 
					echo 'Thêm sinh viên không thành công. Vui lòng thử lại!';
			} catch (Exception $e) {
				echo 'Thêm sinh viên không thành công. Vui lòng thử lại!';
			}
		}

		function update($id, $name, $email, $birthday, $phone){
			$name = empty(trim($name)) ? null : $name;
			$email = empty(trim($email)) ? null : $email;
			$birthday = empty(trim($birthday)) ? null : $birthday;
			$phone = empty(trim($phone)) ? null : $phone;
			$sql = "UPDATE students SET name = ?, email = ?, birthday = ?, phone = ? WHERE id = ?";
			$q = $this->pdo->prepare($sql);
			try {
				$q->execute(array($name, $email, $birthday, $phone, $id));

				if($q->rowCount())
					echo 'Cập nhật thông tin sinh viên thành công!';
				else 
					echo 'Cập nhật thông tin sinh viên không thành công. Vui lòng thử lại!';
			} catch (Exception $e) {
				echo 'Cập nhật thông tin sinh viên không thành công. Vui lòng thử lại!';
			}
		}

		function delete($id){
			$sql = "DELETE FROM `students` WHERE id = ?";
			$q = $this->pdo->prepare($sql);
			try {
				$q->execute(array($id));

				if($q->rowCount())
					echo 'Xóa sinh viên thành công!';
				else 
					echo 'Xóa sinh viên không thành công!';
			} catch (Exception $e) {
				echo 'Xóa sinh viên không thành công!';
			}
		}

		function __destruct(){
			$this->pdo = null;
		}
	}
 ?>