<?php

namespace Omnipay\Paddle\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Class PurchaseRequest
 * @package Omnipay\Paddle\Message
 */
class PurchaseRequest extends AbstractRequest
{

    /**
     * Set the product
     *
     * @param string $value
     *
     * @return $this
     */
    public function setProduct($value)
    {
        return $this->setParameter('product', $value);
    }

    /**
     * Get the product
     * @return mixed
     */
    public function getProduct()
    {
        return $this->getParameter('product');
    }

    /**
     * @param $value
     *
     * @return \Omnipay\Paddle\Message\PurchaseRequest
     */
    public function setRedirect($value) {
        return $this->setParameter('redirect', !empty($value));
    }

    /**
     * @return mixed
     */
    public function getRedirect() {
        return $this->getParameter('redirect');
    }

    /**
     * Set the passthrough params
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPassThrough($value)
    {
        return $this->setParameter('passthrough', $value);
    }

    /**
     * Get the passthrough params
     * @return mixed
     */
    public function getPassThrough()
    {
        return $this->getParameter('passthrough');
    }

    /**
     * Prepare data to send
     * @return array
     */
    public function getData()
    {

        return  [
            'redirect' => $this->getRedirect()
        ];
    }

    /**
     * Send data and return response instance
     *
     * @param mixed $data
     *
     * @return \Omnipay\Common\Message\ResponseInterface|\Omnipay\Paddle\Message\PurchaseResponse
     */
    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}