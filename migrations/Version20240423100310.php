<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423100310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inventory ADD auteur_id INT DEFAULT NULL, ADD chambre_id INT DEFAULT NULL, ADD created_at DATE NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD n_chambre INT NOT NULL, ADD date_entree DATE NOT NULL, ADD date_sortie DATE DEFAULT NULL, ADD section VARCHAR(255) NOT NULL, ADD nombre_heures INT DEFAULT NULL, ADD couts DOUBLE PRECISION DEFAULT NULL, ADD adresse_sortie VARCHAR(255) DEFAULT NULL, ADD porte_e_en VARCHAR(255) DEFAULT NULL, ADD sol_e_en VARCHAR(255) DEFAULT NULL, ADD mur_e_en VARCHAR(255) DEFAULT NULL, ADD plafond_e_en VARCHAR(255) DEFAULT NULL, ADD sol_ch_en VARCHAR(255) DEFAULT NULL, ADD mur_ch_en VARCHAR(255) DEFAULT NULL, ADD plafond_ch_en VARCHAR(255) DEFAULT NULL, ADD fenetre_en VARCHAR(255) DEFAULT NULL, ADD prises_ch_en VARCHAR(255) DEFAULT NULL, ADD armoire_en VARCHAR(255) DEFAULT NULL, ADD bureau_en VARCHAR(255) DEFAULT NULL, ADD table_chevet_en VARCHAR(255) DEFAULT NULL, ADD chaises_en VARCHAR(255) DEFAULT NULL, ADD lit_en VARCHAR(255) DEFAULT NULL, ADD matelas_en VARCHAR(255) DEFAULT NULL, ADD oreiller_en VARCHAR(255) DEFAULT NULL, ADD prise_tele_en VARCHAR(255) DEFAULT NULL, ADD prise_info_en VARCHAR(255) DEFAULT NULL, ADD prise_tv_en VARCHAR(255) DEFAULT NULL, ADD luminaire_en VARCHAR(255) DEFAULT NULL, ADD sol_sb_en VARCHAR(255) DEFAULT NULL, ADD mur_sb_en VARCHAR(255) DEFAULT NULL, ADD plafond_sb_en VARCHAR(255) DEFAULT NULL, ADD prises_sb_en VARCHAR(255) DEFAULT NULL, ADD vasque_lavabo_en VARCHAR(255) DEFAULT NULL, ADD toilettes_en VARCHAR(255) DEFAULT NULL, ADD miroir_en VARCHAR(255) DEFAULT NULL, ADD abattan_toilettes_en VARCHAR(255) DEFAULT NULL, ADD patere_en VARCHAR(255) DEFAULT NULL, ADD pare_douche_en VARCHAR(255) DEFAULT NULL, ADD porte_e_so VARCHAR(255) DEFAULT NULL, ADD sol_e_so VARCHAR(255) DEFAULT NULL, ADD mur_e_so VARCHAR(255) DEFAULT NULL, ADD plafond_e_so VARCHAR(255) DEFAULT NULL, ADD sol_ch_so VARCHAR(255) DEFAULT NULL, ADD mur_ch_so VARCHAR(255) DEFAULT NULL, ADD plafond_ch_so VARCHAR(255) DEFAULT NULL, ADD fenetre_so VARCHAR(255) DEFAULT NULL, ADD prises_ch_so VARCHAR(255) DEFAULT NULL, ADD armoire_so VARCHAR(255) DEFAULT NULL, ADD bureau_so VARCHAR(255) DEFAULT NULL, ADD table_chevet_so VARCHAR(255) DEFAULT NULL, ADD chaises_so VARCHAR(255) DEFAULT NULL, ADD lit_so VARCHAR(255) DEFAULT NULL, ADD matelas_so VARCHAR(255) DEFAULT NULL, ADD oreiller_so VARCHAR(255) DEFAULT NULL, ADD prise_tele_so VARCHAR(255) DEFAULT NULL, ADD prise_info_so VARCHAR(255) DEFAULT NULL, ADD prise_tv_so VARCHAR(255) DEFAULT NULL, ADD luminaire_so VARCHAR(255) DEFAULT NULL, ADD sol_sb_so VARCHAR(255) DEFAULT NULL, ADD mur_sb_so VARCHAR(255) DEFAULT NULL, ADD plafond_sb_so VARCHAR(255) DEFAULT NULL, ADD prises_sb_so VARCHAR(255) DEFAULT NULL, ADD vasque_lavabo_so VARCHAR(255) DEFAULT NULL, ADD toilettes_so VARCHAR(255) DEFAULT NULL, ADD miroir_so VARCHAR(255) DEFAULT NULL, ADD abattan_toilettes_so VARCHAR(255) DEFAULT NULL, ADD patere_so VARCHAR(255) DEFAULT NULL, ADD pare_douche_so VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE inventory ADD CONSTRAINT FK_B12D4A3660BB6FE6 FOREIGN KEY (auteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE inventory ADD CONSTRAINT FK_B12D4A369B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id)');
        $this->addSql('CREATE INDEX IDX_B12D4A3660BB6FE6 ON inventory (auteur_id)');
        $this->addSql('CREATE INDEX IDX_B12D4A369B177F54 ON inventory (chambre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inventory DROP FOREIGN KEY FK_B12D4A3660BB6FE6');
        $this->addSql('ALTER TABLE inventory DROP FOREIGN KEY FK_B12D4A369B177F54');
        $this->addSql('DROP INDEX IDX_B12D4A3660BB6FE6 ON inventory');
        $this->addSql('DROP INDEX IDX_B12D4A369B177F54 ON inventory');
        $this->addSql('ALTER TABLE inventory DROP auteur_id, DROP chambre_id, DROP created_at, DROP nom, DROP prenom, DROP n_chambre, DROP date_entree, DROP date_sortie, DROP section, DROP nombre_heures, DROP couts, DROP adresse_sortie, DROP porte_e_en, DROP sol_e_en, DROP mur_e_en, DROP plafond_e_en, DROP sol_ch_en, DROP mur_ch_en, DROP plafond_ch_en, DROP fenetre_en, DROP prises_ch_en, DROP armoire_en, DROP bureau_en, DROP table_chevet_en, DROP chaises_en, DROP lit_en, DROP matelas_en, DROP oreiller_en, DROP prise_tele_en, DROP prise_info_en, DROP prise_tv_en, DROP luminaire_en, DROP sol_sb_en, DROP mur_sb_en, DROP plafond_sb_en, DROP prises_sb_en, DROP vasque_lavabo_en, DROP toilettes_en, DROP miroir_en, DROP abattan_toilettes_en, DROP patere_en, DROP pare_douche_en, DROP porte_e_so, DROP sol_e_so, DROP mur_e_so, DROP plafond_e_so, DROP sol_ch_so, DROP mur_ch_so, DROP plafond_ch_so, DROP fenetre_so, DROP prises_ch_so, DROP armoire_so, DROP bureau_so, DROP table_chevet_so, DROP chaises_so, DROP lit_so, DROP matelas_so, DROP oreiller_so, DROP prise_tele_so, DROP prise_info_so, DROP prise_tv_so, DROP luminaire_so, DROP sol_sb_so, DROP mur_sb_so, DROP plafond_sb_so, DROP prises_sb_so, DROP vasque_lavabo_so, DROP toilettes_so, DROP miroir_so, DROP abattan_toilettes_so, DROP patere_so, DROP pare_douche_so');
    }
}
