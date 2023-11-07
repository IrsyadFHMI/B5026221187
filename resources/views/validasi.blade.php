<html lang="en">
<head>
    <title>187</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap">
    <script>
        function validateForm()
        {
            var nrp= document.getElementById ("nrp");
            var msg= document.getElementById ("msg");



            if (nrp.value == "") {
                nrp.focus()
                nrp.placeholder = "contoh : 5026221187"
                alert("NRP harus diisi!")
                return false ;
            }
            if (isNaN (nrp.value) == true) {
                nrp.focus()
                msg.innerHTML = "NRP harus angka!"; //innerHTML mengubah tulisan dalam tag
                return false;
            }

            if (nrp.value.length != 10)
            {
                alert("NRP harus 10 digit, anda memasukkan " + nrp.value.length + " digit");
                return false ;

            }


        }
    </script>
</head>
<body>
    <div class="container">
        <div class="jumbotron"> Form Validasi adalah mencegah pengiriman data ke server
            jika ada yang invalid/tidak sesuai constraint database</div>
            <script>
                function validate()// defaultnya return function adalah true
                {
                    console.log("baris 22")
                    return false;
                    console.log("baris 24")
                    return true;
                    console.log("baris 26")
                    return false;
                }
            </script>
            <form action="https://google.com" method="get" onsubmit="return validateForm();"> <!--on submit return true berarti bisa ke tujuan jika false tidak bisa lanjut ke tujuan dan berhenti di form itu-->
                <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" class="form-control" id="nrp">
                <div id ="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
            </form>
    </div>

</body>

</html>
