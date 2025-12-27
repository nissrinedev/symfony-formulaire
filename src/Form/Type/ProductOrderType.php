<?php
declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;  
use Symfony\Component\Form\Extension\Core\Type\SubmitType;   
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void  
    {
        $builder
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantity',
                'data' => 1, 
                'attr' => [
                    'min' => 1,
                    'max' => 10,
                    'class' => 'form-control',
                    'style' => 'max-width: 100px;'
                ]
            ])
            ->add('color', ChoiceType::class, [
                'label' => 'Select Color',
                'choices' => [
                    'Matte Black' => 'black',
                    'Pearl White' => 'white',
                    'Silver' => 'silver',
                ],
                'attr' => [
                    'class' => 'form-select',
                    'style' => 'max-width: 200px;'
                ]
            ])
            ->add('submit', SubmitType::class, [  
                'label' => 'Add to Cart',
                'attr' => [
                    'class' => 'btn btn-primary btn-lg'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'product_order',
        ]);
    }
}