<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
public function up(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->uuid('new_id')->nullable()->unique();
        });

        DB::table('user')->get()->each(function ($user) {
            DB::table('user')
                ->where('id', $user->id)
                ->update(['new_id' => (string) Str::uuid()]);
        });

        Schema::table('user', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('id');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->renameColumn('new_id', 'id');
            $table->primary('id');
        });
    }

};
