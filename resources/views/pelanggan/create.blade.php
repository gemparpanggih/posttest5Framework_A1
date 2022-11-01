<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Listrik Biru</title>
</head>
<body>
    <main>
        <div class="container py-4">
			<header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        <span class="fs-4">Tambah Data</span>
                    </a>
                    
                </div>

            </header>
			
			<form action="/pelanggan/store" method="post">
				{{ csrf_field() }}
					<!-- 2 column grid layout with text inputs for the first and last names -->

					<!-- Text input -->
					<div class="form-outline mb-4">
						<input type="text" required="required" name="username" class="form-control" />
						<label class="form-label">Username Pelanggan</label>
					</div>

					<!-- Text input -->
					<div class="form-outline mb-4">
						<input type="text" required="required" name="password" class="form-control" />
						<label class="form-label">Password Pelanggan</label>
					</div>

					<div class="form-outline mb-4">
						<input type="number" required="required" name="nometer" class="form-control" />
						<label class="form-label">Nomor Meteran</label>
					</div>

					<div class="form-outline mb-4">
						<input type="text" required="required" name="nama" class="form-control" />
						<label class="form-label">Nama Pelanggan</label>
					</div>

					<div class="form-outline mb-4">
						<input type="text" required="required" name="alamat" class="form-control" />
						<label class="form-label">Alamat Pelanggan</label>
					</div>

                    <div class="form-outline mb-4">
                        <select name="tarif_id" id="tarif_id" class="form-control">
                                @foreach ($tarifs as $tarif)
                                    <option value={{ $tarif->id }}>{{ $tarif->voltase}}</option>
                                @endforeach
                        </select>
                    </div>
					<input type="submit" value="Simpan Data" class="btn btn-primary btn-block mb-4">
			</form>
	

            <!-- Footer -->
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-github"></i>
                    </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>PT. Listrik Biru
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur nobis quisquam cum quos voluptatum, ullam illo nostrum non itaque repellendus.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home text-secondary"></i> Indoensia, Kec. Wakanda, Kel. Qidian</p>
                        <p>
                            <i class="fas fa-envelope text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 62 8 22 5294 0003</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 62 8 22 5294 0003</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                    © 2022 Copyright:
                    <a class="text-reset fw-bold" href="gemparpanggih.github.io">Gempar Panggih D. Putra</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>