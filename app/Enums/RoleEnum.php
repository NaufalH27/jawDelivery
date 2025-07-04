<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case STAFF = 'staff';
    case PELANGGAN = 'pelanggan';
    case KURIR = 'kurir';

    public function displayName(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::STAFF => 'Staff',
            self::PELANGGAN => 'Pelanggan',
            self::KURIR => 'Kurir',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin role',
            self::STAFF => 'Staff role',
            self::PELANGGAN => 'Customer role',
            self::KURIR => 'Courier role',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}



