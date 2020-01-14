<?php

namespace Omnipay\Paddle;

use Omnipay\Common\Http\ClientInterface;
use Omnipay\Common\AbstractGateway;
use Omnipay\NetCash\Message\CompletePurchaseRequest;
use Omnipay\NetCash\Message\PurchaseRequest;
use Symfony\Component\HttpFoundation\Request as HttpRequest;

/**
 * Class Gateway
 * @package Omnipay\Paddle
 */
class Gateway extends AbstractGateway
{

    const API_URL = '';

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return 'Paddle';
    }

    /**
     * Gateway constructor.
     *
     * @param \Omnipay\Common\Http\ClientInterface|null      $httpClient
     * @param \Symfony\Component\HttpFoundation\Request|null $httpRequest
     */
    public function __construct(ClientInterface $httpClient = null, HttpRequest $httpRequest = null)
    {
        parent::__construct($httpClient, $httpRequest);
    }

    /**
     * Get default parameters
     * @return array|\Illuminate\Config\Repository|mixed
     */
    public function getDefaultParameters()
    {
        return [
            'vendorId' => '',
        ];
    }

    /**
     * Sets the request Vendor ID.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setVendorId($value)
    {
        return $this->setParameter('vendorId', $value);
    }

    /**
     * Get the request Vendor ID.
     * @return mixed
     */
    public function getVendorId()
    {
        return $this->getParameter('vendorId');
    }

    /**
     * Sets the environment
     *
     * @param string $value
     *
     * @return $this
     */
    public function setEnvironment($value)
    {
        return $this->setParameter('environment', $value);
    }

    /**
     * Get the environment
     * @return mixed
     */
    public function getEnvironment()
    {
        return $this->getParameter('environment');
    }

    /**
     * Create a purchase request
     *
     * @param array $options
     *
     */
    public function purchase(array $options = array())
    {
        return ;
    }

    /**
     * Complete purchase
     *
     * @param array $options
     *
     */
    public function completePurchase(array $options = array())
    {
        return ;
    }

}
