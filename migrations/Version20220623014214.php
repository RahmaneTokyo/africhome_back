<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220623014214 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, batiment_id INT DEFAULT NULL, taxe_id INT DEFAULT NULL, user_id INT DEFAULT NULL, montant INT NOT NULL, date_creation DATE NOT NULL, date_modif DATE DEFAULT NULL, paiement_type VARCHAR(255) NOT NULL, paiement_mean VARCHAR(255) NOT NULL, paiement_code VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, INDEX IDX_B1DC7A1ED6F6891B (batiment_id), UNIQUE INDEX UNIQ_B1DC7A1E1AB947A4 (taxe_id), INDEX IDX_B1DC7A1EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1ED6F6891B FOREIGN KEY (batiment_id) REFERENCES batiment (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E1AB947A4 FOREIGN KEY (taxe_id) REFERENCES taxe (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE paiement');
    }
}
