<?php
if (isset($_POST["Calcular"])) {
    $principal = $_POST["principal"];
    $tasaInteres = $_POST["tasaInteres"];
    $plazo = $_POST["plazo"];
    if ($principal == ""): ?>
        <?php echo '<script language="javascript">alert("*Ingresar el Monto");</script>'; ?>
    <?php elseif ($tasaInteres == ""): ?>
        <?php echo '<script language="javascript">alert("*Ingresar la tasa");</script>'; ?>
    <?php else: ?>
        <?php if (isset($_POST['Calcular'])): ?>
            <div id="result">
                <script type="text/javascript">
                    window.onload = function () {
                        OpenBootstrapPopup();
                    };
                    function OpenBootstrapPopup() {
                        $("#myModal").modal('show');
                    }
                </script>
            </div>
        <?php endif; ?>

    <?php endif; ?>
<?php }
?>