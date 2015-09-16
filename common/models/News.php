<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class News extends ActiveRecord
{
   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[
                'title',               
                'text',
                'like_count',
                'created_date',
            ], 'safe'],
        ];

    }

}
