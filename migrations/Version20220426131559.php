<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426131559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite ADD father_id INT DEFAULT NULL, ADD is_entreprise TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE entite ADD CONSTRAINT FK_1A2918272055B9A2 FOREIGN KEY (father_id) REFERENCES entite (id)');
        $this->addSql('CREATE INDEX IDX_1A2918272055B9A2 ON entite (father_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite DROP FOREIGN KEY FK_1A2918272055B9A2');
        $this->addSql('DROP INDEX IDX_1A2918272055B9A2 ON entite');
        $this->addSql('ALTER TABLE entite DROP father_id, DROP is_entreprise');
    }
}
