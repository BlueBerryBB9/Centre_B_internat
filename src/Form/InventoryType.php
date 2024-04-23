<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Inventory;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InventoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('createdAt', null, [
                'widget' => 'single_text',
            ])
            ->add('nom')
            ->add('prenom')
            ->add('n_chambre')
            ->add('date_entree', null, [
                'widget' => 'single_text',
            ])
            ->add('date_sortie', null, [
                'widget' => 'single_text',
            ])
            ->add('section')
            ->add('nombre_heures')
            ->add('couts')
            ->add('adresse_sortie')
            ->add('porte_e_en')
            ->add('sol_e_en')
            ->add('mur_e_en')
            ->add('plafond_e_en')
            ->add('sol_ch_en')
            ->add('mur_ch_en')
            ->add('plafond_ch_en')
            ->add('fenetre_en')
            ->add('prises_ch_en')
            ->add('armoire_en')
            ->add('bureau_en')
            ->add('table_chevet_en')
            ->add('chaises_en')
            ->add('lit_en')
            ->add('matelas_en')
            ->add('oreiller_en')
            ->add('prise_tele_en')
            ->add('prise_info_en')
            ->add('prise_tv_en')
            ->add('luminaire_en')
            ->add('sol_sb_en')
            ->add('mur_sb_en')
            ->add('plafond_sb_en')
            ->add('prises_sb_en')
            ->add('vasque_lavabo_en')
            ->add('toilettes_en')
            ->add('miroir_en')
            ->add('abattan_toilettes_en')
            ->add('patere_en')
            ->add('pare_douche_en')
            ->add('porte_e_so')
            ->add('sol_e_so')
            ->add('mur_e_so')
            ->add('plafond_e_so')
            ->add('sol_ch_so')
            ->add('mur_ch_so')
            ->add('plafond_ch_so')
            ->add('fenetre_so')
            ->add('prises_ch_so')
            ->add('armoire_so')
            ->add('bureau_so')
            ->add('table_chevet_so')
            ->add('chaises_so')
            ->add('lit_so')
            ->add('matelas_so')
            ->add('oreiller_so')
            ->add('prise_tele_so')
            ->add('prise_info_so')
            ->add('prise_tv_so')
            ->add('luminaire_so')
            ->add('sol_sb_so')
            ->add('mur_sb_so')
            ->add('plafond_sb_so')
            ->add('prises_sb_so')
            ->add('vasque_lavabo_so')
            ->add('toilettes_so')
            ->add('miroir_so')
            ->add('abattan_toilettes_so')
            ->add('patere_so')
            ->add('pare_douche_so')
            ->add('auteur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('chambre', EntityType::class, [
                'class' => Chambre::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inventory::class,
        ]);
    }
}
