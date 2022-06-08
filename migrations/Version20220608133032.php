<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220608133032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289ACCF9E01E');
        $this->addSql('DROP INDEX IDX_B010289ACCF9E01E ON attached_file');
        $this->addSql('ALTER TABLE attached_file DROP departement_id');
        $this->addSql('ALTER TABLE task ADD incident_id INT NOT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB2559E53FB9 FOREIGN KEY (incident_id) REFERENCES incident (id)');
        $this->addSql('CREATE INDEX IDX_527EDB2559E53FB9 ON task (incident_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attached_file ADD departement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289ACCF9E01E FOREIGN KEY (departement_id) REFERENCES deparement (id)');
        $this->addSql('CREATE INDEX IDX_B010289ACCF9E01E ON attached_file (departement_id)');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB2559E53FB9');
        $this->addSql('DROP INDEX IDX_527EDB2559E53FB9 ON task');
        $this->addSql('ALTER TABLE task DROP incident_id');
    }
}
