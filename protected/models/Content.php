<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property integer $id
 * @property integer $pageId
 * @property string $lang
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $metaTitle
 * @property string $metaDescription
 * @property string $metaKeywords
 */
class Content extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pageId, lang, title', 'required'),
			array('pageId', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>2),
			array('title, slug, metaTitle, metaDescription, metaKeywords', 'length', 'max'=>255),
			array('body', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pageId, lang, title, slug, body, metaTitle, metaDescription, metaKeywords', 'safe', 'on'=>'search'),
			array('slug','SlugValidator'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pageId' => 'Page',
			'lang' => 'Lang',
			'title' => 'Title',
			'slug' => 'Slug',
			'body' => 'Body',
			'metaTitle' => 'Meta Title',
			'metaDescription' => 'Meta Description',
			'metaKeywords' => 'Meta Keywords',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('pageId',$this->pageId);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('metaTitle',$this->metaTitle,true);
		$criteria->compare('metaDescription',$this->metaDescription,true);
		$criteria->compare('metaKeywords',$this->metaKeywords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Content the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
