<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan JQuery 02</title>
</head>
<body>
    <h3>JUDUL</h3>
    <div>
        <button type="button" class="C1">persegi</button>
        <button type="button" class="C2">segitiga</button>
    </div>
    <div id="persegi">
        <div>
            Nilai Panjang
                <input type="number" class="PJ">
        </div>
        <div>
            NIlai Lebar
                <input type="number" class="LB">
        </div>  
        <div> 
            <button type="button" class="HitungPersegi"> Hitung Luas </button>     
        </div>
    </div>
    <div id="segitiga">
        <div>
            Nilai Alas
                <input type="number" class="AL">
    </div>
    <div>
        NIlai Tinggi
        <input type="number" class="TG">
    </div>
    <div>
        <button type="button" class="HitungSegitiga"> HItung Luas</button>
    </div>
    </div>
    <div id="hasil"></div>

    <script src="jquery-3.7.0.min.js"></script>
    <script>
        $(function(){
            $("#persegi").hide();
            $("#segitiga").hide();

            $(".C1").click(function(){
                $("h3").html("Hitung Luas Persegi");
                $("#segitiga").hide(1000);
                $("#persegi").show(1000);
                $("#hasil").html("");
            });
            $(".C2").click(function(){
                $("h3").html("Hitung Luas Segitiga");
                $("#persegi").hide(1000);
                $("#segitiga").show(1000);
                $("#hasil").html("");
             });
            $(".HitungPersegi").click(function(){
                //input
                let P = $(".PJ").val();
                let L = $(".LB").val();
                //proses
                let LU = P*L;
                //output
                let tx ="NIlai Luas Dari Persegi Dengan Panjang "+P;
                tx += "dan lebar" +L+ " adalah: <br>";
                tx += "="+P+" X "+L+ "<br>";
                tx += "= "+LU+"<br> Jadi luas adalah "+LU;

                $("#hasil").html(tx);
            });
            $(".HitungSegitiga").click(function(){
                let A = $(".AL").val();
                let T = $(".TG").val();
                //proses
                let LU = A*T  / 2;
                //output
                let tx ="NIlai Luas Dari Segitiga "+A;
                tx += "dan tinggi" +L+ " adalah: <br>";
                tx += "="+A+" X "+T+ "<br>";
                tx += "= "+LU+"<br> Jadi luas adalah "+LU;

                $("#hasil").html(tx);
            });
        });
    </script>
</body>
</html>