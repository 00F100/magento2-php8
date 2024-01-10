<?php
namespace MagentoExample\ProductHome\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use MagentoExample\ProductHome\Helper\Data as ProductHomeHelper;
use Magento\Catalog\Api\ProductRepositoryInterface;

class FeaturedProduct extends Template
{
    protected $helper;
    protected $productRepository;

    public function __construct(
        Context $context,
        ProductHomeHelper $helper,
        ProductRepositoryInterface $productRepository,
        array $data = []
    ) {
        $this->helper = $helper;
        $this->productRepository = $productRepository;
        parent::__construct($context, $data);
    }

    public function isBlockEnabled()
    {
        return $this->helper->getGeneralConfig('enable');
    }

    public function getFeaturedProductId()
    {
        return $this->helper->getGeneralConfig('product_id');
    }

    public function loadProductById($productId)
    {
        return $this->productRepository->getById($productId);
    }

    public function getImageUrl($product)
    {
        $store = $this->_storeManager->getStore();
        $imageUrl = $store->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/product' . $product->getImage();
        return $imageUrl;
    }


}
