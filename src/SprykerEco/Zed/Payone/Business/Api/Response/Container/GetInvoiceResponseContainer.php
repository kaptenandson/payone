<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Payone\Business\Api\Response\Container;

class GetInvoiceResponseContainer extends AbstractResponseContainer
{
    /**
     * @var string
     */
    protected $response;

    /**
     * @param string $response
     *
     * @return void
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->isError()) {
            $result = parent::__toString();
        } else {
            $stringArray = ['status=' . $this->getStatus(), 'data=PDF-Content'];
            $result = implode('|', $stringArray);
        }

        return $result;
    }
}
