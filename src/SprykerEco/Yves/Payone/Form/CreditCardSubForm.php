<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\Payone\Form;

use Generated\Shared\Transfer\PaymentTransfer;
use Generated\Shared\Transfer\PayonePaymentCreditCardTransfer;
use Spryker\Yves\StepEngine\Dependency\Form\SubFormInterface;
use SprykerEco\Shared\Payone\PayoneConstants;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CreditCardSubForm extends AbstractPayoneSubForm
{
    const PAYMENT_METHOD = 'credit_card';

    const FIELD_CARD_TYPE = 'cardtype';
    const FIELD_CARD_NUMBER = 'cardpan';
    const FIELD_NAME_ON_CARD = 'cardholder';
    const FIELD_CARD_EXPIRES_MONTH = 'cardexpiredate_month';
    const FIELD_CARD_EXPIRES_YEAR = 'cardexpiredate_year';
    const FIELD_CARD_SECURITY_CODE = 'cardcvc2';
    const FIELD_PSEUDO_CARD_NUMBER = 'pseudocardpan';

    const OPTION_CARD_EXPIRES_CHOICES_MONTH = 'month choices';
    const OPTION_CARD_EXPIRES_CHOICES_YEAR = 'year choices';
    const OPTION_CARD_TYPES = 'card types';

    const OPTION_PAYONE_SETTINGS = 'payone settings';

    /**
     * @return string
     */
    public function getName()
    {
        return PaymentTransfer::PAYONE_CREDIT_CARD;
    }

    /**
     * @return string
     */
    public function getPropertyPath()
    {
        return PaymentTransfer::PAYONE_CREDIT_CARD;
    }

    /**
     * @return string
     */
    public function getTemplatePath()
    {
        return PayoneConstants::PROVIDER_NAME . '/' . self::PAYMENT_METHOD;
    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PayonePaymentCreditCardTransfer::class,
        ])->setRequired(SubFormInterface::OPTIONS_FIELD_NAME);
    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     *
     * @return void
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addCardType($builder, $options)
            ->addNameOnCard($builder)
            ->addHiddenInputs($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    public function addCardType(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            self::FIELD_CARD_TYPE,
            ChoiceType::class,
            [
                'choices' => $options[self::OPTIONS_FIELD_NAME][self::OPTION_CARD_TYPES],
                'label' => false,
                'required' => true,
                'expanded' => false,
                'multiple' => false,
                'placeholder' => false,
                'constraints' => [
                    $this->createNotBlankConstraint(),
                ],
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    protected function addCardNumber(FormBuilderInterface $builder)
    {
        $builder->add(
            self::FIELD_CARD_NUMBER,
            TextType::class,
            [
                'label' => false,
                'required' => false,
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    protected function addNameOnCard(FormBuilderInterface $builder)
    {
        $builder->add(
            self::FIELD_NAME_ON_CARD,
            TextType::class,
            [
                'label' => false,
                'required' => true,
                'constraints' => [
                    $this->createNotBlankConstraint(),
                ],
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    protected function addCardExpiresMonth(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            self::FIELD_CARD_EXPIRES_MONTH,
            ChoiceType::class,
            [
                'label' => false,
                'choices' => $options[self::OPTIONS_FIELD_NAME][self::OPTION_CARD_EXPIRES_CHOICES_MONTH],
                'required' => true,
                'constraints' => [
                    $this->createNotBlankConstraint(),
                ],
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    protected function addCardExpiresYear(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            self::FIELD_CARD_EXPIRES_YEAR,
            ChoiceType::class,
            [
                'label' => false,
                'choices' => $options[self::OPTIONS_FIELD_NAME][self::OPTION_CARD_EXPIRES_CHOICES_YEAR],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Expires year',
                ],
                'constraints' => [
                    $this->createNotBlankConstraint(),
                ],
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return \SprykerEco\Yves\Payone\Form\CreditCardSubForm
     */
    protected function addCardSecurityCode(FormBuilderInterface $builder)
    {
        $builder->add(
            self::FIELD_CARD_SECURITY_CODE,
            TextType::class,
            [
                'label' => false,
                'required' => false,
            ]
        );

        return $this;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */
    protected function addHiddenInputs(FormBuilderInterface $builder)
    {
        parent::addHiddenInputs($builder);

        $builder->add(
            self::FIELD_PSEUDO_CARD_NUMBER,
            HiddenType::class,
            [
                'label' => false,
            ]
        );

        return $this;
    }
}
