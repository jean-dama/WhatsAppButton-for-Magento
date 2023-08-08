<?php
namespace WhatsApp\Button\Helper; /*
First, we specify the namespace for our class and include the necessary usage instructions to import the required classes.
Primeiro, estamos especificando o namespace para a nossa classe e incluindo o necessario para importar as classes.
*/
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
/* 
The Data class is defined and extends the \Magento\Framework\App\Helper\AbstractHelper class, which is a parent class 
for helper classes in Magento 2.
In the constructor,we are injecting two dependencies: Context and ScopeConfigInterface.
A classe Data é definida e extende o \Magento\Framework\App\Helper\AbstractHelper class, a qual é parente class 
para helper classes no Magento 2
No constructor nos estamos injetando duas depencencias Context e Scope ConfigInterface
*/
{
    const GENERAL_ENABLE = 'whatsapp/whatsapp_button/general/active';
    const WHATS_NUMBER = 'whatsapp/whatsapp_button/phone_number';
    const WHATS_MESSAGE = 'whatsapp/whatsapp_button/message';

    protected $scopeConfig;
    /*We are calling the constructor of the parent class using parent::__construct($context);. 
    This ensures that the parent class's constructor is executed properly.
    Nos estamos chamando o constructor para a classe parente, usando parent::__construct($context)
    Isso garente que o parente da classe constructor é executada corretamente*/
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    )/*Inject ScopeConfigInterFace and scopeConfig
     Injetando o objecto corretamente no scopeConfig*/ {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }
    /**
     * Returnando status
     *
     * @return string
     */
    public function getStatus($store = 0){
        return $this->scopeConfig->getValue(self::GENERAL_ENABLE, ScopeInterface::SCOPE_STORES, $store);
    }
    /**
     * Returnando phone
     *
     * @return string
     */
    public function getPhone($store = 0){
        return $this->scopeConfig->getValue(self::WHATS_NUMBER, ScopeInterface::SCOPE_STORES, $store);
    }
    /**
     * Returnando message
     *
     * @return string
     */
    public function getMessage($store = 0){
        return $this->scopeConfig->getValue(self::WHATS_MESSAGE, ScopeInterface::SCOPE_STORES, $store);
    }
}
