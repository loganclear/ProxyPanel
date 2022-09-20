<?php

use App\Components\MigrationToolBox;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group', function (Blueprint $table) {
            $table->increments('id');
            if ((new MigrationToolBox())->versionCheck()) {
                $table->string('name')->comment('分组名称');
            } else {
                $table->text('name')->comment('分组名称');
            }
            $table->json('nodes')->nullable()->comment('关联的节点ID，多个用,号分隔');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group');
    }
}
