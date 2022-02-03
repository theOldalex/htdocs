<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220201160223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE auteur ADD realisation_id INT NOT NULL');
        $this->addSql('ALTER TABLE auteur ADD CONSTRAINT FK_55AB140B685E551 FOREIGN KEY (realisation_id) REFERENCES realisation (id)');
        $this->addSql('CREATE INDEX IDX_55AB140B685E551 ON auteur (realisation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE auteur DROP FOREIGN KEY FK_55AB140B685E551');
        $this->addSql('DROP INDEX IDX_55AB140B685E551 ON auteur');
        $this->addSql('ALTER TABLE auteur DROP realisation_id');
    }
}
