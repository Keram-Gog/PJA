<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameApplyUserToApplyUsers extends Migration // ← ИМЯ КЛАССА ДОЛЖНО СОВПАДАТЬ
{
    public function up()
    {
        // Schema::rename('apply_user', 'apply_users');
    }

    public function down()
    {
        Schema::rename('apply_users', 'apply_user');
    }
}
