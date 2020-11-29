<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201129122940 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule_photo (vehicule_id INT NOT NULL, photo_id INT NOT NULL, INDEX IDX_246E7C4A4A4A3511 (vehicule_id), INDEX IDX_246E7C4A7E9E4C8C (photo_id), PRIMARY KEY(vehicule_id, photo_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule_energy (vehicule_id INT NOT NULL, energy_id INT NOT NULL, INDEX IDX_124490B14A4A3511 (vehicule_id), INDEX IDX_124490B1EDDF52D (energy_id), PRIMARY KEY(vehicule_id, energy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule_photo ADD CONSTRAINT FK_246E7C4A4A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule_photo ADD CONSTRAINT FK_246E7C4A7E9E4C8C FOREIGN KEY (photo_id) REFERENCES photo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule_energy ADD CONSTRAINT FK_124490B14A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule_energy ADD CONSTRAINT FK_124490B1EDDF52D FOREIGN KEY (energy_id) REFERENCES energy (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE garage ADD professionnal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610B7FC96A42 FOREIGN KEY (professionnal_id) REFERENCES professionnal (id)');
        $this->addSql('CREATE INDEX IDX_9F26610B7FC96A42 ON garage (professionnal_id)');
        $this->addSql('ALTER TABLE model ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D944F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_D79572D944F5D008 ON model (brand_id)');
        $this->addSql('ALTER TABLE vehicule ADD model_id INT DEFAULT NULL, ADD garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D7975B7E7 ON vehicule (model_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DC4FFF555 ON vehicule (garage_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vehicule_photo');
        $this->addSql('DROP TABLE vehicule_energy');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610B7FC96A42');
        $this->addSql('DROP INDEX IDX_9F26610B7FC96A42 ON garage');
        $this->addSql('ALTER TABLE garage DROP professionnal_id');
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D944F5D008');
        $this->addSql('DROP INDEX IDX_D79572D944F5D008 ON model');
        $this->addSql('ALTER TABLE model DROP brand_id');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7975B7E7');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC4FFF555');
        $this->addSql('DROP INDEX IDX_292FFF1D7975B7E7 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DC4FFF555 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP model_id, DROP garage_id');
    }
}
