<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220617143112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE batiment_critere CHANGE date_creation date_creation DATE NOT NULL, CHANGE date_modif date_modif DATE DEFAULT NULL, CHANGE poids poids INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE batiment_critere CHANGE date_creation date_creation DATETIME DEFAULT NULL, CHANGE date_modif date_modif DATETIME DEFAULT NULL, CHANGE poids poids INT DEFAULT NULL');
    }
}
