<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221101003307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE doacoes (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, userid INTEGER NOT NULL, valor INTEGER NOT NULL, forma_pagamento VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE mensalidade (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, valor INTEGER NOT NULL, data_inicio DATE DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE doacoes');
        $this->addSql('DROP TABLE mensalidade');
    }
}
