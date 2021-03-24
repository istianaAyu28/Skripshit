<html>
    <head><title>
        Grafik Nilai
        </title>
    <!-- <link rel="stylesheet" href="/Progres4/Progres4/MinuPutri/grafik.css"> -->
    <link rel="stylesheet" href="navbar.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    </head>
<body>
<div class="header">


<img src="/Progres4/Progres4/MinuPutri/resources/images/logo.png"> <h3>E-LEARNING MADRASAH IBTIDAIYAH NU "PUTRI" MALANG</h3></a></strong>

<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}
 
	.menu-malasngoding{
		background-color: whitesmoke;
	}
 
	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu-malasngoding > ul > li {
		float: left;
	}
 
	
	.menu-malasngoding li a {
		display: inline-block;
		color: green;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu-malasngoding li a:hover{
		background-color: #2525ff;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}
 
	.isi-dropdown a {
		color: #3c3c3c !important;
	}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>
 
 
<header class="header">
	<div class="menu-malasngoding">
 
		<ul>
			<li><a href="/Progres9/MinuPutri/E-Learning/admin/index.php">Home</a></li>
			<li class="dropdown"><a href="#">Daftar Nilai</a>
				<ul class="isi-dropdown">
					<li><a href="#">Grafik Nilai</a></li>
					<!-- <li><a href="#">Siswa 2</a></li>
					<li><a href="#">Siswa 3</a></li>
					<li><a href="#">Siswa 4</a></li> -->
				</ul>
			</li>
			<!-- <li><a href="#">Menu 4</a></li> -->
		</ul>
 
	</div>
</header>
 
<br/>
 




<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Informasi Nilai Latihan UN</h1>
    </div>
</div>

<?php
$koneksi     = mysqli_connect("localhost", "root", "", "db_elearning");

$sql = "SELECT * FROM tb_nilai_pilgan";
    $id_tq = $koneksi->query($sql);
    $presentase = $koneksi->query($sql);
?>

 <div style="height: 30%; width: 50%;">
    <canvas id="myChart" class="chart"></canvas>
</div>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',        //Tipe tampilan grafik, sobat bisa menggunakan tampilan bar, pie, line, radar dan sebagainya
    data: {
        
              labels: [<?php while($b = mysqli_fetch_array($id_tq)) { echo '"' . $b['id_tq'] . '",'; } ?>], //keterangan nama-nama label
        datasets: [{
            
            data: [<?php while($a = mysqli_fetch_array($presentase)) { echo $a['presentase'] . ', '; } ?>], //Data Grafik
            label:'nilai Siswa',
            backgroundColor: [
                '#6495ED',  //Warna Background
                'Cornflower Blue', //Warna Background
                'Cornflower Blue', //Warna Background
                '#F08080', //Warna Background
                '#F08080', //Warna Background
                '#F08080', //Warna Background
                'purple', //Warna Background
                'brown' //Warna Background
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

<br>
<br>
<p style="text-align:center"> <font color='blue'>Siswa Abdul</p>
<p style="text-align:center"> <font color='red'>Siswa Kamil</p>
    <?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'db_elearning'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM tb_nilai_pilgan';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>

        <style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>

        <form action="" method="post">
        <table class="data-table">
			<tr>
            <th>Id Topik Quiz</th>
	    <th>Id Siswa</th>
	<th>Soal Benar</th>
    <th>Soal Salah</th>
    <th>Soal Tidak dikerjakan</th>
     <th>Nilai</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>

    <td>'.$row['id_tq'].'</td>
    <td>'.$row['id_siswa'].'</td>
    <td>'.$row['benar'].'</td>
    <td>'.$row['salah'].'</td>
    <td>'.$row['tidak_dikerjakan'].' </td>
    <td>'.$row['presentase'].'</td>
                
		</tr>';
}
echo '
	</tbody>
</table>';


?>
 
