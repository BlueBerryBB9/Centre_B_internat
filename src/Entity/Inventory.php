<?php

namespace App\Entity;

use App\Repository\InventoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryRepository::class)]
class Inventory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;
    
    #[ORM\Column]
    private ?int $n_chambre = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_entree = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_sortie = null;
    
    #[ORM\Column(length: 255)]
    private ?string $section = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre_heures = null;

    #[ORM\Column(nullable: true)]
    private ?float $couts = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse_sortie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $porte_e_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_e_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_e_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_e_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_ch_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_ch_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_ch_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fenetre_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prises_ch_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $armoire_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bureau_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $table_chevet_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chaises_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lit_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matelas_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $oreiller_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_tele_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_info_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_tv_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $luminaire_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_sb_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_sb_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_sb_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prises_sb_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vasque_lavabo_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $toilettes_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $miroir_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $abattan_toilettes_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $patere_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pare_douche_en = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $porte_e_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_e_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_e_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_e_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_ch_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_ch_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_ch_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fenetre_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prises_ch_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $armoire_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bureau_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $table_chevet_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chaises_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lit_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matelas_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $oreiller_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_tele_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_info_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prise_tv_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $luminaire_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sol_sb_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mur_sb_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plafond_sb_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prises_sb_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vasque_lavabo_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $toilettes_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $miroir_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $abattan_toilettes_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $patere_so = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pare_douche_so = null;

    #[ORM\ManyToOne(inversedBy: 'inventories')]
    private ?User $auteur = null;

    #[ORM\ManyToOne(inversedBy: 'inventories')]
    private ?Chambre $chambre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNChambre(): ?int
    {
        return $this->n_chambre;
    }

    public function setNChambre(int $n_chambre): static
    {
        $this->n_chambre = $n_chambre;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->date_entree;
    }

    public function setDateEntree(\DateTimeInterface $date_entree): static
    {
        $this->date_entree = $date_entree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(?\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getNombreHeures(): ?int
    {
        return $this->nombre_heures;
    }

    public function setNombreHeures(?int $nombre_heures): static
    {
        $this->nombre_heures = $nombre_heures;

        return $this;
    }

    public function getCouts(): ?float
    {
        return $this->couts;
    }

    public function setCouts(?float $couts): static
    {
        $this->couts = $couts;

        return $this;
    }

    public function getAdresseSortie(): ?string
    {
        return $this->adresse_sortie;
    }

    public function setAdresseSortie(?string $adresse_sortie): static
    {
        $this->adresse_sortie = $adresse_sortie;

        return $this;
    }

    public function getPorteEEn(): ?string
    {
        return $this->porte_e_en;
    }

    public function setPorteEEn(?string $porte_e_en): static
    {
        $this->porte_e_en = $porte_e_en;

        return $this;
    }

    public function getSolEEn(): ?string
    {
        return $this->sol_e_en;
    }

    public function setSolEEn(?string $sol_e_en): static
    {
        $this->sol_e_en = $sol_e_en;

        return $this;
    }

    public function getMurEEn(): ?string
    {
        return $this->mur_e_en;
    }

    public function setMurEEn(?string $mur_e_en): static
    {
        $this->mur_e_en = $mur_e_en;

        return $this;
    }

    public function getPlafondEEn(): ?string
    {
        return $this->plafond_e_en;
    }

    public function setPlafondEEn(?string $plafond_e_en): static
    {
        $this->plafond_e_en = $plafond_e_en;

        return $this;
    }

    public function getSolChEn(): ?string
    {
        return $this->sol_ch_en;
    }

    public function setSolChEn(?string $sol_ch_en): static
    {
        $this->sol_ch_en = $sol_ch_en;

        return $this;
    }

    public function getMurChEn(): ?string
    {
        return $this->mur_ch_en;
    }

    public function setMurChEn(?string $mur_ch_en): static
    {
        $this->mur_ch_en = $mur_ch_en;

        return $this;
    }

    public function getPlafondChEn(): ?string
    {
        return $this->plafond_ch_en;
    }

    public function setPlafondChEn(?string $plafond_ch_en): static
    {
        $this->plafond_ch_en = $plafond_ch_en;

        return $this;
    }

    public function getFenetreEn(): ?string
    {
        return $this->fenetre_en;
    }

    public function setFenetreEn(?string $fenetre_en): static
    {
        $this->fenetre_en = $fenetre_en;

        return $this;
    }

    public function getPrisesChEn(): ?string
    {
        return $this->prises_ch_en;
    }

    public function setPrisesChEn(?string $prises_ch_en): static
    {
        $this->prises_ch_en = $prises_ch_en;

        return $this;
    }

    public function getArmoireEn(): ?string
    {
        return $this->armoire_en;
    }

    public function setArmoireEn(?string $armoire_en): static
    {
        $this->armoire_en = $armoire_en;

        return $this;
    }

    public function getBureauEn(): ?string
    {
        return $this->bureau_en;
    }

    public function setBureauEn(?string $bureau_en): static
    {
        $this->bureau_en = $bureau_en;

        return $this;
    }

    public function getTableChevetEn(): ?string
    {
        return $this->table_chevet_en;
    }

    public function setTableChevetEn(?string $table_chevet_en): static
    {
        $this->table_chevet_en = $table_chevet_en;

        return $this;
    }

    public function getChaisesEn(): ?string
    {
        return $this->chaises_en;
    }

    public function setChaisesEn(?string $chaises_en): static
    {
        $this->chaises_en = $chaises_en;

        return $this;
    }

    public function getLitEn(): ?string
    {
        return $this->lit_en;
    }

    public function setLitEn(?string $lit_en): static
    {
        $this->lit_en = $lit_en;

        return $this;
    }

    public function getMatelasEn(): ?string
    {
        return $this->matelas_en;
    }

    public function setMatelasEn(?string $matelas_en): static
    {
        $this->matelas_en = $matelas_en;

        return $this;
    }

    public function getOreillerEn(): ?string
    {
        return $this->oreiller_en;
    }

    public function setOreillerEn(?string $oreiller_en): static
    {
        $this->oreiller_en = $oreiller_en;

        return $this;
    }

    public function getPriseTeleEn(): ?string
    {
        return $this->prise_tele_en;
    }

    public function setPriseTeleEn(string $prise_tele_en): static
    {
        $this->prise_tele_en = $prise_tele_en;

        return $this;
    }

    public function getPriseInfoEn(): ?string
    {
        return $this->prise_info_en;
    }

    public function setPriseInfoEn(string $prise_info_en): static
    {
        $this->prise_info_en = $prise_info_en;

        return $this;
    }

    public function getPriseTvEn(): ?string
    {
        return $this->prise_tv_en;
    }

    public function setPriseTvEn(string $prise_tv_en): static
    {
        $this->prise_tv_en = $prise_tv_en;

        return $this;
    }

    public function getLuminaireEn(): ?string
    {
        return $this->luminaire_en;
    }

    public function setLuminaireEn(string $luminaire_en): static
    {
        $this->luminaire_en = $luminaire_en;

        return $this;
    }

    public function getSolSbEn(): ?string
    {
        return $this->sol_sb_en;
    }

    public function setSolSbEn(string $sol_sb_en): static
    {
        $this->sol_sb_en = $sol_sb_en;

        return $this;
    }

    public function getMurSbEn(): ?string
    {
        return $this->mur_sb_en;
    }

    public function setMurSbEn(string $mur_sb_en): static
    {
        $this->mur_sb_en = $mur_sb_en;

        return $this;
    }

    public function getPlafondSbEn(): ?string
    {
        return $this->plafond_sb_en;
    }

    public function setPlafondSbEn(string $plafond_sb_en): static
    {
        $this->plafond_sb_en = $plafond_sb_en;

        return $this;
    }

    public function getPrisesSbEn(): ?string
    {
        return $this->prises_sb_en;
    }

    public function setPrisesSbEn(string $prises_sb_en): static
    {
        $this->prises_sb_en = $prises_sb_en;

        return $this;
    }

    public function getVasqueLavaboEn(): ?string
    {
        return $this->vasque_lavabo_en;
    }

    public function setVasqueLavaboEn(string $vasque_lavabo_en): static
    {
        $this->vasque_lavabo_en = $vasque_lavabo_en;

        return $this;
    }

    public function getToilettesEn(): ?string
    {
        return $this->toilettes_en;
    }

    public function setToilettesEn(string $toilettes_en): static
    {
        $this->toilettes_en = $toilettes_en;

        return $this;
    }

    public function getMiroirEn(): ?string
    {
        return $this->miroir_en;
    }

    public function setMiroirEn(string $miroir_en): static
    {
        $this->miroir_en = $miroir_en;

        return $this;
    }

    public function getAbattanToilettesEn(): ?string
    {
        return $this->abattan_toilettes_en;
    }

    public function setAbattanToilettesEn(string $abattan_toilettes_en): static
    {
        $this->abattan_toilettes_en = $abattan_toilettes_en;

        return $this;
    }

    public function getPatereEn(): ?string
    {
        return $this->patere_en;
    }

    public function setPatereEn(string $patere_en): static
    {
        $this->patere_en = $patere_en;

        return $this;
    }

    public function getPareDoucheEn(): ?string
    {
        return $this->pare_douche_en;
    }

    public function setPareDoucheEn(string $pare_douche_en): static
    {
        $this->pare_douche_en = $pare_douche_en;

        return $this;
    }

    public function getPorteESo(): ?string
    {
        return $this->porte_e_so;
    }

    public function setPorteESo(?string $porte_e_so): static
    {
        $this->porte_e_so = $porte_e_so;

        return $this;
    }

    public function getSolESo(): ?string
    {
        return $this->sol_e_so;
    }

    public function setSolESo(?string $sol_e_so): static
    {
        $this->sol_e_so = $sol_e_so;

        return $this;
    }

    public function getMurESo(): ?string
    {
        return $this->mur_e_so;
    }

    public function setMurESo(?string $mur_e_so): static
    {
        $this->mur_e_so = $mur_e_so;

        return $this;
    }

    public function getPlafondESo(): ?string
    {
        return $this->plafond_e_so;
    }

    public function setPlafondESo(?string $plafond_e_so): static
    {
        $this->plafond_e_so = $plafond_e_so;

        return $this;
    }

    public function getSolChSo(): ?string
    {
        return $this->sol_ch_so;
    }

    public function setSolChSo(?string $sol_ch_so): static
    {
        $this->sol_ch_so = $sol_ch_so;

        return $this;
    }

    public function getMurChSo(): ?string
    {
        return $this->mur_ch_so;
    }

    public function setMurChSo(?string $mur_ch_so): static
    {
        $this->mur_ch_so = $mur_ch_so;

        return $this;
    }

    public function getPlafondChSo(): ?string
    {
        return $this->plafond_ch_so;
    }

    public function setPlafondChSo(?string $plafond_ch_so): static
    {
        $this->plafond_ch_so = $plafond_ch_so;

        return $this;
    }

    public function getFenetreSo(): ?string
    {
        return $this->fenetre_so;
    }

    public function setFenetreSo(?string $fenetre_so): static
    {
        $this->fenetre_so = $fenetre_so;

        return $this;
    }

    public function getPrisesChSo(): ?string
    {
        return $this->prises_ch_so;
    }

    public function setPrisesChSo(?string $prises_ch_so): static
    {
        $this->prises_ch_so = $prises_ch_so;

        return $this;
    }

    public function getArmoirESo(): ?string
    {
        return $this->armoire_so;
    }

    public function setArmoirESo(?string $armoire_so): static
    {
        $this->armoire_so = $armoire_so;

        return $this;
    }

    public function getBureauSo(): ?string
    {
        return $this->bureau_so;
    }

    public function setBureauSo(?string $bureau_so): static
    {
        $this->bureau_so = $bureau_so;

        return $this;
    }

    public function getTableChevetSo(): ?string
    {
        return $this->table_chevet_so;
    }

    public function setTableChevetSo(?string $table_chevet_so): static
    {
        $this->table_chevet_so = $table_chevet_so;

        return $this;
    }

    public function getChaisesSo(): ?string
    {
        return $this->chaises_so;
    }

    public function setChaisesSo(?string $chaises_so): static
    {
        $this->chaises_so = $chaises_so;

        return $this;
    }

    public function getLitSo(): ?string
    {
        return $this->lit_so;
    }

    public function setLitSo(?string $lit_so): static
    {
        $this->lit_so = $lit_so;

        return $this;
    }

    public function getMatelasSo(): ?string
    {
        return $this->matelas_so;
    }

    public function setMatelasSo(?string $matelas_so): static
    {
        $this->matelas_so = $matelas_so;

        return $this;
    }

    public function getOreillerSo(): ?string
    {
        return $this->oreiller_so;
    }

    public function setOreillerSo(?string $oreiller_so): static
    {
        $this->oreiller_so = $oreiller_so;

        return $this;
    }

    public function getPriseTelESo(): ?string
    {
        return $this->prise_tele_so;
    }

    public function setPriseTelESo(string $prise_tele_so): static
    {
        $this->prise_tele_so = $prise_tele_so;

        return $this;
    }

    public function getPriseInfoSo(): ?string
    {
        return $this->prise_info_so;
    }

    public function setPriseInfoSo(string $prise_info_so): static
    {
        $this->prise_info_so = $prise_info_so;

        return $this;
    }

    public function getPriseTvSo(): ?string
    {
        return $this->prise_tv_so;
    }

    public function setPriseTvSo(string $prise_tv_so): static
    {
        $this->prise_tv_so = $prise_tv_so;

        return $this;
    }

    public function getLuminaireSo(): ?string
    {
        return $this->luminaire_so;
    }

    public function setLuminaireSo(string $luminaire_so): static
    {
        $this->luminaire_so = $luminaire_so;

        return $this;
    }

    public function getSolSbSo(): ?string
    {
        return $this->sol_sb_so;
    }

    public function setSolSbSo(string $sol_sb_so): static
    {
        $this->sol_sb_so = $sol_sb_so;

        return $this;
    }

    public function getMurSbSo(): ?string
    {
        return $this->mur_sb_so;
    }

    public function setMurSbSo(string $mur_sb_so): static
    {
        $this->mur_sb_so = $mur_sb_so;

        return $this;
    }

    public function getPlafondSbSo(): ?string
    {
        return $this->plafond_sb_so;
    }

    public function setPlafondSbSo(string $plafond_sb_so): static
    {
        $this->plafond_sb_so = $plafond_sb_so;

        return $this;
    }

    public function getPrisesSbSo(): ?string
    {
        return $this->prises_sb_so;
    }

    public function setPrisesSbSo(string $prises_sb_so): static
    {
        $this->prises_sb_so = $prises_sb_so;

        return $this;
    }

    public function getVasqueLavaboSo(): ?string
    {
        return $this->vasque_lavabo_so;
    }

    public function setVasqueLavaboSo(string $vasque_lavabo_so): static
    {
        $this->vasque_lavabo_so = $vasque_lavabo_so;

        return $this;
    }

    public function getToilettesSo(): ?string
    {
        return $this->toilettes_so;
    }

    public function setToilettesSo(string $toilettes_so): static
    {
        $this->toilettes_so = $toilettes_so;

        return $this;
    }

    public function getMiroirSo(): ?string
    {
        return $this->miroir_so;
    }

    public function setMiroirSo(string $miroir_so): static
    {
        $this->miroir_so = $miroir_so;

        return $this;
    }

    public function getAbattanToilettesSo(): ?string
    {
        return $this->abattan_toilettes_so;
    }

    public function setAbattanToilettesSo(string $abattan_toilettes_so): static
    {
        $this->abattan_toilettes_so = $abattan_toilettes_so;

        return $this;
    }

    public function getPatereSo(): ?string
    {
        return $this->patere_so;
    }

    public function setPatereSo(string $patere_so): static
    {
        $this->patere_so = $patere_so;

        return $this;
    }

    public function getPareDoucheSo(): ?string
    {
        return $this->pare_douche_so;
    }

    public function setPareDoucheSo(string $pare_douche_so): static
    {
        $this->pare_douche_so = $pare_douche_so;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->chambre;
    }

    public function setChambre(?Chambre $chambre): static
    {
        $this->chambre = $chambre;

        return $this;
    }
}
