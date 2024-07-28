<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240716221906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, test CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, player_id INTEGER DEFAULT NULL, bank_hand CLOB DEFAULT NULL --(DC2Type:array)
        , player_hand_one CLOB DEFAULT NULL --(DC2Type:array)
        , player_hand_two CLOB DEFAULT NULL --(DC2Type:array)
        , player_hand_three CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO game (id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three) SELECT id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, player_id INTEGER DEFAULT NULL, bank_hand VARCHAR(255) DEFAULT NULL, player_hand_one VARCHAR(255) DEFAULT NULL, player_hand_two VARCHAR(255) DEFAULT NULL, player_hand_three VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three) SELECT id, player_id, bank_hand, player_hand_one, player_hand_two, player_hand_three FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
    }
}
