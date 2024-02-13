<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger("from_categories");
            //foreign cria uma foreignKey
            $table->foreign("from_categories")
            //references fala qual campo vai ficar os dados
                    ->references("id")
                    //on passa a tabela de referencia
                        ->on("categories")
                //onUpdate oque ele vai fazer quando atualizar o artigo
                            ->onUpdate("cascade")
                    //onDelete oque ele vai fazer quando tentar Deletar uma categoria( restrict não deixa deletar nenhum registro da tabela categories deixa deletar da tabela de artigos)
                                ->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // $table->dropColumn("from_categories");
        });
    }
};
