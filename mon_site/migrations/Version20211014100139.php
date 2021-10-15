<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014100139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livree (id INT AUTO_INCREMENT NOT NULL, ile_de_france_id INT NOT NULL, transilien_id INT NOT NULL, carmillon_id INT NOT NULL, ile_de_france_mobilites_id INT NOT NULL, UNIQUE INDEX UNIQ_66A532F5FE5FC6F5 (ile_de_france_id), UNIQUE INDEX UNIQ_66A532F595706A6C (transilien_id), UNIQUE INDEX UNIQ_66A532F54FCC2C97 (carmillon_id), UNIQUE INDEX UNIQ_66A532F5DB01B276 (ile_de_france_mobilites_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livree ADD CONSTRAINT FK_66A532F5FE5FC6F5 FOREIGN KEY (ile_de_france_id) REFERENCES z5600 (id)');
        $this->addSql('ALTER TABLE livree ADD CONSTRAINT FK_66A532F595706A6C FOREIGN KEY (transilien_id) REFERENCES z5600 (id)');
        $this->addSql('ALTER TABLE livree ADD CONSTRAINT FK_66A532F54FCC2C97 FOREIGN KEY (carmillon_id) REFERENCES z5600 (id)');
        $this->addSql('ALTER TABLE livree ADD CONSTRAINT FK_66A532F5DB01B276 FOREIGN KEY (ile_de_france_mobilites_id) REFERENCES z5600 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE livree');
    }
}
