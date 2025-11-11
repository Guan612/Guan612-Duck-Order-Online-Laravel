<?php

namespace App\Enums;

enum ProductStatus: int
{
    case removed = 0; //下架
    case shelves = 1; //上架
    case empty = 2; //空
    case purchasing = 3; //补货中
}
