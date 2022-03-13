<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Data Mahasiswa </title>
    <style>
    * {
        box-sizing: border-box;
        }
        .tag-input {
        color:red;
        }

        input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        }

        label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        }

        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        input[type=button] {
        background-color: aqua;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
        }

        input[type=button]:hover {
        background-color: lightblue;
        }


        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }

        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }

        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
    </style>
</head>
<body>
    <h2>Upload Data Mahasiswa</h2>
    <p>Aplikasi pendataan mahasiswa.</p>

    <div class="container">
    <form action="/action_page.php" id="form_upload">
    <div class="row">
        <div class="col-25">
        <label for="fname">Nama</label>
        </div>
        <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Isi nama lengkap.." required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="lname">Gender</label>
        </div>
        <div class="col-75">
        <input type="radio" name="gender" value="1" required>
        <label for="age1">Perempuan</label>
        <input type="radio" name="gender" value="0">
        <label for="age1">Laki-laki</label><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="fname">Tempat Lahir</label>
        </div>
        <div class="col-75">
        <input type="text" id="fname" name="birthplace" placeholder="Isi tempat lahir.." required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="subject">Tanggal Lahir</label>
        </div>
        <div class="col-75">
        <input type="date" id="birthday" name="birthday" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="subject">Gambar</label>
        </div>
        <div class="col-75">
        <input type="file" id="image" name="image" required accept=".jpg,.jpeg,.png">
        <p class="tag-input">*file (.jpg, .jpeg atau .png)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="subject">Sertifikat</label>
        </div>
        <div class="col-75">
        <input type="file" id="sertifikat" name="sertifikat" accept=".zip,.rar">
        <p class="tag-input">*file (.zip atau .rar)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="subject">CV (Curriculum Vitae)</label>
        </div>
        <div class="col-75">
        <input type="file" id="cv" name="cv" accept=".pdf">
        <p class="tag-input">*file: (.pdf)</p>
        </div>
    </div>
    <br>
    <div class="row">
        <input type="button" onclick="resetForm()" value="Reset">
        <input type="submit" value="Submit">
    </div>
    </form>
    </div>

    <script>
        function resetForm() {
        document.getElementById("form_upload").reset();
        }
    </script>
</body>
</html>