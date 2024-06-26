<?php

$kategori = array("Macera", "Dram", "Komedi", "Korku");

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "23",
        "begeniSayisi" => "106",
        "yapimTarihi" => "03.12.2021",
        "vizyon" => "Evet"
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "236",
        "begeniSayisi" => "1023",
        "yapimTarihi" => "31.10.2010",
        "vizyon" => "Hayır"
    ),
);

array_push($kategori,"Biyografi");
sort($kategori);

$yeni_film = array(
    "baslik" => "Lucifer",
    "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
    "resim" => "3.jpeg",
    "yorumSayisi" => "71",
    "begeniSayisi" => "345",
    "yapimTarihi" => "12.06.2018",
    "vizyon" => "Hayır"
);

$filmler["0"] = $yeni_film;

$baslik = "FİLM LİSTESİ";

strtolower(ucfirst($filmler[0]["aciklama"]));
strtolower(ucfirst($filmler[1]["aciklama"]));
strtolower(ucfirst($filmler[2]["aciklama"]));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">    
    <title><?php echo $baslik ?></title>
</head>
<body>
    <div class="container">
        <h1><?php echo $baslik ?></h1>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori[0] ?></li>
                    <li class="list-group-item"><?php echo $kategori[1] ?></li>
                    <li class="list-group-item"><?php echo $kategori[2] ?></li>
                    <li class="list-group-item"><?php echo $kategori[3] ?></li>
                    <li class="list-group-item"><?php echo $kategori[4] ?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                        <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\"  >"
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-dark" href="<?php echo "" . strtolower(str_replace(' ', '-', $filmler["1"]['baslik'])) . ".php" ?>">
                                <?php echo $filmler["1"]['baslik'] ?>
                                </a>
                            </h5>
                                <p class="card-text"><?php echo substr(ucfirst(strtolower($filmler[1]["aciklama"])), 0 ,50) . "..." ?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: <?php echo $filmler["1"]["yapimTarihi"] ?></span>
                                    <span class="badge bg-success">Yorum: <?php echo $filmler["1"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-success">Beğeni: <?php echo $filmler["1"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-success">Vizyon: <?php echo $filmler["1"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                        <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\"  >"
                            ?>                        
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                            <h5 class="card-title">
                            <a class="text-dark" href="<?php echo "" . strtolower(str_replace(' ', '-', $filmler["2"]['baslik'])) . ".php" ?>">
                            <?php echo $filmler["2"]["baslik"] ?>                                
                            </a></h5>
                            <p class="card-text"><?php echo substr(ucfirst(strtolower($filmler[2]["aciklama"])), 0,50) . "..." ?></p>
                                <div>
                                <span class="badge bg-success">Yapım Tarihi: <?php echo $filmler["2"]["yapimTarihi"] ?></span>
                                <span class="badge bg-success">Yorum: <?php echo $filmler["2"]["yorumSayisi"] ?></span>
                                <span class="badge bg-success">Beğeni: <?php echo $filmler["2"]["begeniSayisi"] ?></span>
                                <span class="badge bg-success">Vizyon: <?php echo $filmler["2"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                        <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\"  >"
                            ?>                        
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-dark" href="<?php echo "" . strtolower(str_replace(' ', '-', $filmler["0"]['baslik'])) . ".php" ?>">
                            <?php echo $filmler["0"]["baslik"] ?>
                        </a></h5>
                            <p class="card-text"><?php echo substr(ucfirst(strtolower($filmler[0]["aciklama"])), 0, 50) . "..." ?></p>
                                <div>
                                <span class="badge bg-success">Yapım Tarihi: <?php echo $filmler["0"]["yapimTarihi"] ?></span>
                                <span class="badge bg-success">Yorum: <?php echo $filmler["0"]["yorumSayisi"] ?></span>
                                <span class="badge bg-success">Beğeni: <?php echo $filmler["0"]["begeniSayisi"] ?></span>
                                <span class="badge bg-success">Vizyon: <?php echo $filmler["0"]["vizyon"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>