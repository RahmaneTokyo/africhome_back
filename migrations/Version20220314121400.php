<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220314121400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, ville_id INT DEFAULT NULL, coordonnees_id INT DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, boite_postale VARCHAR(255) DEFAULT NULL, coordonnees_given TINYINT(1) DEFAULT NULL, ask_for_update_coordoonnees TINYINT(1) DEFAULT NULL, INDEX IDX_4C62E638A73F0036 (ville_id), UNIQUE INDEX UNIQ_4C62E6385853DEDF (coordonnees_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coordonnees (id INT AUTO_INCREMENT NOT NULL, latitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, nom_ville VARCHAR(255) NOT NULL, nom_pays VARCHAR(255) NOT NULL, archived TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6385853DEDF FOREIGN KEY (coordonnees_id) REFERENCES coordonnees (id)');
        $this->addSql('ALTER TABLE entite ADD contact_id INT NOT NULL');
        $this->addSql('ALTER TABLE entite ADD CONSTRAINT FK_1A291827E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1A291827E7A1254A ON entite (contact_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite DROP FOREIGN KEY FK_1A291827E7A1254A');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6385853DEDF');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A73F0036');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE coordonnees');
        $this->addSql('DROP TABLE ville');
        $this->addSql('DROP INDEX UNIQ_1A291827E7A1254A ON entite');
        $this->addSql('ALTER TABLE entite DROP contact_id, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numero_enregistrement numero_enregistrement VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
