<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Collection;

class MenuService
{
    public $items = [];

    public function __construct(
        public ?User $user
    ) {
        $this->makeMenu();
    }

    private function makeMenu()
    {
        $this->items = collect([
            [
                'url' => '/',
                'name' => 'Dashboard',
                'icon' => 'dashboard',
                'is_active' => true,
                'childern' => [],
            ],
            [
                'url' => '/settings',
                'name' => 'Settings',
                'icon' => 'settings',
                'is_active' => true,
                'childern' => [],
            ],
            [
                'url' => '/logout',
                'name' => 'Logout',
                'icon' => 'logout',
                'is_active' => true,
                'childern' => [],
            ],

        ]);
    }

    public function get()
    {
        return $this->items;
    }
}
