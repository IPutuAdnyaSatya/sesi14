<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan JQuery</title>
</head>
<body>
    <h3>judul</h3>
    <div id = "pesan1">Isi ID pesan1</div>
    <div class = "pesan1">Isi Class pesan1</div>

    <P>Isi paragraph</p>
    <span> Isi kalimat</span>
    <h6>Isi judul</h6>

    <input type="text">
    
    <script src= "jquery-3.7.0.min.js"></script>
    <script>
        $(function(){
            $("h3").html("isi dari judul di ganti");
            $("#pesan").html("pesan 1 di ubah");
            $(".pesan1").html("Mengubah isi dari class");
            $("p").html("wkwk")
            $("span").html("janoo")
            $("h6").html("janoo")

        });
    </script>

</body>
</html>