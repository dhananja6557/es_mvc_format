<?php $this->view('incdocs/header'); ?>

<div class="container">
	<h1>
		<i class="fa fa-folder-open"></i>
		Home Page Design
	</h1>
	<div class="mt-3">
		<?php
			$db = new Database();

			$conn = $db->connect();

			$query = "SELECT * FROM users";

			$datas = $conn->query($query);

			while ($data = $datas->fetch_assoc())
			{
				echo $data['firstname'] . ' ' . $data['lastname'] . "<br>";
			}
		?>
	</div>
</div>
<?php $this->view('incdocs/footer'); ?>