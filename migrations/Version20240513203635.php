<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240513203635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contact');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, relation_user_id INT NOT NULL, email VARCHAR(255) NOT NULL, subject VARCHAR(100) NOT NULL, message LONGTEXT NOT NULL, INDEX IDX_4C62E638BE15C1E4 (relation_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638BE15C1E4 FOREIGN KEY (relation_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_cat INT AUTO_INCREMENT NOT NULL, nom_cat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id_cat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE contact_form (id_contact INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, sujet VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id_contact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (id_panier INT AUTO_INCREMENT NOT NULL, quantite INT DEFAULT NULL, PRIMARY KEY(id_panier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638BE15C1E4');
        $this->addSql('DROP TABLE contact');
        $this->addSql('ALTER TABLE product DROP brand');
        $this->addSql('ALTER TABLE user MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('DROP INDEX `PRIMARY` ON user');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(30) NOT NULL, ADD prenom VARCHAR(30) NOT NULL, ADD adresse VARCHAR(100) DEFAULT NULL, ADD num_tel INT NOT NULL, ADD `admin` TINYINT(1) DEFAULT 0, ADD photo BLOB NOT NULL, DROP email, DROP address, DROP phone_number, DROP roles, DROP password, DROP created_at, DROP picture, CHANGE genre genre VARCHAR(15) DEFAULT NULL, CHANGE id id_user INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id_user)');
    }
}
