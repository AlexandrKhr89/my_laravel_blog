<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
Создать таблицу 'contacts' в БД запустив команду в терминале
$ php artisan migrate
*/

        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
/*
Откат миграций таблицы 'contacts' до предыдущего состояния запусти команду в терминале
$ php artisan migrate:rollback --step=3
где --step=3  - количество предыдущих миграций

Отмена всех измениний в таблице
$ php artisan migrate:reset
*/
        Schema::dropIfExists('contacts');
    }
}
