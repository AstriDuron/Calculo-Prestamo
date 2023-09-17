<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Calculadora de Cuota Mensual</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="h1 fw-light">Calculadora Cuota Mensual</div>
                        </div>

                        <form method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">

                            <!-- Monto Input -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Monto del préstamo (P):</label>
                                <input type="text" value="<?php echo isset($_POST['principal']) ? $_POST['principal'] : ''; ?>"
                                    onkeypress="if(event.keyCode < 46 || event.keyCode > 57 || event.keyCode == 47) event.returnValue = false;"
                                    class="form-control" id="principal" aria-describedby="emailHelp" name="principal">
                            </div>

                            <!-- Tasa Input -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tasa de interés anual (%):</label>
                                <input type="text" class="form-control" value="<?php echo isset($_POST['tasaInteres']) ? $_POST['tasaInteres'] : ''; ?>"
                                    onkeypress="if(event.keyCode < 46 || event.keyCode > 57 || event.keyCode == 47) event.returnValue = false;"
                                    id="tasaInteres" name="tasaInteres">
                            </div>
                            <!-- Plazo Input -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Plazo:</label>
                                <select class="form-select" id="plazo" name="plazo" aria-label="Default select example">
                                    <option value="3">3 Meses</option>
                                    <option value="6">6 Meses</option>
                                    <option value="12">12 Meses</option>
                                    <option value="18">18 Meses</option>
                                    <option value="24">24 Meses</option>
                                    <option value="36">36 Meses</option>
                                    <option value="48">48 Meses</option>
                                    <option value="60">60 Meses</option>
                                </select>
                            </div>
                            <!-- Submit button -->
                            <div class="d-grid">
                                <button type="submit" name="Calcular" value="Calcular"
                                    class="btn btn-primary">Calcular</button>
                            </div>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Resultado</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-primary">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Monto</th>
                                                        <th scope="col">Plazo</th>
                                                        <th scope="col">Tasa</th>
                                                        <th scope="col">Cuota mensual</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <?php echo number_format($principal, 2); ?>
                                                        </th>
                                                        <td>
                                                            <?php echo ($plazo); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo number_format($tasaInteres, 2); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo number_format($cuota, 2); ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" name="Cerrar" class="btn btn-danger"
                                                data-dismiss="modal" value="Cerrar" class="close"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <?php
                    ?>
</body>

<?php if (isset($_POST['Cerrar'])): ?>

    <script type="text/javascript">
        window.onload = function () {
            CloseBootstrapPopup();
        };
        function CloseBootstrapPopup() {
            $("#myModal").modal('hide');
        }
    </script>
<?php endif; ?>

</html>