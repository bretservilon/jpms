<?php

class StoreCatAssign extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $cat_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $item_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("jpms");
 $this->belongsTo("item_id", "Storeitems", "id");
        $this->belongsTo("cat_id", "Storecategories", "id");

    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'store_cat_assign';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreCatAssign[]|StoreCatAssign
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StoreCatAssign
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
