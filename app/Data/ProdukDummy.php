<?php

namespace App\Data;

/**
 * Sumber data sementara untuk produk Halona Bali.
 * Produk yang dijual berupa sandal wanita.
 */
class ProdukDummy
{
    public static function semua(): array
    {
        return [
            [
                'id'          => 1,
                'nama'        => 'Sandal Elegan Pearl',
                'kategori'    => 'Sandal Wanita',
                'harga'       => 129000,
                'harga_coret' => 159000,
                'gambar'      => 'assets/images/produk1.jpeg',
                'deskripsi'   => 'Sandal wanita dengan detail pearl elegan yang cocok digunakan untuk berbagai kesempatan.',
            ],
            [
                'id'          => 2,
                'nama'        => 'Sandal Casual Cream',
                'kategori'    => 'Sandal Casual',
                'harga'       => 99000,
                'harga_coret' => 129000,
                'gambar'      => 'assets/images/produk2.jpeg',
                'deskripsi'   => 'Sandal casual berwarna cream dengan desain simpel dan nyaman untuk digunakan sehari-hari.',
            ],
            [
                'id'          => 3,
                'nama'        => 'Sandal Heels Classic',
                'kategori'    => 'Sandal Heels',
                'harga'       => 149000,
                'harga_coret' => 179000,
                'gambar'      => 'assets/images/produk3.jpeg',
                'deskripsi'   => 'Sandal heels dengan desain klasik dan elegan untuk melengkapi penampilan.',
            ],
            [
                'id'          => 4,
                'nama'        => 'Sandal Flat Simple',
                'kategori'    => 'Sandal Flat',
                'harga'       => 89000,
                'harga_coret' => 109000,
                'gambar'      => 'assets/images/produk4.jpeg',
                'deskripsi'   => 'Sandal flat dengan desain minimalis yang ringan dan nyaman digunakan sepanjang hari.',
            ],
            [
                'id'          => 5,
                'nama'        => 'Sandal Ribbon Chic',
                'kategori'    => 'Sandal Wanita',
                'harga'       => 119000,
                'harga_coret' => 149000,
                'gambar'      => 'assets/images/produk5.jpeg',
                'deskripsi'   => 'Sandal dengan aksen ribbon yang memberikan kesan manis dan stylish.',
            ],
            [
                'id'          => 6,
                'nama'        => 'Sandal Gold Shine',
                'kategori'    => 'Sandal Elegan',
                'harga'       => 139000,
                'harga_coret' => 169000,
                'gambar'      => 'assets/images/produk6.jpeg',
                'deskripsi'   => 'Sandal bernuansa gold dengan tampilan elegan yang cocok untuk acara spesial.',
            ],
            [
                'id'          => 7,
                'nama'        => 'Sandal Black Glam',
                'kategori'    => 'Sandal Wanita',
                'harga'       => 129000,
                'harga_coret' => 159000,
                'gambar'      => 'assets/images/produk7.jpeg',
                'deskripsi'   => 'Sandal hitam dengan desain glamor yang mudah dipadukan dengan berbagai outfit.',
            ],
            [
                'id'          => 8,
                'nama'        => 'Sandal Brown Classic',
                'kategori'    => 'Sandal Casual',
                'harga'       => 109000,
                'harga_coret' => 139000,
                'gambar'      => 'assets/images/produk8.jpeg',
                'deskripsi'   => 'Sandal warna brown dengan desain klasik yang nyaman untuk aktivitas sehari-hari.',
            ],
        ];
    }

    public static function cari(int $id): ?array
    {
        foreach (self::semua() as $produk) {
            if ($produk['id'] === $id) {
                return $produk;
            }
        }

        return null;
    }
}
