<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307233335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F2C115A61');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E714819A0');
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, cours_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, number INT NOT NULL, mail VARCHAR(255) NOT NULL, date_inscri DATE NOT NULL, INDEX IDX_351268BB7ECF78B0 (cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE academie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, nbr_seances INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, nom_coach VARCHAR(255) NOT NULL, num_salle INT NOT NULL, type_cours VARCHAR(255) NOT NULL, heure TIME NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enfant (id INT AUTO_INCREMENT NOT NULL, academie_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, age INT NOT NULL, poids INT NOT NULL, taille INT NOT NULL, cinparent VARCHAR(255) NOT NULL, INDEX IDX_34B70CA2B38A0D28 (academie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, idterrain_id INT DEFAULT NULL, cin INT NOT NULL, discipline VARCHAR(255) NOT NULL, INDEX IDX_42C849554784967B (idterrain_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terrain (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, chef VARCHAR(255) NOT NULL, equipement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, cin INT NOT NULL, username VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649ABE530DA (cin), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE enfant ADD CONSTRAINT FK_34B70CA2B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849554784967B FOREIGN KEY (idterrain_id) REFERENCES terrain (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE type_event');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enfant DROP FOREIGN KEY FK_34B70CA2B38A0D28');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB7ECF78B0');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849554784967B');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, type_id_id INT DEFAULT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_start DATETIME NOT NULL, date_end DATETIME NOT NULL, nombre_par INT DEFAULT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, photo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_B26681E714819A0 (type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participation (id INT AUTO_INCREMENT NOT NULL, id_evenement_id INT DEFAULT NULL, date VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_user INT NOT NULL, INDEX IDX_AB55E24F2C115A61 (id_evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_event (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E714819A0 FOREIGN KEY (type_id_id) REFERENCES type_event (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F2C115A61 FOREIGN KEY (id_evenement_id) REFERENCES evenement (id)');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE academie');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE enfant');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('DROP TABLE user');
    }
}
