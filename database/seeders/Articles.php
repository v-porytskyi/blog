<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Seeder;

class Articles extends Seeder
{
    public function run(DatabaseManager $databaseManager): void
    {
        $databaseManager->beginTransaction();
        ArticleFactory::times(1000)->create();
        $databaseManager->commit();
    }
}
