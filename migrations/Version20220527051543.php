<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527051543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, matricule VARCHAR(255) DEFAULT NULL, numero_carte_prof VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_880E0D76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, entreprise_securite_id INT DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, numero_carte_prof VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_268B9C9DA76ED395 (user_id), INDEX IDX_268B9C9D40060658 (entreprise_securite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent_type_agent (agent_id INT NOT NULL, type_agent_id INT NOT NULL, INDEX IDX_59C1CA653414710B (agent_id), INDEX IDX_59C1CA65F9EB56F7 (type_agent_id), PRIMARY KEY(agent_id, type_agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE batiment (id INT AUTO_INCREMENT NOT NULL, contact_id INT DEFAULT NULL, localisation_id INT DEFAULT NULL, entite_id INT DEFAULT NULL, type_batiment_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, numero_parcelle VARCHAR(255) NOT NULL, titre_foncier VARCHAR(255) NOT NULL, date_construction DATE NOT NULL, UNIQUE INDEX UNIQ_F5FAB00CE7A1254A (contact_id), INDEX IDX_F5FAB00CC68BE09C (localisation_id), INDEX IDX_F5FAB00C9BEA957A (entite_id), INDEX IDX_F5FAB00C9DEF5E8A (type_batiment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE batiment_owner (id INT AUTO_INCREMENT NOT NULL, batiment_id INT DEFAULT NULL, date_creation DATE NOT NULL, date_achat DATE DEFAULT NULL, date_vente DATE DEFAULT NULL, active TINYINT(1) NOT NULL, INDEX IDX_78898577D6F6891B (batiment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, latitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, ville VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entite (id INT AUTO_INCREMENT NOT NULL, contact_id INT NOT NULL, type_entite_id INT DEFAULT NULL, father_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, is_bloked TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL, is_entreprise TINYINT(1) NOT NULL, type VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1A291827E7A1254A (contact_id), INDEX IDX_1A2918272F2CD46A (type_entite_id), INDEX IDX_1A2918272055B9A2 (father_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entite_admin (entite_id INT NOT NULL, admin_id INT NOT NULL, INDEX IDX_8484CE359BEA957A (entite_id), INDEX IDX_8484CE35642B8210 (admin_id), PRIMARY KEY(entite_id, admin_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entite_gestionnaire (entite_id INT NOT NULL, gestionnaire_id INT NOT NULL, INDEX IDX_A7590F559BEA957A (entite_id), INDEX IDX_A7590F556885AC1B (gestionnaire_id), PRIMARY KEY(entite_id, gestionnaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestionnaire (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type_gestionnaire INT NOT NULL, matricule VARCHAR(255) DEFAULT NULL, numero_carte_prof VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_F4461B20A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE incident (id INT AUTO_INCREMENT NOT NULL, entite_id INT DEFAULT NULL, type_incident_id INT DEFAULT NULL, date_incident DATETIME NOT NULL, commentaire VARCHAR(255) NOT NULL, etat_incident VARCHAR(255) NOT NULL, INDEX IDX_3D03A11A9BEA957A (entite_id), INDEX IDX_3D03A11A12FCE828 (type_incident_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, type_localisation_id INT NOT NULL, father_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, niveau INT NOT NULL, zip_code VARCHAR(255) NOT NULL, INDEX IDX_BFD3CE8F31BF74E8 (type_localisation_id), INDEX IDX_BFD3CE8F2055B9A2 (father_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE param_types_agents (id INT AUTO_INCREMENT NOT NULL, entite_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, INDEX IDX_7D6640619BEA957A (entite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE param_types_demandes (id INT AUTO_INCREMENT NOT NULL, entite_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, type INT DEFAULT NULL, INDEX IDX_DD4C3749BEA957A (entite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, entite_id INT DEFAULT NULL, batiment_owner_id INT NOT NULL, UNIQUE INDEX UNIQ_69E399D6A76ED395 (user_id), UNIQUE INDEX UNIQ_69E399D69BEA957A (entite_id), INDEX IDX_69E399D6E56FEC17 (batiment_owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE super_admin (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, UNIQUE INDEX UNIQ_BC8C2783A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_agent (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, archived TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_batiment (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_entite (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_incident (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_localisation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, date_de_naissance DATE DEFAULT NULL, is_bloked TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL, type VARCHAR(255) NOT NULL, token VARCHAR(255) DEFAULT NULL, token_confirm TINYINT(1) DEFAULT NULL, token_updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D40060658 FOREIGN KEY (entreprise_securite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE agent_type_agent ADD CONSTRAINT FK_59C1CA653414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agent_type_agent ADD CONSTRAINT FK_59C1CA65F9EB56F7 FOREIGN KEY (type_agent_id) REFERENCES type_agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE batiment ADD CONSTRAINT FK_F5FAB00CE7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('ALTER TABLE batiment ADD CONSTRAINT FK_F5FAB00CC68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE batiment ADD CONSTRAINT FK_F5FAB00C9BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE batiment ADD CONSTRAINT FK_F5FAB00C9DEF5E8A FOREIGN KEY (type_batiment_id) REFERENCES type_batiment (id)');
        $this->addSql('ALTER TABLE batiment_owner ADD CONSTRAINT FK_78898577D6F6891B FOREIGN KEY (batiment_id) REFERENCES batiment (id)');
        $this->addSql('ALTER TABLE entite ADD CONSTRAINT FK_1A291827E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('ALTER TABLE entite ADD CONSTRAINT FK_1A2918272F2CD46A FOREIGN KEY (type_entite_id) REFERENCES type_entite (id)');
        $this->addSql('ALTER TABLE entite ADD CONSTRAINT FK_1A2918272055B9A2 FOREIGN KEY (father_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE entite_admin ADD CONSTRAINT FK_8484CE359BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entite_admin ADD CONSTRAINT FK_8484CE35642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entite_gestionnaire ADD CONSTRAINT FK_A7590F559BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entite_gestionnaire ADD CONSTRAINT FK_A7590F556885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gestionnaire ADD CONSTRAINT FK_F4461B20A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11A9BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11A12FCE828 FOREIGN KEY (type_incident_id) REFERENCES type_incident (id)');
        $this->addSql('ALTER TABLE localisation ADD CONSTRAINT FK_BFD3CE8F31BF74E8 FOREIGN KEY (type_localisation_id) REFERENCES type_localisation (id)');
        $this->addSql('ALTER TABLE localisation ADD CONSTRAINT FK_BFD3CE8F2055B9A2 FOREIGN KEY (father_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE param_types_agents ADD CONSTRAINT FK_7D6640619BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE param_types_demandes ADD CONSTRAINT FK_DD4C3749BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE proprietaire ADD CONSTRAINT FK_69E399D6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE proprietaire ADD CONSTRAINT FK_69E399D69BEA957A FOREIGN KEY (entite_id) REFERENCES entite (id)');
        $this->addSql('ALTER TABLE proprietaire ADD CONSTRAINT FK_69E399D6E56FEC17 FOREIGN KEY (batiment_owner_id) REFERENCES batiment_owner (id)');
        $this->addSql('ALTER TABLE super_admin ADD CONSTRAINT FK_BC8C2783A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite_admin DROP FOREIGN KEY FK_8484CE35642B8210');
        $this->addSql('ALTER TABLE agent_type_agent DROP FOREIGN KEY FK_59C1CA653414710B');
        $this->addSql('ALTER TABLE batiment_owner DROP FOREIGN KEY FK_78898577D6F6891B');
        $this->addSql('ALTER TABLE proprietaire DROP FOREIGN KEY FK_69E399D6E56FEC17');
        $this->addSql('ALTER TABLE batiment DROP FOREIGN KEY FK_F5FAB00CE7A1254A');
        $this->addSql('ALTER TABLE entite DROP FOREIGN KEY FK_1A291827E7A1254A');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D40060658');
        $this->addSql('ALTER TABLE batiment DROP FOREIGN KEY FK_F5FAB00C9BEA957A');
        $this->addSql('ALTER TABLE entite DROP FOREIGN KEY FK_1A2918272055B9A2');
        $this->addSql('ALTER TABLE entite_admin DROP FOREIGN KEY FK_8484CE359BEA957A');
        $this->addSql('ALTER TABLE entite_gestionnaire DROP FOREIGN KEY FK_A7590F559BEA957A');
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11A9BEA957A');
        $this->addSql('ALTER TABLE param_types_agents DROP FOREIGN KEY FK_7D6640619BEA957A');
        $this->addSql('ALTER TABLE param_types_demandes DROP FOREIGN KEY FK_DD4C3749BEA957A');
        $this->addSql('ALTER TABLE proprietaire DROP FOREIGN KEY FK_69E399D69BEA957A');
        $this->addSql('ALTER TABLE entite_gestionnaire DROP FOREIGN KEY FK_A7590F556885AC1B');
        $this->addSql('ALTER TABLE batiment DROP FOREIGN KEY FK_F5FAB00CC68BE09C');
        $this->addSql('ALTER TABLE localisation DROP FOREIGN KEY FK_BFD3CE8F2055B9A2');
        $this->addSql('ALTER TABLE agent_type_agent DROP FOREIGN KEY FK_59C1CA65F9EB56F7');
        $this->addSql('ALTER TABLE batiment DROP FOREIGN KEY FK_F5FAB00C9DEF5E8A');
        $this->addSql('ALTER TABLE entite DROP FOREIGN KEY FK_1A2918272F2CD46A');
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11A12FCE828');
        $this->addSql('ALTER TABLE localisation DROP FOREIGN KEY FK_BFD3CE8F31BF74E8');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76A76ED395');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DA76ED395');
        $this->addSql('ALTER TABLE gestionnaire DROP FOREIGN KEY FK_F4461B20A76ED395');
        $this->addSql('ALTER TABLE proprietaire DROP FOREIGN KEY FK_69E399D6A76ED395');
        $this->addSql('ALTER TABLE super_admin DROP FOREIGN KEY FK_BC8C2783A76ED395');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE agent_type_agent');
        $this->addSql('DROP TABLE batiment');
        $this->addSql('DROP TABLE batiment_owner');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE entite');
        $this->addSql('DROP TABLE entite_admin');
        $this->addSql('DROP TABLE entite_gestionnaire');
        $this->addSql('DROP TABLE gestionnaire');
        $this->addSql('DROP TABLE incident');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE param_types_agents');
        $this->addSql('DROP TABLE param_types_demandes');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE super_admin');
        $this->addSql('DROP TABLE type_agent');
        $this->addSql('DROP TABLE type_batiment');
        $this->addSql('DROP TABLE type_entite');
        $this->addSql('DROP TABLE type_incident');
        $this->addSql('DROP TABLE type_localisation');
        $this->addSql('DROP TABLE user');
    }
}
