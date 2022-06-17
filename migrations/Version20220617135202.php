<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220617135202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE batiment_critere (id INT AUTO_INCREMENT NOT NULL, batiment_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, date_modif DATETIME DEFAULT NULL, poids INT DEFAULT NULL, active TINYINT(1) NOT NULL, INDEX IDX_4825DE93D6F6891B (batiment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE batiment_critere ADD CONSTRAINT FK_4825DE93D6F6891B FOREIGN KEY (batiment_id) REFERENCES batiment (id)');
        $this->addSql('ALTER TABLE critere ADD batiment_critere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE critere ADD CONSTRAINT FK_7F6A8053CDABFF07 FOREIGN KEY (batiment_critere_id) REFERENCES batiment_critere (id)');
        $this->addSql('CREATE INDEX IDX_7F6A8053CDABFF07 ON critere (batiment_critere_id)');
        $this->addSql('ALTER TABLE montant ADD batiment_critere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE montant ADD CONSTRAINT FK_A9F3E328CDABFF07 FOREIGN KEY (batiment_critere_id) REFERENCES batiment_critere (id)');
        $this->addSql('CREATE INDEX IDX_A9F3E328CDABFF07 ON montant (batiment_critere_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE critere DROP FOREIGN KEY FK_7F6A8053CDABFF07');
        $this->addSql('ALTER TABLE montant DROP FOREIGN KEY FK_A9F3E328CDABFF07');
        $this->addSql('DROP TABLE batiment_critere');
        $this->addSql('DROP INDEX IDX_7F6A8053CDABFF07 ON critere');
        $this->addSql('ALTER TABLE critere DROP batiment_critere_id');
        $this->addSql('DROP INDEX IDX_A9F3E328CDABFF07 ON montant');
        $this->addSql('ALTER TABLE montant DROP batiment_critere_id');
    }
}
