<?php

/*
* class for Slug unique validate
*/
class SlugValidator extends CValidator {
  public $allowEmpty = false;
  public $message = "Ennek az URL tagnak teljesen egyedinek kell lennie! Már szerepel ennél a tartalomnál: ";
  //public $emptyMessage = "{attribute} nem lehet üres";
  public $emptyMessage = "Az URL tag nem lehet üres!";
  public $logValidationErrors = false;
  
  /*
  * validates $attribute in $object.
  *
  * @param CModel $object the object to check
  * @param string $attribute the attribute name to validate in the given $object.
  *
  * @throws CException
  */
  
  protected function validateAttribute($object, $attribute) {
    
    /* Üres */
    
    if (empty($object->$attribute)) {
	if ($this->allowEmpty) {
		return;
	}

	$this->addError($object, $attribute, $this->emptyMessage);
	return;
    }
    
    /* Categóri vizsgálat */
    
    $categories = Categories::model()->findByAttributes(array('slug'=>$object->$attribute));
    if($categories != NULL) {
    	$this->addError($object, $attribute, $this->message . $categories->title . " (Kategória)");
	return;
    }
    $content = Content::model()->findByAttributes(array('slug'=>$object->$attribute));
    if($content != NULL) {
    	$this->addError($object, $attribute, $this->message . $content->title . " (Oldal v. bejegyzés)");
	return;
    }
    
    /* OK */
    
    return;
    
  }
}
