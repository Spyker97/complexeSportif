<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220170752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enfant ADD academie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enfant ADD CONSTRAINT FK_34B70CA2B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('CREATE INDEX IDX_34B70CA2B38A0D28 ON enfant (academie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enfant DROP FOREIGN KEY FK_34B70CA2B38A0D28');
        $this->addSql('DROP INDEX IDX_34B70CA2B38A0D28 ON enfant');
        $this->addSql('ALTER TABLE enfant DROP academie_id');
    }
}
