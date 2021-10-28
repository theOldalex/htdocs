<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211028133456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisation CHANGE photo photo VARCHAR(255) NOT NULL');
        $this->addSql('CREATE FULLTEXT INDEX IDX_6BCC989D572333C39DAAD8E3 ON z5600 (rames, motrices)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisation CHANGE photo photo LONGBLOB NOT NULL');
        $this->addSql('DROP INDEX IDX_6BCC989D572333C39DAAD8E3 ON z5600');
    }
}
