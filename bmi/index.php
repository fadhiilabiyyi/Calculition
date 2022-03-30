<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/bmi.css">

    <title>Calculition</title>
</head>
<body>
	<div class="container my-3">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid my-3">
				<h1 class="display-5 fw-bold">Calculition</h1>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a href="/Calculition/" class="nav-link">Calculator</a>
						</li>
						<li class="nav-item">
							<a href="/Calculition/bmi/" class="nav-link active">Body Mass Index</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="table-responsive">
			<table class="table table-borderless table-sm calculator">
				<tr>
                    <td colspan="4">
                        <input type="text" id="weight" class="form-control display-box" placeholder="Berat Badan (kg)" autocomplete="off">
                    </td>
				</tr>
                <tr>
                   <td colspan="4">
                        <input type="text" id="height" class="form-control display-box" placeholder="Tinggi Badan (cm)" autocomplete="off">
                    </td>
				</tr>
                <tr>
                    <td colspan="4">
                         <input type="text" id="result" class="form-control display-box" placeholder="" disabled>
                     </td>
                 </tr>
                <tr>
					<td colspan="4"><input type="button" class="button" value="Calculate" onclick="countBmi()"></td>
                </tr>
			</table>
		</div>
	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Custom Javascript -->
	<script src="../assets/javascript/script.js"></script>

</body>
</html>