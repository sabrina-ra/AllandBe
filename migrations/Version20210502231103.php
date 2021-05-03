<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210502231103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE official_docs (id INT AUTO_INCREMENT NOT NULL, brand_id INT NOT NULL, status VARCHAR(255) NOT NULL, piece_identite VARCHAR(255) NOT NULL, conditions_generales VARCHAR(255) NOT NULL, preuve_enregistrement VARCHAR(255) NOT NULL, table_capitalisation VARCHAR(255) NOT NULL, coordonn�es_bancaires VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_46E6D1F044F5D008 (brand_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE official_docs ADD CONSTRAINT FK_46E6D1F044F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE official_docs');
    }
}
