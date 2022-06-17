<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220613165516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE incident ADD localisation_id INT NOT NULL, ADD description VARCHAR(255) NOT NULL, CHANGE commentaire titre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11AC68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('CREATE INDEX IDX_3D03A11AC68BE09C ON incident (localisation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11AC68BE09C');
        $this->addSql('DROP INDEX IDX_3D03A11AC68BE09C ON incident');
        $this->addSql('ALTER TABLE incident ADD commentaire VARCHAR(255) NOT NULL, DROP localisation_id, DROP titre, DROP description');
    }
}
