<?php

namespace Eccube\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecommendProduct
 */
class RecommendProduct
{
    /**
     * @var integer
     */
    private $product_id;

    /**
     * @var integer
     */
    private $recommend_product_id;

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $creator_id;

    /**
     * @var \DateTime
     */
    private $create_date;

    /**
     * @var \DateTime
     */
    private $update_date;

    /**
     * @var \Eccube\Entity\Product
     */
    private $Product;

    /**
     * @var \Eccube\Entity\Product
     */
    private $RecommendProduct;

    /**
     * @var \Eccube\Entity\Member
     */
    private $Creator;


    /**
     * Set product_id
     *
     * @param integer $productId
     * @return RecommendProduct
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get product_id
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set recommend_product_id
     *
     * @param integer $recommendProductId
     * @return RecommendProduct
     */
    public function setRecommendProductId($recommendProductId)
    {
        $this->recommend_product_id = $recommendProductId;

        return $this;
    }

    /**
     * Get recommend_product_id
     *
     * @return integer 
     */
    public function getRecommendProductId()
    {
        return $this->recommend_product_id;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return RecommendProduct
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return RecommendProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return RecommendProduct
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set creator_id
     *
     * @param integer $creatorId
     * @return RecommendProduct
     */
    public function setCreatorId($creatorId)
    {
        $this->creator_id = $creatorId;

        return $this;
    }

    /**
     * Get creator_id
     *
     * @return integer 
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * Set create_date
     *
     * @param \DateTime $createDate
     * @return RecommendProduct
     */
    public function setCreateDate($createDate)
    {
        $this->create_date = $createDate;

        return $this;
    }

    /**
     * Get create_date
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set update_date
     *
     * @param \DateTime $updateDate
     * @return RecommendProduct
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get update_date
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set Product
     *
     * @param \Eccube\Entity\Product $product
     * @return RecommendProduct
     */
    public function setProduct(\Eccube\Entity\Product $product = null)
    {
        $this->Product = $product;

        return $this;
    }

    /**
     * Get Product
     *
     * @return \Eccube\Entity\Product 
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set RecommendProduct
     *
     * @param \Eccube\Entity\Product $recommendProduct
     * @return RecommendProduct
     */
    public function setRecommendProduct(\Eccube\Entity\Product $recommendProduct = null)
    {
        $this->RecommendProduct = $recommendProduct;

        return $this;
    }

    /**
     * Get RecommendProduct
     *
     * @return \Eccube\Entity\Product 
     */
    public function getRecommendProduct()
    {
        return $this->RecommendProduct;
    }

    /**
     * Set Creator
     *
     * @param \Eccube\Entity\Member $creator
     * @return RecommendProduct
     */
    public function setCreator(\Eccube\Entity\Member $creator = null)
    {
        $this->Creator = $creator;

        return $this;
    }

    /**
     * Get Creator
     *
     * @return \Eccube\Entity\Member 
     */
    public function getCreator()
    {
        return $this->Creator;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreateDateAuto()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateDateAuto()
    {
        // Add your code here
    }
}
