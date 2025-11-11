<?php

namespace App\Enums;

enum Role: int
{
    case admin = 2;  //超级管理员
    case employee = 1; //员工
    case user = 0; //用户
}
