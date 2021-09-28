<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210927084449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE z5600 (id INT AUTO_INCREMENT NOT NULL, rames VARCHAR(11) NOT NULL, motrices VARCHAR(255) NOT NULL, mise_en_service DATE NOT NULL, livree VARCHAR(255) NOT NULL, nombre_de_caisses INT NOT NULL, stf VARCHAR(11) NOT NULL, radiation DATE NOT NULL, equipements_interieurs VARCHAR(255) NOT NULL, lignes VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE z5600');
    }
}
