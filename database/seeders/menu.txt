<?php

namespace Database\Seeders;

use App\Services\MenuService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{

    public function run()
    {
        $menus = collect([
            // Dashboard
            [
                'url' => '/home',
                'name' => 'Dashboard',
                'icon' => 'dashboard',
                'is_active' => true,
                'children' => [],
            ],
            // data master
            [
                'url' => '/data-master',
                'name' => 'Data Master',
                'icon' => 'inventory_2',
                'is_active' => true,
                'children' => [[
                    'url' => '/barang',
                    'name' => 'Barang',
                    // 'icon' => 'inventory_2',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/customer',
                    'name' => 'Customer',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/supplier',
                    'name' => 'Supplier',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/coa',
                    'name' => 'COA',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/bank',
                    'name' => 'Bank',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/store',
                    'name' => 'Store',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ]],
            ],
            // pengadaan
            [
                'url' => '/pengadaan',
                'name' => 'Pengadaan',
                'icon' => 'shopping_cart',
                'is_active' => true,
                'children' => [[
                    'url' => '/permintaan-pembeliaan',
                    'name' => 'Permintaan Pembeliaan',
                    // 'icon' => 'inventory_2',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/order-pembeliaan',
                    'name' => 'Order Pembeliaan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/faktur-pembeliaan',
                    'name' => 'Faktur Pembeliaan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/retur-pembeliaan',
                    'name' => 'Retur Pembelian',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/analisa-pembeliaan',
                    'name' => 'Analisa Pembelian',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ]],
            ],
            // persediaan
            [
                'url' => '/persediaan',
                'name' => 'Persediaan',
                'icon' => 'content_paste',
                'is_active' => true,
                'children' => [[
                    'url' => '/penerimaan-barang',
                    'name' => 'Penerimaan Barang',
                    // 'icon' => 'inventory_2',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/mutasi-barang',
                    'name' => 'Mutasi Barang',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/surat-jalan',
                    'name' => 'Surat Jalan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/informasi-stok-aktual',
                    'name' => 'Informasi Stok Aktual',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/penyesuaian-stok',
                    'name' => 'Penyesuaian',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ],],
            ],
            // penjualan
            [
                'url' => '/penjualan',
                'name' => 'Penjualan',
                'icon' => 'warehouse',
                'is_active' => true,
                'children' => [[
                    'url' => '/kasir',
                    'name' => 'Kasir',
                    // 'icon' => 'inventory_2',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/order-penjualan',
                    'name' => 'Order Penjualan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/faktur',
                    'name' => 'Faktur',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/cek-harga',
                    'name' => 'Cek Harga',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/analisa-penjualan',
                    'name' => 'Analisa Penjualan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/retur-penjualan',
                    'name' => 'Retur Penjualan',
                    // 'icon' => 'dashboard',
                    'is_active' => true,
                    'children' => [],
                ]],
            ],
            // keuangan
            [
                'url' => '/keuangan',
                'name' => 'Keuangan',
                'icon' => 'history_edu',
                'is_active' => true,
                'children' => [[
                    'url' => '/daftar-piutang',
                    'name' => 'Daftar Piutang',
                    // 'icon' => 'list',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/daftar-hutang',
                    'name' => 'Daftar Hutang',
                    // 'icon' => 'list_alt',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/jurnal-umum',
                    'name' => 'Jurnal Umum',
                    // 'icon' => 'bookmarks',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/buku-besar',
                    'name' => 'Buku Besar',
                    // 'icon' => 'library_books',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/histori-jurnal-transaksi',
                    'name' => 'Histori Jurnal Transaksi',
                    // 'icon' => 'pageview',
                    'is_active' => true,
                    'children' => [],
                ],],
            ],
            // laporan
            [
                'url' => '/laporan',
                'name' => 'Laporan',
                'icon' => 'description',
                'is_active' => true,
                'children' => [[
                    'url' => '/penjualan',
                    'name' => 'Penjualan',
                    // 'icon' => 'feed',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/pembelian',
                    'name' => 'Pembelian',
                    // 'icon' => 'sticky_note_2',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/hutang',
                    'name' => 'Hutang',
                    // 'icon' => 'receipt',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/piutang',
                    'name' => 'Piutang',
                    // 'icon' => 'article',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/keuangan',
                    'name' => 'Keuangan',
                    // 'icon' => 'history_edu',
                    'is_active' => true,
                    'children' => [],
                ],],
            ],
            // administrasi aplikasi
            [
                'url' => '/administrasi-aplikasi',
                'name' => 'Administrasi Aplikasi',
                'icon' => 'menu',
                'is_active' => true,
                'children' => [[
                    'url' => '/user-master',
                    'name' => 'User Master',
                    // 'icon' => 'account_circle',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/menu-master',
                    'name' => 'Menu Master',
                    // 'icon' => 'menu_open',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/konfigurasi',
                    'name' => 'Konfigurasi',
                    // 'icon' => 'settings',
                    'is_active' => true,
                    'children' => [],
                ], [
                    'url' => '/pajak',
                    'name' => 'Pajak',
                    // 'icon' => 'receipt_long',
                    'is_active' => true,
                    'children' => [],
                ],],
            ],
            // logout
            [
                'url' => '/auth/logout',
                'name' => 'Logout',
                'icon' => 'logout',
                'is_active' => true,
                'children' => [],
            ],


        ]);

        $no = 1;

        foreach ($menus->all() as $menu) {
            $parent = MenuService::createMenu($menu);

            if (isset($menu['children'])) {

                $no_2 = 1;

                foreach ($menu['children'] as $child) {
                    $child['order_no'] = $no_2;
                    $child['parent_id'] = $parent->id;
                    $child['url'] = $parent->url . $child['url'];


                    MenuService::createMenu($child);

                    $no_2++;
                }
            }

            $no++;
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function ____run()
    {
        $menus = collect([
            [
                'url' => '/home',
                'name' => 'Dashboard',
                'icon' => 'dashboard',
                'is_active' => true,
                'children' => [],
            ],
            [
                'url' => '/settings',
                'name' => 'Settings',
                'icon' => 'settings',
                'is_active' => true,
                'children' => [],
            ],
            [
                'url' => '/auth/logout',
                'name' => 'Logout',
                'icon' => 'logout',
                'is_active' => true,
                'children' => [],
            ],
        ]);


        $no = 1;

        foreach ($menus->all() as $menu) {
            $menu['order_no'] = $no;
            $parent = MenuService::createMenu($menu);

            if (isset($menu['children'])) {

                $no_2 = 1;
                foreach ($menu['children'] as $child) {
                    $child['order_no'] = $no_2;
                    $child['parent_id'] = $parent->id;
                    MenuService::createMenu($child);

                    $no_2++;
                }
            }

            $no++;
        }
    }
}
