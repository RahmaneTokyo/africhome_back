<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417150853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entite_gestionnaire (entite_id INT NOT NULL, gestionnaire_id INT NOT NULL, INDEX IDX_A7590F559BEA957A (entite_id), INDEX IDX_A7590F556885AC1B (gestionnaire_id), PRIMARY KEY(entite_id, gestionnaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entite_gestionnaire ADD CONSTRAINT FK_A7590F559BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entite_gestionnaire ADD CONSTRAINT FK_A7590F556885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gestionnaire DROP FOREIGN KEY FK_F4461B209BEA957A');
        $this->addSql('DROP INDEX IDX_F4461B209BEA957A ON gestionnaire');
        $this->addSql('ALTER TABLE gestionnaire DROP entite_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE entite_gestionnaire');
        $this->addSql('ALTER TABLE gestionnaire ADD entite_id INT NOT NULL');
        $this->addSql('ALTER TABLE gestionnaire ADD CONSTRAINT FK_F4461B209BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('CREATE INDEX IDX_F4461B209BEA957A ON gestionnaire (entite_id)');
    }
}
