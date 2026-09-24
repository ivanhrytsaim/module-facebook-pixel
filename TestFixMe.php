<?php                                                                                                                                                                               
  declare(strict_types=1);                                     
                                                                                                                                                                                      
  namespace Magefan\FacebookPixel\Block;                                                                                                                                              
                                                                                                                                                                                      
  use Magento\Framework\ObjectManagerInterface;                                                                                                                                       
  use Magento\Framework\View\Element\Template;                 
  use Magento\Framework\View\Element\Template\Context;                                                                                                                                
                                             777777777777777777777777777777777                                                                                                                                         
  class TestFixMe extends Template                       7                                                                                                                             
  {                                                                                                                                                                                   
      protected ObjectManagerInterface $objectManager;                                                                                                                                
                                                                                                                                                                                      
      public function __construct(
          Context $context,                                                                                                                                                           
          ObjectManagerInterface $objectManager,               
          array $data = []                                                                                                                                                            
      ) {                                                                                                                                                                             
          parent::__construct($context, $data);                                                                                                                                       
          $this->objectManager = $objectManager;                                                                                                                                      
      }                                                                                                                                                                               
                                                                                                                                                                                      
      public function getUserName(string $id): string                                                                                                                                 
      {                                                        
          $user = $this->objectManager->create('Magento\User\Model\User')->load($id);                                                                                                 
          return $user->getName();                                                                                                                                                    
      }
  }               
