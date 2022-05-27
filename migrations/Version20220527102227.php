<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527102227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attached_file ADD departement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289ACCF9E01E FOREIGN KEY (departement_id) REFERENCES deparement (id)');
        $this->addSql('CREATE INDEX IDX_B010289ACCF9E01E ON attached_file (departement_id)');
        $this->addSql('ALTER TABLE user ADD departement_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CCF9E01E FOREIGN KEY (departement_id) REFERENCES deparement (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649CCF9E01E ON user (departement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289ACCF9E01E');
        $this->addSql('DROP INDEX IDX_B010289ACCF9E01E ON attached_file');
        $this->addSql('ALTER TABLE attached_file DROP departement_id');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649CCF9E01E');
        $this->addSql('DROP INDEX IDX_8D93D649CCF9E01E ON `user`');
        $this->addSql('ALTER TABLE `user` DROP departement_id');
    }
}
