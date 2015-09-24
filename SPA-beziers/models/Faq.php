<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property string $question
 * @property string $reponse
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'reponse'], 'required'],
            [['question', 'reponse'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question' => 'Question',
            'reponse' => 'Reponse',
        ];
    }
}
