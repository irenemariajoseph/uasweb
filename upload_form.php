<body>
    <div class="container">
        <form action="upload_proses.php" method="post" enctype="multipart/form-data">
            Judul:
            <input type="text" name="judul" required><br />
            <br>Foto:
            <input type="file" name="foto" required><br />
            <br><button type="submit">Upload</button>
        </form>
    </div>
</body>

<style>
    body {
        margin: 0 auto;
        width: 50%;
        background-color: #c0c0c0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        margin-top: 10rem;
        border-radius: 1rem;
        background-color: #FDFFDE;
        padding: 20px;

    }

    table {

        border-collapse: collapse;
    }

    th {
        border: 1px solid black;
        background-color: yellow;
        padding: 5px;
        Color: green;
    }

    td {
        width: 450px;
        text-align: center;
        border: 1px solid black;
        padding: 5px;
        margin: 5px 5px;
        background-color: white;
    }

    h1 {
        color: green;
    }
</style>