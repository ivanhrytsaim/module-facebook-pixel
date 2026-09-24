<?php
declare(strict_types=1);

namespace Magefan\FacebookPixel\Block;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\User\Model\UserFactory;

class TestFixMe extends Template
{
    protected UserFactory $userFactory;

    public function __construct(
        Context $context,
        UserFactory $userFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->userFactory = $userFactory;
    }

    public function getUserName(string $id): string
    {
        $user = $this->userFactory->create()->load($id);
        return $user->getName();
    }
}