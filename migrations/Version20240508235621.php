<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240508235621 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE library ADD COLUMN description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__library AS SELECT id, title, isbn, author, picture FROM library');
        $this->addSql('DROP TABLE library');
        $this->addSql('CREATE TABLE library (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, isbn VARCHAR(255) DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO library (id, title, isbn, author, picture) SELECT id, title, isbn, author, picture FROM __temp__library');
        $this->addSql('DROP TABLE __temp__library');
    }
}
