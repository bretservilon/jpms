<?php

class StoreItems extends \Phalcon\Mvc\Model
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
    public $item_title;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $item_url;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $item_description;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $big_pic;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $small_pic;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("jpms");
        $this->hasMany("id", "StoreCatAssign", "item_id");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'store_items';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreItems[]|StoreItems
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreItems
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
