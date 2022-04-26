<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220419191625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE localisation ADD father_id INT DEFAULT NULL, ADD superfather_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE localisation ADD CONSTRAINT FK_BFD3CE8F2055B9A2 FOREIGN KEY (father_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE localisation ADD CONSTRAINT FK_BFD3CE8FD14763E9 FOREIGN KEY (superfather_id) REFERENCES localisation (id)');
        $this->addSql('CREATE INDEX IDX_BFD3CE8F2055B9A2 ON localisation (father_id)');
        $this->addSql('CREATE INDEX IDX_BFD3CE8FD14763E9 ON localisation (superfather_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE localisation DROP FOREIGN KEY FK_BFD3CE8F2055B9A2');
        $this->addSql('ALTER TABLE localisation DROP FOREIGN KEY FK_BFD3CE8FD14763E9');
        $this->addSql('DROP INDEX IDX_BFD3CE8F2055B9A2 ON localisation');
        $this->addSql('DROP INDEX IDX_BFD3CE8FD14763E9 ON localisation');
        $this->addSql('ALTER TABLE localisation DROP father_id, DROP superfather_id');
    }
}
