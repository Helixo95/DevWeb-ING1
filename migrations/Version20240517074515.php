<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240517074515 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD last_name VARCHAR(255) NOT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD genre VARCHAR(255) NOT NULL, ADD job VARCHAR(255) NOT NULL, ADD birth_date DATE NOT NULL, ADD full_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD job VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP last_name, DROP first_name, DROP genre, DROP job, DROP birth_date, DROP full_name');
        $this->addSql('ALTER TABLE user DROP job');
    }
}
