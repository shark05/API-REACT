<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221101003541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mensalidade ADD COLUMN userid INTEGER NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__mensalidade AS SELECT id, valor, data_inicio FROM mensalidade');
        $this->addSql('DROP TABLE mensalidade');
        $this->addSql('CREATE TABLE mensalidade (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, valor INTEGER NOT NULL, data_inicio DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO mensalidade (id, valor, data_inicio) SELECT id, valor, data_inicio FROM __temp__mensalidade');
        $this->addSql('DROP TABLE __temp__mensalidade');
    }
}
