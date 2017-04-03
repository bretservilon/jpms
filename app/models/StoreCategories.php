<?php

class StoreCategories extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $cat_title;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $parent_cat_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $priority;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $posted_info;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $cat_url;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("jpms");
        $this->hasMany("id", "StoreCatAssign", "cat_id");

    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'store_categories';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreCategories[]|StoreCategories
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreCategories
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
