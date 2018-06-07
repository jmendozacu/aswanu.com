<?php

class Unirgy_DropshipVendorProduct_Block_Vendor_Product_Form_Downloadable extends Varien_Data_Form_Element_Abstract
{
    public function getHtml()
    {
        if (Mage::helper('udropship')->hasMageFeature('uploader')) {
            $rendererBlock = 'udprod/vendor_product_renderer_downloadableFlow';
        } else {
            $rendererBlock = 'udprod/vendor_product_renderer_downloadable';
        }
        $this->_renderer = Mage::getSingleton('core/layout')->createBlock($rendererBlock, 'admin.product.options');
        $this->_renderer->setProduct($this->_product);
        return parent::getHtml();
    }
    protected $_product;
    public function setProduct($product)
    {
        $this->_product = $product;
        return $this;
    }
    public function getProduct()
    {
        return $this->_product;
    }
}