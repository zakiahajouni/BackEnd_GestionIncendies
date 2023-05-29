<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230516002603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, postid_id INT DEFAULT NULL, pubuser_id INT DEFAULT NULL, comment LONGTEXT DEFAULT NULL, INDEX IDX_67F068BCEB348947 (postid_id), INDEX IDX_67F068BC73BC059 (pubuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCEB348947 FOREIGN KEY (postid_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC73BC059 FOREIGN KEY (pubuser_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCEB348947');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC73BC059');
        $this->addSql('DROP TABLE commentaire');
    }
}
