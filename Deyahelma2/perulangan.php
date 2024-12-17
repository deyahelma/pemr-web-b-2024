<?php
for ($i=0; $i <= 10; $i++) {
    echo $i."<button> Saya bisa php </button><br>";
}

echo "<br>";
?>
<select>
    <?php
    for ($i=2000; $i <= 2030; $i++) {
    ?>
    <option><?=$i?></option>
    <?php
    }
    ?>
</select>

<br>
<br>
<select name="tahun_akademik">
    <?php
    for ($i=2033; $i >= 1980; $i--){
    ?>
    <option><?=$i?>/<?=$i+1?></option>
    <?php
    }
    ?>
</select>

<br>
<?php
$no = 1 ;
while ($no <= 10) {
    echo $no. "<br>";
    $no++;
}
?>

<br>
Array
<?php
$arraybuah =["Apel", "Pisang", "Jeruk", "Semangka"];
foreach ($arraybuah as $buah) {
    echo "Buah; $buah <br>";
}

$instagram = array(
    "username"=>"deyahelma",
    "photo"=>"gambar.jpg",
    "content"=>"content.jpg",
    "caption"=>"halo..",
    "Like"=>"200k",
    "comment"=>"10k",
);
echo $instagram['username'];
echo "<br>";
echo $instagram['content'];

$instagram = [
    [
    "username"=>"deyahelma",
    "photo"=>"gambar.jpg",
    "content"=>"content.jpg",
    "caption"=>"halo..",
    "Like"=>"200k",
    "comment"=>"10k",
    ],
    [
        "username"=>"Deya",
        "photo"=>"gambar.jpg",
        "content"=>"content.jpg",
        "caption"=>"halo..",
        "Like"=>"200k",
        "comment"=>"10k",
    ],
    [
        "username"=>"Ea",
        "photo"=>"gambar.jpg",
        "content"=>"content.jpg",
        "caption"=>"halo..",
        "Like"=>"200k",
        "comment"=>"10k",
        ]
    ];
    foreach ($instagram as $key => $value) {
        echo $value['photo']."<br>";
        echo $value['username']."<br>";
    }
?>