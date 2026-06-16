<?php

namespace Database\Data;

class Vendor
{
    public static function list(): array
    {
        return [
            ['name' => 'La Michoacana', 'phone' => '55-1234-5678', 'email' => 'contacto@lamichoacana.com.mx', 'address' => 'Av. Insurgentes Sur 1647, Col. San José Insurgentes, CDMX'],
            ['name' => 'El Paraiso del Helado', 'phone' => '55-8765-4321', 'email' => 'info@elparaisodelhelado.com.mx', 'address' => 'Calle Gral. Emiliano Zapata 54, Col. San Francisco Chilpan, CDMX'],
            ['name' => 'La Flor de Michoacán', 'phone' => '33-3333-3333', 'email' => 'ventas@laflordemichoacan.com.mx', 'address' => 'Calle Sinaloa 1437, Col. Providencia, Guadalajara, Jalisco'],
            ['name' => 'Paletería la Victoria', 'phone' => '81-1111-1111', 'email' => 'contacto@paleterialavictoria.com.mx', 'address' => 'Av. Chapultepec Sur 177, Col. Americana, Monterrey, Nuevo León'],
            ['name' => 'Helados Santa Clara', 'phone' => '55-5555-5555', 'email' => 'contacto@santaclara.com.mx', 'address' => 'Av. de los Insurgentes Sur 1395, Col. Insurgentes Mixcoac, CDMX'],
            ['name' => 'La Imperial', 'phone' => '33-2222-2222', 'email' => 'info@laimperial.com.mx', 'address' => 'Av. México 2500, Col. Ladrón de Guevara, Guadalajara, Jalisco'],
            ['name' => 'Helados Holanda', 'phone' => '55-9876-5432', 'email' => 'contacto@heladosholanda.com.mx', 'address' => 'Av. Revolución 1928, Col. San Ángel, CDMX'],
            ['name' => 'Nieve Garrafa', 'phone' => '55-1111-2222', 'email' => 'ventas@nievegarrafa.com.mx', 'address' => 'Av. Toluca 124, Col. Olivar de los Padres, CDMX'],
            ['name' => 'La Tapatía Helados', 'phone' => '33-4444-4444', 'email' => 'contacto@latapatiahelados.com.mx', 'address' => 'Calle Francisco Javier Mina 20, Col. Centro, Guadalajara, Jalisco'],
            ['name' => 'La Tradicional', 'phone' => '81-2222-2222', 'email' => 'info@latradicional.com.mx', 'address' => 'Calle Padre Mier 1241, Col. Centro, Monterrey, Nuevo León'],
        ];
    }
}
