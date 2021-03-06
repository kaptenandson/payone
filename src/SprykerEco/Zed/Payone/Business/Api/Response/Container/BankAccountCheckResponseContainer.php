<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Payone\Business\Api\Response\Container;

class BankAccountCheckResponseContainer extends AbstractResponseContainer
{
    /**
     * @var string
     */
    protected $bankcountry;

    /**
     * @var string
     */
    protected $bankcode;

    /**
     * @var string
     */
    protected $bankaccount;

    /**
     * @var string
     */
    protected $bankbranchcode;

    /**
     * @var string
     */
    protected $bankcheckdigit;

    /**
     * @var string
     */
    protected $iban;

    /**
     * @var string
     */
    protected $bic;

    /**
     * @param string $bankaccount
     *
     * @return void
     */
    public function setBankAccount($bankaccount)
    {
        $this->bankaccount = $bankaccount;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
        return $this->bankaccount;
    }

    /**
     * @param string $bankbranchcode
     *
     * @return void
     */
    public function setBankBranchCode($bankbranchcode)
    {
        $this->bankbranchcode = $bankbranchcode;
    }

    /**
     * @return string
     */
    public function getBankBranchCode()
    {
        return $this->bankbranchcode;
    }

    /**
     * @param string $bankcheckdigit
     *
     * @return void
     */
    public function setBankCheckDigit($bankcheckdigit)
    {
        $this->bankcheckdigit = $bankcheckdigit;
    }

    /**
     * @return string
     */
    public function getBankCheckDigit()
    {
        return $this->bankcheckdigit;
    }

    /**
     * @param string $bankcode
     *
     * @return void
     */
    public function setBankCode($bankcode)
    {
        $this->bankcode = $bankcode;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankcode;
    }

    /**
     * @param string $bankcountry
     *
     * @return void
     */
    public function setBankCountry($bankcountry)
    {
        $this->bankcountry = $bankcountry;
    }

    /**
     * @return string
     */
    public function getBankCountry()
    {
        return $this->bankcountry;
    }

    /**
     * @param string $bic
     *
     * @return void
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $iban
     *
     * @return void
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }
}
