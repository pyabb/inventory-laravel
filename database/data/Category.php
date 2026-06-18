<?php

namespace Database\Data;

class Category
{
    public static function list(): array
    {
        return [
            ['name' => 'Alimentos secos', 'status' => 1],
            ['name' => 'Productos enlatados', 'status' => 1],
            ['name' => 'Bebidas no alcohólicas', 'status' => 1],
            ['name' => 'Bebidas alcohólicas', 'status' => 1],
            ['name' => 'Dulces y botanas', 'status' => 1],
            ['name' => 'Productos de panadería', 'status' => 1],
            ['name' => 'Lácteos y huevos', 'status' => 1],
            ['name' => 'Carnes y mariscos', 'status' => 1],
            ['name' => 'Frutas y verduras', 'status' => 1],
            ['name' => 'Productos de limpieza', 'status' => 1],
            ['name' => 'Cuidado personal', 'status' => 1],
            ['name' => 'Electrodomésticos', 'status' => 1],
            ['name' => 'Tecnología y electrónica', 'status' => 1],
            ['name' => 'Deportes y aire libre', 'status' => 1],
            ['name' => 'Juguetes y juegos', 'status' => 1],
            ['name' => 'Moda y accesorios', 'status' => 1],
            ['name' => 'Automotriz', 'status' => 1],
            ['name' => 'Mascotas', 'status' => 1],
            ['name' => 'Artículos para el hogar y jardín', 'status' => 1],
            ['name' => 'Productos de conveniencia', 'status' => 1],
        ];
    }
}
