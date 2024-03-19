<?php
//nomor 9
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

//nomor 10
// for($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

// function tampilkanAngka(int $jumlah, int $indeks = 1){
//     echo "Perulangan ke- {$indeks} <br>";
//     //panggil diri sendiri selama indeks <= $jumlah
//     if($indeks < $jumlah){
//         tampilkanAngka($jumlah, $indeks +1);
//     }
// }
// tampilkanAngka(20)

// nomor 11
// $menu = [
//     [
//         "nama" => "Beranda"
//     ],
//     [
//         "nama" => "Berita",
//         "subMenu" => [
//             ["nama" => "Pantai"],
//             ["nama" => "Gunung"]
//         ]
//     ],
//     [
//         "nama" => "Kuliner"
//     ],
//     [
//         "nama" => "Hiburan"
//     ],
//     [
//         "nama" => "Tentang"
//     ],
//     [
//         "nama" => "Kontak"
//     ]

// ];
// function tampilkanMenuBertingkat(array $menu)
// {
//   echo "<ul>";
//   foreach ($menu as $key => $item) {
//     echo "<li>{$item['nama']}</li>";
//   }
//   echo "</ul>";
// }

// tampilkanMenuBertingkat($menu);

// nomor 12
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subSubMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";

        if (isset($item['subMenu'])) {
            echo "<ul>";
            foreach ($item['subMenu'] as $subItem) {
                echo "<li>{$subItem['nama']}";

                if (isset($subItem['subSubMenu'])) {
                    tampilkanMenuBertingkat($subItem['subSubMenu']);
                }

                echo "</li>";
            }
            echo "</ul>";
        }

        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>